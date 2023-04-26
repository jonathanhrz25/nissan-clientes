<?php include './assets/css/header.php' ?>

<?php

  require 'connect.php';
  
  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'Nuevo usuario creado correctamente';
    } else {
      $message = 'Lo sentimos, debe haber habido un problema al crear tu cuenta';
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Regístrate</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Regístrate - APV</h1>
    <span>or <a href="loginAPV.php">Iniciar sesión</a></span>

    <form action="signupAPV.php" method="POST">
      <input name="email" type="text" placeholder="Introduce tu email">
      <input name="password" type="password" placeholder="Ingrese su contraseña">
      <input name="confirm_password" type="password" placeholder="Confirmar contraseña">
      <input type="submit" value="Submit">
    </form>

  </body>
</html>

<?php include './assets/css/footer.php' ?>