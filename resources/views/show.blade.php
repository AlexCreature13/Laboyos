<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Alex Creature</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="body">
  <center>
    <div class="card">
      <div class="Header">
        <br><br>
        <img src="images/cafelogo.png" alt="">
        <br>
        <div class="container">
          <nav>
            <a href="{{ url ('/index') }}">Inicio</a>
            <a href="{{ url ('/nosotros') }}">Nosotros</a>
            <a href="{{ url ('/ubicacion') }}">Ubicacion</a>
            <a href="{{ url ('/contactanos') }}">Contactanos</a>
            <div class="animation start-home"></div>
          </nav>
        </div>
      </div>  
      <br>
      <div class="Content container">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="bd-placeholder-img" width="100%" height="100%" src="images/Rcafe.png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>
              <div class="container">
                <div class="carousel-caption text-start">
                  <h1 style="color: white;">El mejor cafe que podras encontrar.</h1>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img class="bd-placeholder-img" width="100%" height="100%" src="images/Rcafe1.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>

              <div class="container">
                <div class="carousel-caption">
                  <h1 style="color: white;">El mejor cafe que podras encontrar.</h1>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img class="bd-placeholder-img" width="100%" height="100%" src="images/Rcafe7.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>

              <div class="container">
                <div class="carousel-caption text-end">
                  <h1 style="color: white;">El mejor cafe que podras encontrar.</h1>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <br><br>
        <div class="container">
            <div>
                <main>
                  <div class="px-4 py-5 my-5 text-center">
                    <img class="d-block mx-auto mb-4" src="images/Cafe250.png" alt="" width="400" height="500">
                    <h1 class="display-5 fw-bold">GRANO o MOLIDO</h1>
                    <div class="col-lg-6 mx-auto">
                      <p class="lead mb-4">Descripcion</p>
                      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        <button type="button" style="background-color: brown ;" class="btn btn-lg px-4 gap-3"><a style="text-decoration: none; color:white" href="{{ url ('/carrito') }}">Comprar</a></button>
                      </div>
                    </div>
                  </div>
                </main>
            </div>
        </div>
        <div>
          <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
              <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <img class="bi" width="30" height="24" src="images/cafe.png">
              </a>
              <span class="text-muted">&copy; 2021 Company, Inc</span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-muted" href="https://twitter.com/CLaboyos"><img class="bi" width="24" height="24" src="images/twitter.png"><use xlink:href="#twitter"/></a></li>
              <li class="ms-3"><a class="text-muted" href="https://www.instagram.com/cafelaboyos/"><img class="bi" width="24" height="24" src="images/instagram.png"><use xlink:href="#instagram"/></a></li>
              <li class="ms-3"><a class="text-muted" href="https://www.facebook.com/profile.php?id=100080727426497"><img class="bi" width="24" height="24" src="images/facebook.png"><use xlink:href="#facebook"/></a></li>
            </ul>
          </footer>
        </div>
      </div>
    </div>
  </center>
  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>