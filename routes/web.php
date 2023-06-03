<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $cart = Cart::select('id', 'user_id', 'product_id', 'quantity', 'price_per_item')->where('user_id', '=', auth()->id())->get();
    $products = Product::select('id', 'name', 'price', 'stock', 'description', 'category_id')->get();
    return view('catalog', ['products' => $products, 'cart' => $cart]);
})->name('catalog');

Route::get('catalog', [CatalogController::class, 'index'])->name('catalog.index');
Route::get('catalog/{catalog}', [CatalogController::class, 'show'])->name('catalog.show');

Auth::routes(['verify' => true]);

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
    Route::delete('cart/{cart}', [CartController::class, 'destroy'])->name('cart.destroy');
    Route::get('checkout', CheckoutController::class)->name('checkout');

    // Route for Admin
    Route::middleware('is_admin')->prefix('admin')->name('admin.')->group(function () {
        Route::resource('order', OrderController::class)->except('create');
        Route::resource('category', CategoryController::class);
        Route::resource('product', ProductController::class);
    });

    // Route for User
    Route::prefix('user')->name('user.')->group(function () {
        Route::resource('order', OrderController::class)->except('create');
    });
});
