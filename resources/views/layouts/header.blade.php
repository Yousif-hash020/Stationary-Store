 <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

     <title>Modern Stationary Store</title>
    <link rel="stylesheet" href="{{ url('/frontend/assets/css/styles.css') }}" />
     <link rel="stylesheet" href="{{ url('/frontend/assets/css/wishlist.css') }}">
    <link rel="stylesheet" href="{{ url('/frontend/assets/css/shop.css') }}">
        <link rel="stylesheet" href="{{ url('/frontend/assets/css/details.css') }}" />
          <link rel="stylesheet" href="{{ url('/frontend/assets/css/checkout.css') }}">
              <link rel="stylesheet" href="{{ url('/frontend/assets/css/cart.css') }}">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
       
    </head>
<body>
 
 <!-- Navigation -->
    <nav class="navbar">
      <div class="nav-container">
        <div class="logo">
          <h1><i class="fas fa-pen-fancy"></i> Stationary<span>Store</span></h1>
        </div>
        <ul class="nav-links">
          <li><a href="#" class="active"><i class="fas fa-home"></i> Home</a></li>
          <li><a href="#"><i class="fas fa-shopping-bag"></i> Products</a></li>
          <li><a href="#"><i class="fas fa-th-large"></i> Categories</a></li>
          <li><a href="#"><i class="fas fa-info-circle"></i> About</a></li>
          <li><a href="#"><i class="fas fa-envelope"></i> Contact</a></li>
        </ul>
        <div class="nav-icons">
          <a href="#" class="nav-icon notification-icon"><i class="fas fa-search"></i></a>
          <a href="wishlist.html" class="nav-icon">
            <i class="fas fa-heart"></i>
            <span class="wishlist-counter">3</span>
          </a>
          <a href="cart.html" class="nav-icon">
            <i class="fas fa-shopping-bag"></i>
            <span class="cart-counter">2</span>
          </a>
          <a href="auth.html" class="nav-icon notification-icon"><i class="fas fa-user"></i></a>
        </div>
        <div class="hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </nav>