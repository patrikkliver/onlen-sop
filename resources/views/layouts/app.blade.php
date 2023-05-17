<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <!-- SEO Meta Tags-->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="E-Commerce Application" />
  <meta name="author" content="KliverTech" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <title>{{ config('app.name', 'Ecommerce') }} - @yield('title')</title>
  
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="favicon.ico" />
  <!-- Bootstrap icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Scripts -->
  @vite(['resources/css/bootstrap.min.css', 'resources/js/app.js'])
</head>

<body class="bg-light">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container px-4 px-lg-5">
      <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">Shop</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#!">All Products</a></li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li><a class="dropdown-item" href="#!">Popular Items</a></li>
              <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">Orders</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#!">New</a></li>
              <li><a class="dropdown-item" href="#!">Processed</a></li>
              <li><a class="dropdown-item" href="#!">Shipped</a></li>
              <li><a class="dropdown-item" href="#!">Returned</a></li>
            </ul>
          </li>
          @auth
            <li class="nav-item"><a href="{{ url('cart') }}" class="nav-link">Cart<span class="badge bg-dark text-white ms-1 rounded-pill">{{ $cart->count() }}</span></a></li>
          @endauth
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ms-auto">
          <!-- Authentication Links -->
          @guest
            @if (Route::has('login'))
              <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
            @endif

            @if (Route::has('register'))
              <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
            @endif
          @else
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ Auth::user()->name }}</a>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </div>
            </li>
          @endguest
        </ul>
      </div>
    </div>
  </nav>
  <!-- Section-->
  <section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        @yield('content')
    </div>
  </section>

  <!-- Footer-->
  <footer class="py-5">
    <div class="container">
      <div class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-muted">Copyright &copy; Your Website 2023</p>
    
        <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        </a>
    
        <ul class="nav col-md-4 justify-content-end">
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
        </ul>
      </div>
    </div>
  </footer>

  @stack('scripts')
</body>
</html>