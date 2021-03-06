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
            <img class="bd-placeholder-img" width="100%" height="100%" src="images/Rcafe7.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>

            <div class="container">
              <div class="carousel-caption">
                <h1 style="color: white;">El mejor cafe que podras encontrar.</h1>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="bd-placeholder-img" width="100%" height="100%" src="images/Rcafe3.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>

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
    <div class="container">
      <div class="container my-5">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
            <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                <h1 class="display-4 fw-bold lh-1">El origen de un sue??o</h1><br><br>
                <p class="lead">Este sue??o surge del coraz??n de los campesinos oriundos de Pitalito municipio del sur del Huila, con tes??n y ah??nco, formalizan una actividad de la cual se han dedicado toda la vida, hace diez a??os deciden dar forma como una organizaci??n an??nima simplificada, porque para ellos el caf?? no es solo un grano, con un aroma ??nico, que se convierte en bebida, es una manera de vivir, de conservar ra??ces y hacer historia.</p>
            </div>
            <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
                <img class="rounded-lg-3" src="images/Rcafe5.png" alt="" width="600">
            </div>
        </div>
      </div>
      <div class="container my-5">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
            <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                <h1 class="display-4 fw-bold lh-1">Tipo de caf??</h1><br><br>
                <p class="lead"><strong>Bourbon - Caturro - Premium tipo exportaci??n.</strong><br><br>El cafe Bourbon tiene el potencial de producir un caf?? de buena calidad a gran altitud. Es una mutaci??n natural de la planta Ar??bica, la cual ha crecido de forma silvestre en Etiop??a durante muchos siglos.</p>
            </div>
            <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
                <img class="rounded-lg-3" src="images/Rcafe2.png" alt="" width="600">
            </div>
        </div>
      </div>
      <div class="separador">
        <div class="separador-item px-4 py-5 my-5 text-center" style="border-right: 1px solid black; border-bottom: 1px solid black;">
            <h1 class="display-5 fw-bold">Misi??n</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Brindar calidad de vida, gracias al suministro salubre y accesible, de caf?? de calidad, que recuerden nuestras ra??ces y patrimonio cultural.</p>
            </div>
        </div>
        <div class="separador-item px-4 py-5 my-5 text-center" style="border-bottom: 1px solid black;">
            <h1 class="display-5 fw-bold">Visi??n</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Para el a??o 2030 ser la empresa con los mejores est??ndares de calidad en productos de caf?? y n??mero uno en el mercado local con enfoque de expansi??n a nivel nacional.</p>
            </div>
        </div>
        <div class="px-4 py-5 my-5 text-center">
            <h1 class="display-5 fw-bold">Valores Corporativos</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4"><ul>
                    <li><strong>Trabajo en equipo: </strong>Apoy??ndonos podemos aprender unos de otros y trasladar este conocimiento al trabajo, para beneficio de los clientes y la empresa.</li>
                    <li><strong>Calidad: </strong>Nuestra empresa se diferencia de otras comercializadoras de caf?? en una manera sensible por su calidad; eso nos hace especiales.</li>
                    <li><strong>Lealtad: </strong>La lealtad se da hacia el cliente, hacia el trabajo, hacia la empresa y hacia la familia. Hablamos con la verdad y damos siempre lo mejor.</li>
                    <li><strong>Disciplina: </strong>El orden y la disciplina permiten llevar proyectos m??s ordenados, lo cual nos facilitar?? el trabajo y mejorar?? los resultados.</li>
                </ul></p>
            </div>
        </div>
        <center>
          <div class="container">
            <div class="acontainer">
              <div class="lightbox-gallery">
                  <div><img src="images/Rcafe6.jpg" data-image-hd="images/Rcafe6.jpg" alt=""></div>
                  <div><img src="images/Rcafe10.jpg" data-image-hd="images/Rcafe10.jpg" alt=""></div>
                  <div><img src="images/Rcafe8.png" data-image-hd="images/Rcafe8.png" alt=""></div>
              </div>
            </div>
          </div>
        </center>
      </div>
      <br>
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
  <script src="style.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>