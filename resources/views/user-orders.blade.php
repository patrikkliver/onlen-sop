@extends('layouts.app')
@section('title', 'Order List')

@section('content')
  <div class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
    <div class="card-body pb-4">
      <div class="d-flex align-items-start justify-content-between mb-3">
        <h4 class="pb-4">
          <span class="fw-normal">Order List</span>
        </h4>
      </div>
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Order ID</th>
              <th>Order Date</th>
              <th>Total</th>
              <th>Status</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($orders as $item)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->order_number }}</td>
                <td>{{ $item->created_at }}</td>
                <td>Rp {{ number_format($item->total_price, 0, ',', '.') }}</td>
                <td><span class="badge text-bg-primary">{{ $item->status }}</span></td>
                <td><a href="{{ url('order/' . $item->id) }}" class="btn btn-outline-secondary border-0">Details</a></td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection