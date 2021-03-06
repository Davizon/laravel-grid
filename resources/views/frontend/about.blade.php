<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/About.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
    <link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">
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
                     @if($role === '')
                          <div class="Home__Header--navbar-icons">
                              <a href="/login">Login</a>
                          </div>
                      @elseif($role === "admin")
                          <div class="Home__Header--navbar-icons">
                              <a href="/products">Admin</a>
                          </div>
                      @elseif($role === "client")
                          <div class="Home__Header--navbar-icons">
                              <a href="/">Hola, {{Auth::user()->name}}</a>
                          </div>
                      @endif
                  </div>
              </header>
              <div class="About">
                  <div class="About__Title">
                      <h1>Sobre Nosotros</h1>
                  </div>
                  <div class="About__information">
                      <div class="About__information--image">
                          <img src="{{ asset('assets/images/about.png') }}" alt="">
                      </div>
                      <div class="About__information--details">
                        <div>
                           <h2 style="text-align: center"> Acerca de nosotros.</h2>
                           <p style="line-height: 2;"> Somos una gran empresa.
                            Vendemos autos de calidad.
                            Fundada el 27 de julio del 2003.
                            Record mejores ventas en el año 2018.
                            Record por fabricar el auto mas veloz 2016.
                            Record a la venta de autos mas seguros 2015.
                            Rifa anual de uno de nuestros autos para nuestros clientes.
                            Festivales de carreras de autos anuales para nuestros clientes.
                            Empezamos como 5 miembros, y hoy ya sumamos mas de mil empleados.
                            Patrocinamos empresas pequeñas que quieran emprender. </p>
                        </div>
                      </div>
                    </div>
                    <div class="About__profiles">
                        <div class="About__profiles--profile">
                            <img src="{{ asset('assets/images/5.jpg') }}" alt="">
                            <a href="https://www.facebook.com/AngelBather" target="_blanc">Angel Bather</a>
                        </div>
                        <div class="About__profiles--profile">
                            <img src="{{ asset('assets/images/1.jpg') }}" alt="">
                            <a href="https://www.facebook.com/angel.pinales.58" target="_blanc">Angel Pinales</a>
                        </div>
                        <div class="About__profiles--profile">
                            <img src="{{ asset('assets/images/3.jpg') }}" alt="">
                            <a href="https://www.facebook.com/frankling.santos.10" target="_blanc">Frankling Santos</a>
                        </div>
                        <div class="About__profiles--profile">
                            <img src="{{ asset('assets/images/2.jpg') }}" alt="">
                            <a href="https://www.facebook.com/profile.php?id=100006916784722" target="_blanc">Jefrey Castillo</a>
                        </div>
                        <div class="About__profiles--profile">
                            <img src="{{ asset('assets/images/4.jpg') }}" alt="">
                            <a href="https://www.facebook.com/profile.php?id=100012001510358" target="_blanc">Oscar Beltre</a>
                        </div>
                    </div>
                 </div>
                  </div>
              </div>
        </div>
    </div>
</body>
</html>
