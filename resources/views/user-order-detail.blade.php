@extends('layouts.app')
@section('title', 'Order Detail')

@section('content')
  <div class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
    <div class="card-body pb-4">
      <div class="d-flex align-items-start justify-content-between mb-3">
        <h4 class="pb-4">
          <span class="fw-normal">Order details</span>
        </h4>
      </div>
      <p><strong>Order Number: </strong>{{ $order->order_number }}</p>
      <p><strong>Order Date: </strong>{{ $order->created_at }}</p>
      <p><strong>Order Status: </strong><span class="badge text-bg-success">{{ $order->status }}</span></p>
      <p><strong>Tax Shipping: </strong>Rp 200.000</p>
      <p><strong>Total: </strong>Rp {{ number_format($order->total_price, 0, ',', '.') }}</p>
    </div>
  </div>
  <div class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
    <div class="card-body pb-4">
      <div class="d-flex align-items-start justify-content-between mb-3">
        <h4 class="pb-4">
          <span class="fw-normal">Items ordered</span>
        </h4>
      </div>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Product Name</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Total</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($order->order_item as $item)
              <tr>
                <td>{{ $item->product->name }}</td>
                <td>Rp {{ number_format($item->price_per_item, 0, ',', '.') }}</td>
                <td>{{ $item->quantity }}</td>
                <td>Rp {{ number_format($item->price_per_item * $item->quantity, 0, ',', '.') }}</td>
              </tr>
            @endforeach
          </tbody>
          <tfoot>
            @php
              $subTotal = 0;
              foreach ($order->order_item as $item) {
                  $subTotal += ($item->quantity * $item->price_per_item);
              }
            @endphp
            <tr>
              <td colspan="3" class="text-end">Subtotal</td>
              <td>Rp {{ number_format($subTotal, 0, ',', '.') }}</td>
            </tr>
            <tr>
              <td colspan="3" class="text-end">Shipping</td>
              <td>Rp 200.000</td>
            </tr>
            <tr>
              <td colspan="3" class="text-end">Total</td>
              <td>Rp {{ number_format($subTotal, 0, ',', '.') }}</td>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
@endsection