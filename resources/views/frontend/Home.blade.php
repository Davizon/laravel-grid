<!doctype html>
<html lang="en">
  <head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
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
                          <div class="link"><a href="/">About</a></div>
                          <div class="link"><a href="/">Tienda</a></div>
                      </div>
                      <div class="Home__Header--navbar-logo">
                          <img src="{{ asset('assets/images/logo/TigersDiller.png') }}" alt="">
                      </div>
                      <div class="Home__Header--navbar-icons">
                        <a href="/">Iniciar Sesion</a>
                      </div>
                  </div>
              </header>
              <div class="Home__Portada">
                  <div class="Home__Portada--details">
                    <div>
                      <span>Oferta Exclusiva de 40% de Descuento</span>
                      <h1>Lamborghini Veneno <br>Sport</h1>
                      <h5>USD<strong>$12,000.00</strong></h5>
                      <button>Shop Now</button>
                    </div>
                  </div>
                  <div class="Home__Portada--image">
                      <img src="" alt="">
                  </div>
                  <div class="Home__Portada--bar">
                     <div class="Home__Portada--bar-sections">
                         <h4>Lo mas novedoso</h4>
                         <span>Tenemos la mejor calidad del mercado.</span>
                     </div>
                     <div class="Home__Portada--bar-sections">
                         <h4>Algo personalizado?</h4>
                         <span>Tambien podemos personalizar tu vehiculo.</span>
                     </div>
                     <div class="Home__Portada--bar-sections">
                         <h4>No tienes suficiente dinero?</h4>
                         <span>Con nuestros planes puedes sacar uno y pagarlo poco a poco.</span>
                     </div>
                     <div class="Home__Portada--bar-sections">
                         <h4>Algo mas?</h4>
                         <span>Contactanos si deseas alguna informacion especifica.</span>
                    </div>
                  </div>
              </div>
              <div class="Home__Trending">
                  <div class="Home__Trending--title">
                      <h2> --> Trending <-- </h2>
                      <span>Lo mas visto esta semana.</span>
                  </div>
                  <div class="Home__Trending--products">
                      @foreach($products as $product)
                          @if($product->isTrending === 0)
                              <div class="Home__Trending--products-product">
                                  <img src="{{$product->image}}" alt="">
                                  <p class="product-name">{{$product->name}}</p>
                                  <p class="product-price">USD ${{$product->price}}</p>
                              </div>
                          @endif
                      @endforeach
                  </div>
              </div>
              <div class="Home__Category">
                  <div class="Home__Category--title">
                      <h4>Mas vendidos</h4>
                    </div>
                    <div class="Home__Category--view">
                      <span><a href="">Ver todo</a></span>
                    </div>
                    <div class="Home__Category--products">
                        @foreach($products as $producto)
                            @foreach($categories as $category)
                                @if($producto->id === $category->product_id && $category->categoryIsHome === 0)
                                    <div class="Home__Category--products-product">
                                        <img src="{{$product->image}}" alt="">
                                        <p class="product-name">{{$producto->name}}</p>
                                        <p class="product-price">USD ${{$producto->price}}</p>
                                    </div>
                                @endif
                            @endforeach
                        @endforeach
                    </div>
              </div>
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
