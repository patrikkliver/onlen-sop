@extends('layouts.app')
@section('title', 'Cart')
    
@section('content')
  <div class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
    <div class="card-body pb-4">
      <div class="d-flex align-items-start justify-content-between mb-3">
        <h4 class="pb-4">
          <span class="fw-normal">Cart List</span>
        </h4>
      </div>
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Product Name</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Subtotal</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($cart as $item)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->product->name }}</td>
                <td>Rp {{ number_format($item->price_per_item, 0, ',', '.') }}</td>
                <td>{{ $item->quantity }}</td>
                <td>Rp {{number_format($item->price_per_item * $item->quantity, 0 ,',', '.')}}</td>
                <td>
                  <form action="{{ route('cart.destroy', $item->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-outline-danger border-0" data-bs-toggle="tooltip" title="Remove" onclick="return confirm('Are you sure want to delete this item?')">Remove</button>
                  </form>
                </td>
              </tr>
            @endforeach
            <tr>
              @php
                $subTotal = 0;
                foreach ($cart as $item) {
                    $subTotal += ($item->quantity * $item->price_per_item);
                }
              @endphp
              <th scope="row" colspan="4">Total</th>
              <td scope="row" colspan="2">Rp {{ number_format($subTotal, 0, ',', '.') }}</td>
            </tr>
          </tbody>
        </table>
      </div>
      <button class="btn btn-dark mt-5">Go to checkout</button>
      <a href="{{ url('catalog') }}" class="btn btn-outline-secondary border-0 mt-5">Continue shopping</a>
    </div>
  </div>
@endsection