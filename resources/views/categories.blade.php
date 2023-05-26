@extends('layouts.app')
@section('title', 'Category List')

@section('content')
  <!-- Modal add new category -->
  <div class="modal fade" id="addNewCategory" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addNewCategoryLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content p-3">
        <div class="modal-header border-0">
          <h4 class="modal-title">Create New Category</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form class="modal-body" method="POST" action="{{ route('admin.category.store') }}">
          @csrf
          <div class="mb-4">
            <label for="categoryName" class="form-label">Category Name</label>
            <input type="text" name="categoryName" class="form-control" id="categoryName" placeholder="Storage Devices">
          </div>
          <div class="mb-4">
            <label for="categoryDescription" class="form-label">Description</label>
            <textarea name="categoryDescription" id="categoryDescription" class="form-control" cols="30" rows="5"></textarea>
          </div>
          <div class="d-flex flex-column flex-sm-row">
            <button class="btn btn-dark mb-3 mb-sm-0" type="submit">Create new category</button>
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
          <span class="fw-normal">Categories</span>
        </h4>
        <div class="d-flex align-items-center flex-shrink-0">
          <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addNewCategory">Add new category</button>
        </div>
      </div>
      @livewire('show-categories')
    </div>
  </div>
@endsection