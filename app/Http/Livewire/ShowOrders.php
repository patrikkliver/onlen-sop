<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class ShowOrders extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        if (auth()->user()->is_admin) {
            $orders = Order::select('id', 'order_number', 'user_id', 'status', 'total_price', 'shipping_address', 'order_notes', 'created_at')->paginate(10);
        } else {
            $orders = Order::select('id', 'order_number', 'user_id', 'status', 'total_price', 'shipping_address', 'order_notes', 'created_at')->where('user_id', '=', auth()->id())->paginate(10);
        }
        return view('livewire.show-orders', [
            'orders' => $orders
        ]);
    }
}
