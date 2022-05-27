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
      <div class="container" style="width: 80%;">
        <br><br>
        <div class="py-5 text-center">
            <h2>Gracias por apoyarnos y ayudarnos a crecer.</h2>
            <p class="lead"></p>
        </div>

        <div class="row g-5">
            <div class="col-md-5 col-lg-4 order-md-last">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-primary">Tu carrito</span>
                    <span class="badge bg-primary rounded-pill">3</span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Cafe 250 gr</h6>
                            <small class="text-muted">cafe molido en empaque de 250 gr</small>
                        </div>
                        <span class="text-muted">$32.500</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Cafe 500 gr</h6>
                            <small class="text-muted">cafe molido en empaque de 500 gr</small>
                        </div>
                        <span class="text-muted">$65.000</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Cafe 1000 gr</h6>
                            <small class="text-muted">cafe grano en empaque de 1000 gr</small>
                        </div>
                        <span class="text-muted">$130.000</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (COP)</span>
                        <strong>$227.500</strong>
                    </li>
                </ul>
            </div>
            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">Informacion de pago</h4>
                <form class="needs-validation" novalidate>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">Nombres</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">Apellidos</label>
                            <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="you@example.com">
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="address" class="form-label">Contraseña</label>
                            <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                            <div class="invalid-feedback">
                                Please enter your shipping address.
                            </div>
                        </div>

                        <div class="col-md-5">
                            <label for="country" class="form-label">Pais</label>
                            <select class="form-select" id="country" required>
                                <option value="">Choose...</option>
                                <option>Colombia</option>
                                <option>United States</option>
                                <option>Rusia</option>
                                <option>Canada</option>
                                <option>Mexico</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid country.
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="state" class="form-label">Departamento/Estado</label>
                            <select class="form-select" id="state" required>
                                <option value="">Choose...</option>
                                <option>Departamentos o estados segun el pais</option>
                            </select>
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="same-address">
                        <label class="form-check-label" for="same-address">Enviar informacion de la compra al correo</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="save-info">
                        <label class="form-check-label" for="save-info">Guardar tus datos para una proxima compra</label>
                    </div>

                    <hr class="my-4">

                    <h4 class="mb-3">Metodos de pago</h4>

                    <div class="my-3">
                        <div class="form-check">
                            <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                            <label class="form-check-label" for="credit">Tarjeta credito</label>
                        </div>
                        <div class="form-check">
                            <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                            <label class="form-check-label" for="debit">Tarjeta debito</label>
                        </div>
                        <div class="form-check">
                            <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                            <label class="form-check-label" for="paypal">PayPal</label>
                        </div>
                    </div>

                    <div class="row gy-3">
                        <div class="col-md-6">
                            <label for="cc-name" class="form-label">Nombre de la tarjeta</label>
                            <input type="text" class="form-control" id="cc-name" placeholder="" required>
                            <div class="invalid-feedback">
                                Name on card is required
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="cc-number" class="form-label">Numero de la tarjeta</label>
                            <input type="text" class="form-control" id="cc-number" placeholder="" required>
                            <div class="invalid-feedback">
                                Credit card number is required
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="cc-expiration" class="form-label">Fecha expiracion</label>
                            <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                            <div class="invalid-feedback">
                                Expiration date required
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="cc-cvv" class="form-label">CVV</label>
                            <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                            <div class="invalid-feedback">
                                Security code required
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">

                    <button class="w-100 btn btn-primary btn-lg" type="submit">Continua con la compra</button>
                </form>
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