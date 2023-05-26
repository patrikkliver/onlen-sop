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
      @livewire('show-orders')
    </div>
  </div>
@endsection