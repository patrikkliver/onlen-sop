<div class="table-responsive">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>Order ID</th>
        <th>Customer Name</th>
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
          <td>{{ $item->user->name }}</td>
          <td>{{ $item->created_at }}</td>
          <td>Rp {{ number_format($item->total_price, 0, ',', '.') }}</td>
          <td><span class="badge text-bg-primary">{{ $item->status }}</span></td>
          <td><a href="{{ url((auth()->user()->is_admin ? 'admin' : 'user') . '/order/' . $item->id) }}" class="btn btn-outline-secondary border-0">Details</a></td>
        </tr>
      @endforeach
    </tbody>
  </table>

  {{-- Pagination --}}
  {{ $orders->links('custom-pagination-links-view') }}
</div>