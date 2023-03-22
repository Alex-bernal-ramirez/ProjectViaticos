<!DOCTYPE html>
<html lang="en">

<?php
 
include('model/connection.php');


session_start();
 
if (isset($_POST['login'])) {
 
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    $sentence = $bd -> query(" SELECT * FROM users WHERE username=:username");
    header('Location:bienvenido.php');
    $sentence->bindParam("username", $username, PDO::PARAM_STR);
    $sentence->execute();
 
    $result = $sentence->fetch(PDO::FETCH_ASSOC);
 
    if (!$result) {
        echo '<p class="error">Username password combination is wrong!</p>';
    } else {
        if (password_verify($password, $result['PASSWORD'])) {
            $_SESSION['user_id'] = $result['ID'];
            echo '<p class="success">Congratulations, you are logged in!</p>';
        } else {
            echo '<p class="error">Username password combination is wrong!</p>';
            header('Location: index.php');
        }
    }
}
 
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/new-style.css">
</head>
<body>
  <div class="aplicacion-viaticos-index">
    <h5>APLICACIÓN DE VIATICOS</h5>
    <img src="img/logo-gob-sepbcs.jpg" alt="">

    <h5>INGRESAR CLAVE DE ACCESO:</h5>

        <form method="post" action="" name="signin-form">
              <div class="form-element">
                  <label>Username</label>
                  <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
              </div>
              <div class="form-element">
                  <label>Password</label>
                  <input type="password" name="password" required />
              </div>
              <button class="btn btn-primary" type="submit" name="login" value="login">ACCEDER</button>
          </form>

    <!--a href="bienvenido.php"><button type='submit'>ACCEDER</button></a-->
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>