<?php include 'header.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <title>solicitud-cliente</title>
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
          <a class="nav-link" href="http://localhost/nissan-clientes/php/tabla-apv.php">Ver Tabla</a><br><br>
        </nav>
      </nav>
    </div>
  </div>


  <?php
  session_start();
  require("../login/connect2.php");
  ?>

  <div class="container">
    <div class="table-responsive">
      <table class="table table-bordered table-primary">
        <tr>
          <th>ID</th>
          <th>Fecha_y_hora</th>
          <th>Numero_de_Folio</th>
          <th>Nombre_del_APV</th>
          <th>Nombre_del_cliente/empresa</th>
          <th>Asunto_de_visita_de_interes</th>
          <th>Tipo_de_prospecto</th>
          <th>Telefono</th>
          <th>Correo</th>
          <th>Lugar_donde_nos_visita</th>
          <th>CP</th>
          <th>Edad</th>
          <th>Motivo_por_la_cual_considera_su_primera_opcion</th>
          <th>Otro_motivo</th>
          <th>Por_que_medio_se_entero</th>
          <th>Otro_medio</th>
          <th>Visitando_otras_marcas</th>
          <th>Si_cuales</th>
          <th>Auto_de_interes</th>
          <th>Version</th>
          <th>Color</th>
          <th>Comentarios_y_Observaciones</th>
        </tr>


        <?php
        $sql = "SELECT * from formulario";
        $result = mysqli_query($conn, $sql);

        while ($mostrar = mysqli_fetch_array($result)) {
          ?>

        <tr>
          <th><?php echo $mostrar['Id'] ?></th>
          <th><?php echo $mostrar['fecha_y_hora'] ?></th>
          <th><?php echo $mostrar['Numero_de_folio'] ?></th>
          <th><?php echo $mostrar['nombre_apv'] ?></th>
          <th><?php echo $mostrar['nombre_del_cliente_empresa'] ?></th>
          <th><?php echo $mostrar['asunto_de_visita_de_interes'] ?></th>
          <th><?php echo $mostrar['tipo_de_prospecto'] ?></th>
          <th><?php echo $mostrar['telefono'] ?></th>
          <th><?php echo $mostrar['correo'] ?></th>
          <th><?php echo $mostrar['lugar_donde_nos_visita'] ?></th>
          <th><?php echo $mostrar['cp'] ?></th>
          <th><?php echo $mostrar['edad'] ?></th>
          <th><?php echo $mostrar['motivo_considera_primera_opcion'] ?></th>
          <th><?php echo $mostrar['otro_motivo'] ?></th>
          <th><?php echo $mostrar['medio_se_entero'] ?></th>
          <th><?php echo $mostrar['otro_medio'] ?></th>
          <th><?php echo $mostrar['visitando_otras_marcas'] ?></th>
          <th><?php echo $mostrar['si_cuales'] ?></th>
          <th><?php echo $mostrar['auto_de_interes'] ?></th>
          <th><?php echo $mostrar['auto_version'] ?></th>
          <th><?php echo $mostrar['color'] ?></th>
          <th><?php echo $mostrar['comentarios_observaciones'] ?></th>
        </tr>

          <?php
        }
        ?>
      </table>
    </div>
  </div><br>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

</html>





<?php include 'footer.php' ?>