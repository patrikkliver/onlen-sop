<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CatalogController extends Controller
{
    public function index() : View
    {
        $cart = Cart::select('id', 'user_id', 'product_id', 'quantity', 'price_per_item')->where('user_id', '=', auth()->id())->get();

        return view('catalog', ['cart' => $cart]);
    }

    public function show(string $id) : View
    {
        try {
            $product = Product::findOrFail($id);
            $product_related = Product::where('category_id', $product->category_id)->get();
            $cart = Cart::select('id', 'user_id', 'product_id', 'quantity', 'price_per_item')->where('user_id', '=', auth()->id())->get();
            return view('catalog-single', ['product' => $product, 'product_related' => $product_related, 'cart' => $cart]);
        } catch (\Throwable $th) {
            return back()->with(['status' => 'danger', 'message' => $th->getMessage()]);
        }
        
    }
}
