@extends('layouts.app')
@section('title', 'Catalog Detail')

@section('content')
  <div class="row gx-4 gx-lg-5 align-items-center">
    <div class="col-md-6">
      <img class="card-img-top mb-5 mb-md-0" src="https://dummyimage.com/600x700/dee2e6/6c757d.jpg" alt="..." />
    </div>
    <div class="col-md-6">
      <div class="small mb-1">SKU: BST-498</div>
      <h1 class="display-5 fw-bolder">{{ $product->name }}</h1>
      <div class="fs-5 mb-5">
        <span class="text-decoration-line-through">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
        <span>Rp {{ number_format($product->price, 0, ',', '.') }}</span>
      </div>
      <p class="lead">{{ $product->description }}</p>
      <div class="d-flex">
        <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
        <form action="{{ route('cart.store') }}" method="POST">
          @csrf
          <input type="hidden" name="product_id" value="{{ $product->id }}">
          <button type="submit" class="btn btn-dark flex-shrink-0"><i class="bi-cart-fill me-1"></i>Add to cart</button>
        </form>
      </div>
    </div>
  </div>

  <h2 class="fw-bolder mt-5 mb-4 py-3">Related products</h2>
  <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
    @foreach ($product_related as $item)
      <div class="col mb-5">
        <div class="card h-100">
          <!-- Product image-->
          <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
          <!-- Product details-->
          <div class="card-body p-4">
            <div class="text-center">
              <!-- Product name-->
              <h5 class="fw-bolder"><a href="{{ url('catalog/' . $item->id) }}" class="text-decoration-none text-dark"> {{ $item->name }}</a></h5>
              <!-- Product price-->
              Rp {{ number_format($item->price, 0, ',', '.') }}
            </div>
          </div>
          <!-- Product actions-->
          <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center"><a class="btn btn-dark mt-auto" href="#">Add to cart</a></div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection