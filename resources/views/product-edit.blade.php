@extends('layouts.app')
@section('title', 'Category Edit')

@section('content')
  <div class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
    <div class="card-body pb-4">
      <form method="POST" action="{{ route('admin.product.update', $product->id) }}" class="needs-validation" novalidate>
        @csrf @method('PUT')
        <div class="row g-3 mb-3">
          <div class="col-sm-6">
            <label for="productName" class="form-label">Product name</label>
            <input type="text" name="productName" class="form-control" id="productName" value="{{ $product->name }}" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>

          <div class="col-sm-6">
            <label for="productStock" class="form-label">Stock</label>
            <input type="number" name="productStock" class="form-control" id="productStock" value="{{ $product->stock }}" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>

          <div class="col-sm-6">
            <label for="productPrice" class="form-label">Price</label>
            <input type="number" name="productPrice" class="form-control" id="productPrice" value="{{ $product->price }}" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>

          <div class="col-sm-6">
            <label for="categoryId" class="form-label">Category</label>
            <select class="form-select" id="categoryId" name="categoryId" required>
              <option value="">{{ _('Select Category') }}</option>
              @foreach ($categories as $item)
                <option value="{{ $item->id }}" @selected(old('categoryId', $product->category_id) == $item->id)>{{ $item->name }}</option>
              @endforeach
            </select>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>

          <div class="col-sm-12">
            <label for="categoryDescription" class="form-label">Description</label>
            <textarea name="categoryDescription" class="form-control" id="categoryDescription" cols="30" rows="5">{{ $product->description }}</textarea>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-dark">Save change</button>
        <a href="{{ url('admin/product') }}" class="btn btn-outline-secondary border-0">Go back</a>
      </form>
    </div>
  </div>
@endsection