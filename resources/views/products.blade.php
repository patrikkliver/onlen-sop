@extends('layouts.app')
@section('title', 'Product List')

@section('content')
  <!-- Modal add new product -->
  <div class="modal fade" id="addNewProduct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addNewProductLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content p-3">
        <div class="modal-header border-0">
          <h4 class="modal-title">Create New Product</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form class="modal-body" method="POST" action="{{ route('admin.product.store') }}">
          @csrf
          <div class="mb-2">
            <label for="productName" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="productName" name="productName" placeholder="iPhone 13 Pro Max">
          </div>
          <div class="mb-2">
            <label for="productStock" class="form-label">Stock</label>
            <input type="number" class="form-control" id="productStock" name="productStock" placeholder="10">
          </div>
          <div class="mb-2">
            <label for="productPrice" class="form-label">Price</label>
            <input type="number" class="form-control" id="productPrice" name="productPrice" placeholder="100000">
          </div>
          <div class="mb-2">
            <label for="categoryId" class="form-label">Category</label>
            <select class="form-select" id="categoryId" name="categoryId" aria-label="Category">
              @foreach ($categories as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="mb-4">
            <label for="productDescription" class="form-label">Description</label>
            <textarea class="form-control" name="productDescription" id="productDescription" cols="30" rows="5"></textarea>
          </div>
          <div class="d-flex flex-column flex-sm-row">
            <button class="btn btn-dark mb-3 mb-sm-0" type="submit">Create new product</button>
            <button class="btn btn-outline-secondary ms-sm-3" type="reset" data-bs-dismiss="modal">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
    <div class="card-body pb-4">
      <div class="d-flex align-items-start justify-content-between mb-3">
        <h4 class="pb-4">
          <span class="fw-normal">Products</span>
        </h4>
        <div class="d-flex align-items-center flex-shrink-0">
          <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addNewProduct">Add new product</button>
        </div>
      </div>
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
      </div>
      <!-- Pagination -->
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled">
            <a class="page-link">Previous</a>
          </li>
          <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
        <div class="d-flex justify-content-center">
          <span class="text-muted">Showing 1 to 10 of 30 records</span>
        </div>
      </nav>
    </div>
  </div>
@endsection