<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        if (auth()->user()->is_admin) {
            $data = Order::select('id', 'order_number', 'user_id', 'status', 'total_price', 'shipping_address', 'order_notes', 'created_at')->get();
        } else {
            $data = Order::select('id', 'order_number', 'user_id', 'status', 'total_price', 'shipping_address', 'order_notes', 'created_at')->where('user_id', '=', auth()->id())->get();
        }
        $cart = Cart::select('id', 'user_id', 'product_id', 'quantity', 'price_per_item')->where('user_id', '=', auth()->id())->get();
        
        return view('orders', ['orders' => $data, 'cart' => $cart]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Order::count() == 0) {
            $orderNumber = 'ORD-'.date('Ymd').sprintf('%06d', 1);
        } else {
            $lastOrder = Order::orderBy('id', 'desc')->first();
            $orderNumber = 'ORD-'.date('Ymd').sprintf('%06d', $lastOrder->id + 1);
        }

        $carts = Cart::select('id', 'quantity', 'product_id', 'price_per_item')->where('user_id', '=', auth()->id())->get();
        
        $subTotal = 0;
        foreach ($carts as $cart) {
            $subTotal += ($cart->quantity * $cart->price_per_item);
        }

        $totalPrice = $subTotal + $request->input('taxes') + $request->input('shipping-cost');

        DB::beginTransaction();

        try {
            $order = Order::create([
                'order_number' => $orderNumber,
                'total_price' => $totalPrice,
                'user_id' => auth()->id(),
                'shipping_address' => $request->input('address'),
                'order_notes' => $request->input('order-notes'),
            ]);

            foreach ($carts as $cart) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $cart->product_id,
                    'quantity' => $cart->quantity,
                    'price_per_item' => $cart->price_per_item
                ]);
            }

            Cart::where('user_id', auth()->id())->delete();

            DB::commit();

            return redirect()->route('catalog.index')->with(['status' => 'success', 'message' => 'Order created successfully.']);
        } catch (\Throwable $th) {
            DB::rollback();

            return back()->with(['status' => 'danger', 'message' => $th->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) : View
    {
        $order = Order::findOrFail($id);
        $cart = Cart::select('id', 'user_id', 'product_id', 'quantity', 'price_per_item')->where('user_id', '=', auth()->id())->get();

        return view('order-detail', ['order' => $order, 'cart' => $cart]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) : View
    {
        $this->authorize('update-order');

        $data = Order::findOrFail($id);
        $carts = Cart::select('id', 'user_id', 'product_id', 'quantity', 'price_per_item')->where('user_id', '=', auth()->id())->get();
        return view('order.edit', ['order' => $data, 'carts' => $carts]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) : RedirectResponse
    {
        $this->authorize('update-order');

        $request->validate([
            'status' => 'required',
        ]);

        Order::findOrFail($id)->update([
            'status' => $request->input('status'),
        ]);

        return redirect()->route('admin.order.index')->with(['status' => 'success', 'message' => 'Order updated successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) : RedirectResponse
    {
        $this->authorize('delete-order');

        DB::beginTransaction();

        try {
            DB::table('order_items')->where('order_id', $id)->delete();
            DB::table('orders')->where('id', $id)->delete();
            DB::commit();

            return redirect()->route('admin.order.index')->with(['status' => 'success', 'message' => 'Order deleted successfully.']);
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
            return back()->with(['status' => 'danger', 'message' => 'something went wrong!']);
        }
    }

    public function search(Request $request)
    {
        try {
            $orders = Order::search($request->search)->get();
            
            return view('order.index', ['orders' => $orders]);
        } catch (\Throwable $th) {
            return back()->with(['status' => 'danger', 'message' => $th->getMessage()]);
        }
    }
}
