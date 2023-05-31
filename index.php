<?php require_once('conn.php'); // aca se requiere el archivo de conexion

    // aca verificamos que las variables post tengan algun tipo de contenido
    if (isset($_POST['userName']) AND isset($_POST['password'])) {
        // realizamos la consulta a la base de datos y pedimos que nos seleccione todo de la tabla que conetnga tanto el usuario O el password
        $sql = "SELECT * FROM USUARIOS WHERE usuario = '".$_POST['Username']."' OR password = '".$_POST['Password']."'";
        $con = mysqli_query($conx, $sql);
        $ls = mysqli_fetch_assoc($con); 

        // VALIDACIONES
        if ($_POST['userName'] == $ls['usuario'] AND $_POST['password'] == $ls['contra']) {
            //si usuario que viene del formulario es igual al usuario que traemos de la consulta son iguales Y password del formulario es igual al password de la tabla 
            // si los datos son correctos iniciamos seccion y lo dirigimos la pagina objetivo
            session_start();
            header('location:inicio.php');

        }elseif ($_POST['userName'] != $ls['usuario'] AND $_POST['password'] == $ls['contra']) {
            // si el suario del formulario NO es igual al de la tabla Y password del formulario es igual al password de la tabla 
            echo "Tiene un error en el usuario verifique la informacion";
        }elseif ($_POST['userName'] == $ls['usuario'] AND $_POST['password'] != $ls['contra']) {
            // si el suario del formulario es igual al de la tabla Y password del formulario NO es igual al password de la tabla 
            echo "El password es erroneo verifique la informacion";
        }

    }
?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lost Ark</title>
        <link rel="stylesheet" href="CSS/style.css">
        <link rel="shortcut icon" href="img/escudo_uda.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    </head>
    <body style="background-image: url(img/background.jpg); background-size: cover; background-repeat: no-repeat; background-position: center;">
        <nav id="header" class="navbar navbar-expand-lg">
            <div class="container">
                <a href="index.html">
                    <img class="logo" src="img/logo.jpg">
                </a>
            
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarS"
                    aria-controls="navbarS" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarS">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="index.html" class="nav-link" data-bs-toggle="tooltip" data-bs-placement="bottom"
                            title="Ir al inicio de la pagina">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a href="nosotros.html" class="nav-link" data-bs-toggle="tooltip" data-bs-placement="bottom"
                            title="Informacion sobre quienes somos">NOSOTROS</a>
                        </li>
                        <li class="nav-item">
                            <a href="#myModal" class="nav-link" data-bs-toggle="modal" data-bs-target="#myModal"
                            title="Inicio de sesion">LOGIN</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    <div id="myModal" class="modal">
        <div class="modal-dialog contact-modal">
            <div class="modal-content">
                <div class="modal-header">				
                    <h4 class="modal-title">INICIO DE SESION</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/examples/actions/confirmation.php">
                        <div class="form-group">
                            <label class="inputName">Nombre de Usuario</label>
                            <input type="text" placeholder="Enter Username" name="username" required> 
                        </div>
                        <div class="form-group">
                            <label class="inputPassword">Contraseña</label><br> 
                            <input type="password" placeholder="Enter Password" name="password" required>
                        </div>
                        <div>
                        <button class="btn-primary" type="submit">Login</button>
                        <br><input type="checkbox" checked="checked"> Recuerdame
                        </div>
                    <div>
                        <p>¿No tienes cuenta?<a href="register.html">Registrate</a></p>
                        
                    </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="5000">
            <img src="img/witcher_740x416.jpg" class="d-block w-100" alt="..." >
            <div class="container">
                <div class="carousel-caption">
                  <h1>Evento The Witcher</h1>
                  <p>Enlistate en una aventura con Geralt de rivia en este nuevo evento</p>
                </div>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="5000">
            <img src="img/slide2.jpg" class="d-block w-100" alt="..." >
            <div class="container">
                <div class="carousel-caption">
                  <h1>Nunca estas solo</h1>
                  <p>Junta a tus amigos y lanzate a la aventura</p>
                </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container p-3">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="custom-box p-3">
                    <h5>¿Puedo jugar con Ustedes?</h5>
                    <p>
                        Claro, ¡me encantaría jugar Lost Ark contigo! Lost Ark es un emocionante MMORPG con un vasto mundo abierto para explorar, batallas desafiantes para pelear y numerosas clases para jugar.

                        ¿Estás interesado en unirte a mí en una aventura en este emocionante juego? Podemos unirnos y explorar juntos el vasto mundo de Lost Ark, luchar contra monstruos y jefes épicos, y competir en batallas PvP para ascender en las tablas de clasificación.

                        Avísame si estás interesado y podemos programar un horario para jugar juntos. ¡Será una experiencia divertida y emocionante que no olvidaremos!
                    </p><br>

                    <div>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/og2xUZ5ZeR8?autoplay=1&mute=1&loop=1" title="youtube video player" framebroder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <p style="text-align: center;font-size: 20px; justify-content: right;">
                        Un video que resume las divertidas actividades dentro del juego
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-marketing border-3">
        <div class="row" style="margin: 20px;">
            <div class="col-lg-4 rounded-5">
                <img class="rounded-circle" src="img/1tarjeta.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2>Crea tu personaje</h2>
                <p>Elige la clase que mas te guste, persoanliza tu personaje, sube de nivel, explora, conviertete en el heroe de tu propia historia</p>
            </div>
            <div class="col-lg-4 rounded-5">
                <img class="rounded-circle" src="img/2tarjeta.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2>Coopera para cumplir tus metas</h2>
                <p>Nadie puede lograrlo solo, deberias ajuntar a un equivo de valientes y honrados camaradas que te acompaen en esta aventura</p>
            </div>
            <div class="col-lg-4 rounded-5">
                <img class="rounded-circle" src="img/3tarjeta.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2>Conquista esta nueva tierra</h2>
                <p>Explora el nuevo mundo a todo su largo y ancho, hay tantos territorios sin explorar que podrias ser el primero en conquistar un terreno</p>
            </div>
        </div>
    <footer id="pie-pagina" class="container-fluid p-3">
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