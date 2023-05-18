<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        if (DB::table('carts')->where('user_id', '=', auth()->id())->doesntExist()) {
            return redirect()->route('catalog.index');
        } else {
            $cart = Cart::select('id', 'user_id', 'product_id', 'quantity', 'price_per_item')->where('user_id', '=', auth()->id())->get();

            return view('checkout', ['cart' => $cart]);
        }
    }
}
