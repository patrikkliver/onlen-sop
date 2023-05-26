<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ShowCatalog extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    
    public function render()
    {
        return view('livewire.show-catalog', [
            'products' => Product::select('id', 'name', 'price', 'stock', 'description', 'category_id')->paginate(8)
        ]);
    }
}
