<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Bootstrap Maquetado</title>
</head>

<body>
    
  <nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <a class="navbar-brand" href="#">MBanking</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link active" href="#">Balance</a>
        <a class="nav-item nav-link active" href="#">Pago de Servicios</a>
        <a class="nav-item nav-link active" href="#">Inversiones</a>

      </div>
    </div>
  </nav>

  <div class="jumbotron jumbotron-fluid p-4 m-0">
    <div class="container text-center">
      <h1 class="display-5 m-0 p-0">Bienvenido a MBanking, que querés hacer hoy?</h1>
      <p class="lead">MBaking, tu banco online, siempre acompañandote en tus finanzas.</p>
    </div>
  </div>



  <div class="container">
    <div class="row justify-content-center">
      <div class="col-3 m-2 text-center">
        <div class="card text-center">
          <img src="https://cdn0.iconfinder.com/data/icons/kameleon-free-pack-rounded/110/Money-Increase-512.png" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Balance</h5>
            <p class="card-text">Mire cómo vienen sus cuentas: Ingresos y Egresos.</p>
            <!-- <br> -->
            <a href="#" class="btn btn-primary">Ver Situación Económica</a>
          </div>
        </div>
      </div>

      <div class="col-3 m-2 text-center">
        <div class="card">
          <img src="https://cdn3.iconfinder.com/data/icons/finance-152/64/1-512.png" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Pago de Servicios</h5>
            <p class="card-text">Paga todo lo que necesites desde tu pc</p>
            <a href="#" class="btn btn-primary">Pagar Servicios</a>
          </div>
        </div>
      </div>

      <div class="col-3 m-2 text-center">
        <div class="card">
          <img src="https://cdn0.iconfinder.com/data/icons/kameleon-free-pack-rounded/110/Money-Graph-512.png" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Inversiones</h5>
            <p class="card-text">Duplica tus ahorros en el mercado financiero</p>
            <a href="#" class="btn btn-primary">Invertir en el Mercado</a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class='main'></div>
    <footer class="footer bg-dark text-white-50">
        <div class="container text-white">
            <div class="row">
                <div class="col m-3">
                    <p class="text-center font-weight-light m-2">© 2019 Copyright: Coderhouse</p>
                </div>
            </div>
        </div>
    </footer>
  
  
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>

</body>

</html>