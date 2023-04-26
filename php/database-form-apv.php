<?php
session_start();
require("../login/connect2.php");

// Recopilar datos del formulario - APV
$fecha_y_hora = $_POST['fecha'];
$nombre_del_vendedor = $_POST['nombre_vendedor'];
$sucursal = $_POST['sucursal'];
$Manejar = $_POST['ManejarAuto'];
$autotiene = $_POST['AutoTiene'];
$AutoInteres = $_POST['Auto_Interes'];
$version_auto = $_POST['version'];
$Cuenta = $_POST['Dejarlo_Cuenta'];
$fecha_aprox_compra = $_POST['fechaAprox'];
$otra_fecha = $_POST['otraFecha'];
$auto_final = $_POST['autoFinal'];
$final_version = $_POST['finalVersion'];
$tipo_operacion = $_POST['tipoOperacion'];
$comentarios_observaciones = $_POST['comentarios_y_observaciones'];

/* foreach ($_POST as $campo => $valor) {
  echo "POST->" . $campo . "= " . $valor . '<br>';
}
foreach ($_GET as $campo => $valor) {
  echo "GET->" . $campo . "= " . $valor . '<br>';
}
      die(); */

// Insertar datos en la tabla 'formulario2'
$sql = "INSERT INTO formulario2 (fecha_y_hora, nombre_del_vendedor, sucursal, Manejar, 
    autotiene, AutoInteres, version_auto, Cuenta, fecha_aprox_compra, otra_fecha, auto_final, 
    final_version, tipo_operacion, comentarios_observaciones)
    VALUES ('$fecha_y_hora', '$nombre_del_vendedor', '$sucursal', '$Manejar', 
    '$autotiene', '$AutoInteres', '$version_auto', '$Cuenta', '$fecha_aprox_compra', '$otra_fecha', 
    '$auto_final', '$final_version', '$tipo_operacion', '$comentarios_observaciones')";
    $insertar=mysqli_query($conn, $sql);

if ($insertar == true) {
  echo "<script> alert('Sus datos han sido registrados');
            window.location ='tabla-apv.php';</script>";
} else {
  echo "<script> alert('ERROR sus datos NO han sido registrados');
  window.location ='hoja-apv.php';</script>";
}

// Cerrar conexión con la base de datos
?>