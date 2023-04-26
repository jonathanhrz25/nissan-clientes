<?php include 'header.php' ?>

<?php 

session_start();
require("../login/connect2.php");

?>
<div class="container">
  <div class="mx-auto">
    <nav id="navbar-example3" class="navbar bg-body-tertiary px-2">
      <nav class="nav">
        <a class="nav-link active" aria-current="page"
          href="http://localhost/nissan-clientes/login/index-apv.php">Inicio</a>
        <a class="nav-link" href="http://localhost/nissan-clientes/php/solicitud-cliente.php">Solicitudes del
          Cliente</a>
        <a class="nav-link" href="http://localhost/nissan-clientes/php/hoja-apv.php">Generar Hoja de Prospecto APV</a>
        <a class="nav-link" href="http://localhost/nissan-clientes/php/tabla-apv.php">Ver Tabla</a>
      </nav>
    </nav>



<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    </head>
<body>
    
    <div class="table-responsive">
        <table class="table table-bordered table-primary">
                <tr>
                    <th>ID</th>
                    <th>Fecha_y_hora</th>
                    <th>Nombre_del_Vendedor</th>
                    <th>Sucursal</th>
                    <th>Desea_manejar_el_auto</th>
                    <th>Que_auto_tiene_actualmente</th>
                    <th>Auto_de_interes</th>
                    <th>Version</th>
                    <th>Interesa_dejarlo_a_cuenta</th>
                    <th>Fecha_aproximada_de_compra</th>
                    <th>Otra_fecha</th>
                    <th>Auto_Final</th>
                    <th>Version_Final</th>
                    <th>Tipo_de_operacion</th>
                    <th>comentarios_y_observaciones</th>
                </tr>   
    

		<?php 
		$sql="SELECT * from formulario2";
		$result=mysqli_query($conn,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<th><?php echo $mostrar['Id'] ?></th>
			<th><?php echo $mostrar['fecha_y_hora'] ?></th>
      <th><?php echo $mostrar['nombre_del_vendedor'] ?></th>
			<th><?php echo $mostrar['sucursal'] ?></th>
			<th><?php echo $mostrar['Manejar'] ?></th>
			<th><?php echo $mostrar['autotiene'] ?></th>
			<th><?php echo $mostrar['AutoInteres'] ?></th>
      <th><?php echo $mostrar['version_auto'] ?></th>
			<th><?php echo $mostrar['Cuenta'] ?></th>
			<th><?php echo $mostrar['fecha_aprox_compra'] ?></th>
			<th><?php echo $mostrar['otra_fecha'] ?></th>
      <th><?php echo $mostrar['auto_final'] ?></th>
			<th><?php echo $mostrar['final_version'] ?></th>
      <th><?php echo $mostrar['tipo_operacion'] ?></th>
			<th><?php echo $mostrar['comentarios_observaciones'] ?></th>
		</tr>
            <?php
            }
            ?>
        </table>
    </div>
</div><br>

<!-- Boton Descargar -->
<div class="text-center">
<a href="http://localhost/nissan-clientes/reportepdf2.php" class="btn btn-primary">Descargar en PDF</a>
  <a href="http://localhost/nissan-clientes/reporte2.php" class="btn btn-primary">Descargar en Excel</a>
</div><br><br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>
</html>

<?php include 'footer.php' ?>