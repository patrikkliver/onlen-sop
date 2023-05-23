<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $products = Product::select('id', 'name', 'price', 'stock', 'description', 'category_id')->get();
        $categories = Category::select('id', 'name')->get();
        $cart = Cart::select('id', 'user_id', 'product_id', 'quantity', 'price_per_item')->where('user_id', '=', auth()->id())->get();
        
        return view('products', ['products' => $products, 'cart' => $cart, 'categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        $data = Category::select('id', 'name')->get();

        return view('product', ['categories' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $request->validate([
            'productName' => 'required|min:5',
            'productPrice' => 'required|integer',
            'productStock' => 'required|integer',
        ]);

        try {
            Product::create([
                'name' => $request->input('productName'),
                'price' => $request->input('productPrice'),
                'stock' => $request->input('productStock'),
                'category_id' => $request->input('categoryId'),
                'description' => $request->input('productDescription')
            ]);
            
            return redirect()->route('admin.product.index')->with(['status' => 'success', 'message' => 'Product baru berhasil ditambahkan.']);
        } catch (\Throwable $th) {
            return back()->with(['status' => 'danger', 'message' => $th->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) : View
    {
        try {
            $data = Product::findOrFail($id);

            return view('product.show', ['product' => $data]);
        } catch (\Throwable $th) {
            return back()->with(['status' => 'danger', 'message' => $th->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) : View
    {
        try {
            $cart = Cart::select('id', 'user_id', 'product_id', 'quantity', 'price_per_item')->where('user_id', '=', auth()->id())->get();
            $product = Product::findOrFail($id);
            $categories = Category::select('id', 'name')->get();

            return view('product-edit', ['product' => $product, 'categories' => $categories, 'cart' => $cart]);
        } catch (\Throwable $th) {
            return back()->with(['status' => 'danger', 'message' => $th->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) : RedirectResponse
    {
        $request->validate([
            'productName' => 'required|min:5',
            'productPrice' => 'required|integer',
            'productStock' => 'required|integer',
        ]);

        try {
            Product::findOrFail($id)->update([
                'name' => $request->input('productName'),
                'price' => $request->input('productPrice'),
                'stock' => $request->input('productStock'),
                'category_id' => $request->input('categoryId'),
                'description' => $request->input('producDescription')
            ]);
    
            return redirect()->route('admin.product.index')->with(['status' => 'success', 'message' => 'Product berhasil diubah.']);
        } catch (\Throwable $th) {
            return back()->with(['status' => 'danger', 'message' => $th->getMessage()]);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) : RedirectResponse
    {
        try {
            $data = Product::findOrFail($id);
            $data->delete();

            return redirect()->route('admin.product.index')->with(['status' => 'success', 'message' => 'Successfully deleted.']);
        } catch (\Throwable $th) {
            return back()->with(['status' => 'danger', 'message' => $th->getMessage()]);
        }
    }

    public function search(Request $request)
    {
        try {
            $products = Product::search($request->search)->get();
            $categories = Category::select('id', 'name')->get();
            
            return view('product.index', ['products' => $products, 'categories' => $categories]);
        } catch (\Throwable $th) {
            return back()->with(['status' => 'danger', 'message' => $th->getMessage()]);
        }
    }
}
