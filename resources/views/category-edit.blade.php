@extends('layouts.app')
@section('title', 'Category Edit')

@section('content')
  <div class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
    <div class="card-body pb-4">
      <form method="POST" action="{{ route('admin.category.update', $category->id) }}" class="needs-validation" novalidate>
        @csrf @method('PUT')
        <div class="row g-3 mb-3">
          <div class="col-sm-12">
            <label for="categoryName" class="form-label">Category name</label>
            <input type="text" name="categoryName" class="form-control" id="categoryName" value="{{ $category->name }}" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>

          <div class="col-sm-12">
            <label for="categoryDescription" class="form-label">Description</label>
            <textarea name="categoryDescription" class="form-control" id="categoryDescription" cols="30" rows="5">{{ $category->description }}</textarea>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-dark">Save change</button>
        <a href="{{ url('admin/category') }}" class="btn btn-outline-secondary border-0">Go back</a>
      </form>
    </div>
  </div>
@endsection