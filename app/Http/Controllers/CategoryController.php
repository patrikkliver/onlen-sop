<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $categories = Category::select('id', 'name', 'description')->get();
        $cart = Cart::select('id', 'user_id', 'product_id', 'quantity', 'price_per_item')->where('user_id', '=', auth()->id())->get();
        
        return view('categories', ['categories' => $categories, 'cart' => $cart]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $request->validate([
            'categoryName' => 'required|min:5'
        ]);

        try {
            Category::create([
                'name' => $request->input('categoryName'),
                'description' => $request->input('categoryDescription')
            ]);

            return redirect()->route('admin.produc.index')->with(['status' => 'success', 'message' => 'Category baru berhasil disimpan.']);
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
            $category = Category::findOrFail($id);
            $cart = Cart::select('id', 'user_id', 'product_id', 'quantity', 'price_per_item')->where('user_id', '=', auth()->id())->get();
            $categories = Category::select('id', 'name', 'description')->get();
            return view('category.show', ['cart' => $cart, 'categories' => $categories, 'category' => $category]);
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
            $category = Category::findOrFail($id);
            $cart = Cart::select('id', 'user_id', 'product_id', 'quantity', 'price_per_item')->where('user_id', '=', auth()->id())->get();

            return view('category-edit', ['cart' => $cart, 'category' => $category]);
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
            'categoryName' => 'required|min:5'
        ]);

        try {
            Category::findOrFail($id)->update([
                'name' => $request->input('categoryName'),
                'description' => $request->input('categoryDescription'),
            ]);
    
            return redirect()->route('admin.category.index')->with(['status' => 'success', 'message' => 'Category berhasil dibuah.']);
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
            $data = Category::findOrFail($id);
            $data->delete();

            return redirect()->route('admin.category.index')->with(['status' => 'success', 'message' => 'Category berhasil dihapus.']);
        } catch (\Throwable $th) {
            return back()->with(['status' => 'danger', 'message' => $th->getMessage()]);
        }
    }

    public function search(Request $request)
    {
        try {
            $categories = Category::search($request->search)->get();
            
            return view('category.index', ['categories' => $categories]);
        } catch (\Throwable $th) {
            return back()->with(['status' => 'danger', 'message' => $th->getMessage()]);
        }
    }
}
