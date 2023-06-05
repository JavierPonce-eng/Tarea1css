<?php
session_start();
include_once "conexion.php";


function retrievePassword($correo) {

  $conexion = mysqli_connect("localhost", "root", "", "proyecto");
  $correo = mysqli_real_escape_string($conexion, $correo);
  $sql = "SELECT contraseña FROM usuarios WHERE correo = '$correo'";
  $result = mysqli_query($conexion, $sql);

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    return $row['contraseña'];
  } else {
    return null;
  }
}

if (isset($_POST['submity'])) {
  $correo = $_POST['correo'];


  if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    $error = "correo invalido";
  } else {
   
    $retrievedPassword = retrievePassword($correo);
    if ($retrievedPassword) {

    } else {
      $error = "Correo no encontrado";
    }
  }
}
?>

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lost Ark</title>
        <link rel="stylesheet" href="CSS/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body style="background-image: url(img/background.jpg); background-size: cover; background-repeat: no-repeat; background-position: center;">
        <nav id="header" class="navbar navbar-expand-lg">
            <div class="container">
                <a href="index.php">
                    <img class="logo" src="img/logo.jpg">
                </a>
            
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarS"
                    aria-controls="navbarS" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarS">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link" data-bs-toggle="tooltip" data-bs-placement="bottom"
                            title="Ir al inicio de la pagina">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a href="nosotros.php" class="nav-link" data-bs-toggle="tooltip" data-bs-placement="bottom"
                            title="Informacion sobre quienes somos">NOSOTROS</a>
                        </li>
                            <?php if (isset($_SESSION['usuario'])){?>
                                <li class="nav-item">
                                    <a class="nav-link disabled" id="texto_nav"><?php $nombre = $_SESSION['usuario']->nombre;  echo "$nombre"; ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="logout.php" id="texto_nav">Logout</a>
                                </li>
                            <?php }else{?>
                                <li class="nav-item">
                                <a href="#myModal" class="nav-link" data-bs-toggle="modal" data-bs-target="#myModal" title="Inicio de sesion">LOGIN</a>
                                </li>
                            <?php }?>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: black;">Logearse</h1>
                            
                        </div>
                        <form action = "login.php" method = "POST">
                            <div class="modal-body container-form-modal">
                                <div class="mb-3">
                                    <label class="form-label">Nombre de Usuario</label>
                                    <input type="text" placeholder="Enter Username" name="username" required> 
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Contraseña</label><br> 
                                    <input type="password" placeholder="Enter Password" name="contraseña" required>
                                </div>
                                <div>
                                    <button id="sum" type="submit" name="login">Login</button>
                                    <br><input type="checkbox" checked="checked"> Recuerdame
                                </div>
                                <div>
                                    <p>¿No tienes cuenta?<a href="register.php">Registrate</a></p>
                                    <a href="recovery.php" id="exampleModalLabel" style="color: black;">Olvide mi contraseña</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="container p-3">
                <div class="row justify-content-center">
                    <div class="col-8">
                        <div class="custom-box p-3">
                        <form action="" method="POST">
                            <label for="email">correo:</label>
                            <input type="email" id="correo" name="correo" required>
                            <button type="submit" name="submity">recuperar contraseña</button>
                            <?php if (isset($error)) { ?>
                                <p><?php echo $error; ?></p>
                            <?php } ?>
                        </form>
                    </div>
                </div>
        </div>
    </div>

<div id="passwordModal" class="modal" style="display: none;">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2>Tu contraseña es:</h2>
    <p id="modalPassword"></p>
    <button id="changePasswordBtn">Change Password</button>
  </div>
</div>


<script>
  document.getElementsByClassName("close")[0].onclick = function() {
    document.getElementById('passwordModal').style.display = 'none';
  };

  function changePassword() {
    window.location.href = "reset.php";
  }
  var modal = document.getElementById("passwordModal");
            var closeBtn = document.getElementsByClassName("close")[0];
            var changePasswordBtn = document.getElementById("changePasswordBtn");

            closeBtn.onclick = function() {
                modal.style.display = "none";
            }

            changePasswordBtn.onclick = function() {
                // Code to handle password change functionality
                // Redirect or show another form, etc.
            }

 
    window.onload = function() {
        document.getElementById('modalPassword').innerHTML = '$retrievedPassword';
        document.getElementById('passwordModal').style.display = 'block';
    }
     

</script>



        <footer id="pie-pagina" class="container-fluid p-3 ">
            <div class="row">
                <div class="col-4">
                    <!-- contenido para la columna de la izquierda -->
        
                </div>
                <div class="col-4">
                    <!-- contenido para la columna del medio -->
                    <span class="text-muted"> | Copyright © Todos los derechos reservado |
                        <script>document.write(new Date().getFullYear())</script>
                    </span>
                </div>
        </footer>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            src="https://code.jquery.com/jquery-3.5.1.min.js"
        </script>
    </body>
</html