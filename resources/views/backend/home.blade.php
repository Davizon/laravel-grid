<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('assets/css/home-styles.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
</head>
<body>
        <div id="app">
          <div class="Home">
              <header class="Home__Header">
                  <div class="Home__Header--infobar">
                      <div class="Home__Header--infobar--contact">
                          <span>Para Cualquier Inquietud Contactanos al: 829-323-5409</span>
                      </div>
                      <div class="Home__Header--infobar-social">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-linkedin-in"></i>
                      </div>
                  </div>
                  <div class="Home__Header--navbar">
                      <div class="Home__Header--navbar-links">
                          <div class="link"><a href="/">Home</a></div>
                          <div class="link"><a href="/about">About</a></div>
                          <div class="link"><a href="/shop">Tienda</a></div>
                      </div>
                      <div class="Home__Header--navbar-logo">
                          <a href="/"><img src="{{ asset('assets/images/logo/TigersDiller.png') }}" alt=""></a>
                      </div>
                      <div class="Home__Header--navbar-icons">
                        <a href="/">Iniciar Sesion</a>
                      </div>
                  </div>
              </header>

              <div class="Home__products">
                @foreach($products as $product)
                <div class="Home__products--product">
                        <img src="{{$product->image}}" alt="">
                <h1 class="Home__products--details">Nombre: {{$product->name}}</h1>
                <p class="Home__products--details">Descripcion: {{$product->description}}</p>
                <p class="Home__products--details">isTrending: {{$product->isTrending}}</p>
                <p class="Home__products--details">Precio: {{$product->price}}</p>
                <span><a class="Home__products--details" href="/products/{{ $product->id }}/edit">Edit</a></span>
                </div>
                @endforeach
        
                    
</body>
</html>
