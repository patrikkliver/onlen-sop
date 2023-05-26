<div class="table-responsive">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>Product Name</th>
        <th>Category</th>
        <th>Stock</th>
        <th>Price</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($products as $item)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $item->name }}</td>
          <td>{{ $item->category->name }}</td>
          <td>{{ $item->stock }}</td>
          <td>Rp {{ number_format($item->price, 0, ',', '.') }}</td>
          <td>
            <a href="{{ url('admin/product/' . $item->id . '/edit') }}" class="btn btn-outline-secondary border-0">Edit</a>
            <a href="#" class="btn btn-outline-danger border-0">Delete</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  {{-- Pagination --}}
  {{ $products->links('custom-pagination-links-view') }}
</div>