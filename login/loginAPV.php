<?php

session_start();

if (isset($_SESSION['user_id'])) {
  header('Location: /nissan-clientes');
}
require 'connect.php';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
  $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
  $records->bindParam(':email', $_POST['email']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);

  $message = '';

  if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
    $_SESSION['user_id'] = $results['id'];
    header("Location: ./index-apv.php");
  } else {
    $message = 'Sorry, those credentials do not match';
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
  <title>Iniciar sesión-APV</title>
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


<?php if (!empty($message)): ?>
  <p>
    <?= $message ?>
  </p>
<?php endif; ?>

<h1>Iniciar sesión - APV</h1>
<span>ó <a href="signupAPV.php">Regístrate</a></span>


<form action="loginAPV.php" method="POST">
  <input name="email" type="text" placeholder="Introduce tu email">
  <input name="password" type="password" placeholder="Ingrese su contraseña">
  <input type="submit" value="Submit">
</form>

</html>

<?php include './assets/css/footer.php' ?>