<div class="table-responsive">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>Category Name</th>
        <th>Description</th>
        <th>Product</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($categories as $item)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $item->name }}</td>
          <td>{{ $item->description }}</td>
          <td>{{ $item->products->count() }}</td>
          <td>
            <a href="{{ url('admin/category/' . $item->id . '/edit') }}" class="btn btn-outline-secondary border-0">Edit</a>
            <button type="button" class="btn btn-outline-danger border-0">Delete</button>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  {{-- Pagination --}}
  {{ $categories->links('custom-pagination-links-view') }}
</div>