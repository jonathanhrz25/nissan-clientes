<?php
session_start();
require("../login/connect2.php");

// Recopilar datos del formulario - Hostess
$Numero_de_folio = $_POST['folio'];
$fecha_y_hora = $_POST['fecha'];
$asunto_de_visita_de_interes = $_POST['Asunto'];
$tipo_de_prospecto = $_POST['Tipo'];
$nombre_del_cliente_empresa = $_POST['nombreCE'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$lugar_donde_nos_visita = $_POST['lugardevisita'];
$cp = $_POST['cp'];
$edad = $_POST['edad'];
$motivo_considera_primera_opcion = $_POST['MotivoOpcion'];
$otro_motivo = $_POST['otroMotivo'];
$medio_se_entero = $_POST['medio'];
$otro_medio = $_POST['otroMedio'];
$visitando_otras_marcas = $_POST['visitandomarcas'];
$si_cuales = $_POST['culesmarcas'];
$auto_de_interes = $_POST['autointeres'];
$auto_version = $_POST['version'];
$color = $_POST['color'];
$nombre_apv = $_POST['nombreapv'];
$comentarios_observaciones = $_POST['comentarios_y_observaciones'];

/* foreach ($_POST as $campo => $valor) {
  echo "POST->" . $campo . "= " . $valor . '<br>';
}
foreach ($_GET as $campo => $valor) {
  echo "GET->" . $campo . "= " . $valor . '<br>';
}
      die(); */

// Insertar datos en la tabla 'formulario'
$sql = "INSERT INTO formulario (Numero_de_folio, fecha_y_hora, asunto_de_visita_de_interes, tipo_de_prospecto, 
    nombre_del_cliente_empresa, telefono, correo, lugar_donde_nos_visita, cp, edad, motivo_considera_primera_opcion, 
    otro_motivo, medio_se_entero, otro_medio, visitando_otras_marcas, si_cuales, auto_de_interes, auto_version, 
    color, nombre_apv, comentarios_observaciones)
    VALUES ('$Numero_de_folio', '$fecha_y_hora', '$asunto_de_visita_de_interes', '$tipo_de_prospecto', 
    '$nombre_del_cliente_empresa', '$telefono', '$correo', 
    '$lugar_donde_nos_visita', '$cp', '$edad', '$motivo_considera_primera_opcion', '$otro_motivo', '$medio_se_entero', 
    '$otro_medio', '$visitando_otras_marcas', 
    '$si_cuales', '$auto_de_interes', '$auto_version', '$color', '$nombre_apv', '$comentarios_observaciones')";
    $insertar=mysqli_query($conn, $sql);

if ($insertar == true) {
  echo "<script> alert('Sus datos han sido registrados');
            window.location ='tabla-hostess.php';</script>";
} else {
  echo "<script> alert('ERROR sus datos NO han sido registrados');
  window.location ='hoja-hostess.php';</script>";
}

// Cerrar conexión con la base de datos
?>