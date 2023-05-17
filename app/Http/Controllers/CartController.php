<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class CartController extends Controller
{
    public function index() : View
    {
        $cart = Cart::select('id', 'user_id', 'product_id', 'quantity', 'price_per_item')->where('user_id', '=', auth()->id())->get();

        return view('cart', ['cart' => $cart]);
    }
    
    public function store(Request $request) : RedirectResponse
    {
        $product = Product::find($request->input('product_id'));
        $product_id = $product->id;
        $price = $product->price;
        $user_id = auth()->user()->id;

        $cart = Cart::where('user_id', $user_id)->where('product_id', $product_id)->first();

        if ($cart) {
            try {
                $cart->update([
                    $cart->quantity += 1
                ]);
                
                return redirect()->route('catalog.index')->with(['status' => 'success', 'message' => 'Product berhasil ditambahkan ke dalam cart.']);
            } catch (\Throwable $th) {
                return back()->with(['status' => 'danger', 'message' => $th->getMessage()]);
            }
        } else {
            try {
                Cart::create([
                    'user_id' => $user_id,
                    'product_id' => $product_id,
                    'price_per_item' => $price
                ]);

                return redirect()->route('catalog.index')->with(['status' => 'success', 'message' => 'Product berhasil ditambahkan ke dalam cart.']);
            } catch (\Throwable $th) {
                return back()->with(['status' => 'danger', 'message' => $th->getMessage()]);
            }
        }
    }

    public function destroy(string $id) : RedirectResponse
    {
        try {
            $data = Cart::findOrFail($id);
            $data->delete();

            return redirect()->route('catalog.index')->with(['status' => 'success', 'message' => 'Successfully deleted.']);
        } catch (\Throwable $th) {
            return back()->with(['status' => 'danger', 'message' => $th->getMessage()]);
        }
    }
}
