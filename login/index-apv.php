<?php include './assets/css/header.php' ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <div class="container">
    <div class="mx-auto">
      <nav id="navbar-example2" class="navbar bg-body-tertiary px-2">
        <nav class="nav">
          <a class="nav-link active" aria-current="page"
            href="http://localhost/nissan-clientes/login/index-apv.php">Inicio</a>
          <a class="nav-link" href="http://localhost/nissan-clientes/php/solicitud-cliente.php">Solicitudes del
            Cliente</a>
          <a class="nav-link" href="http://localhost/nissan-clientes/php/hoja-apv.php">Generar Hoja de Prospecto APV</a>
          <a class="nav-link" href="http://localhost/nissan-clientes/php/tabla-apv.php">Ver Tabla</a>
        </nav>
        <a class="navbar-brand"></a>
        <ul class="nav nav-pills">
            <a class="carrar" href="http://localhost/nissan-clientes/login/indexAPV.php">Cerrar Sesión</a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>


</body>

</html>

<div id="carouse-Index-Piso" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../img/nissan1.jpg" class="d-block w-100" alt="1" />
    </div>
    <div class="carousel-item">
      <img src="../img/nissan2.jpg" class="d-block w-100" alt="2">
    </div>
    <div class="carousel-item">
      <img src="../img/nissan3.jpg" class="d-block w-100" alt="3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouse-Index-Piso" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouse-Index-Piso" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
</div>

</div>







<?php include './assets/css/footer.php' ?>