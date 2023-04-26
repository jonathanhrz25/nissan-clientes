<?php
session_start();

require 'connect.php';

if (isset($_SESSION['user_id'])) {
  $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
  $records->bindParam(':id', $_SESSION['user_id']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);

  $user = null;

  if (count($results) > 0) {
    $user = $results;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../img/logo-Nissan-1.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/./libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./css/footer.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Login-Hostess</title>
</head>

<body>
  <nav class="navbar navbar-center" style="background-color: #0c29ae!important;" role="navigation">
    <div class="container-fluid">
      <a class="navbar-brand d-flex flex-row mx-auto" href="http://localhost/nissan-clientes/">
        <img src="../img/logo-Nissan-1.png" alt="" height="65" class="d-inline-block align-text-top">
        <h2 class="ms-5" style="color: #ffffff!important;">Sistema de registro de clientes</h2>
        <img src="../img/logo.webp" alt="" height="65" class="d-inline-block align-text-top">
      </a>
    </div>
  </nav>
</body>


<?php if (!empty($user)): ?>
  <br> Usuario:
  <?= $user['email']; ?>
  <br>Esta seguro de que quiere cerrar sesion<br>
  <a href="logoutHostess.php">Cerrar Sesion</a>

<?php else: ?>
  <h1>Por favor ingresa o regístrate</h1>

  <a href="loginHostess.php">Entrar</a> o
  <a href="signupHostess.php">Registrate</a>
<?php endif; ?>

</html>

<?php include './assets/css/footer.php' ?>