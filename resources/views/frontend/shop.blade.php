<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/assets/css/shop.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tienda</title>
    <link rel="stylesheet" href="{{ asset('assets/css/shop.css') }}">
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
           </div>
        </div>
        <div class="shop">
            <div class="shop__title">
                <h1>Todos los autos</h1>
            </div>
            <div class="shop__sections">
                @foreach($products as $product)
                    <div class="shop__sections--product">
                        <div class="image-shop">
                            <img src="{{$product->image}}" alt="">
                        </div>
                        <h4>{{$product->name}}</h4>
                        <p>DOP <strong>{{$product->price}}</strong></p>
                        <button class="button details">Comprar</button>
                    </div>
                @endforeach

            </div>
        </div>
</body>
</html>
