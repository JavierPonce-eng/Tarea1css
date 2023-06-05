<?php
    session_start();
    include_once "conexion.php";
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Nosotros</title>
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
                        <ul class="nav nav-underline ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="index.php" id="texto_nav">INICIO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Nosotros.php" id="texto_nav">NOSOTROS</a>
                            </li>
                                <?php if (isset($_SESSION['usuario'])){?>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" id="texto_nav"><?php $nombre = $_SESSION['usuario']->nombre;  echo "$nombre"; ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="logout.php" id="texto_nav">LOGOUT</a>
                                    </li>
                                <?php }else{?>
                            <li>
                                <a class="nav-link" data-bs-toggle="modal" data-bs-target="#myModal" id="texto_nav">
                                    LOGIN
                                </a>
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
                                    <button type="submit" name="login">Login</button>
                                    <br><input type="checkbox" checked="checked"> Recuerdame
                                </div>
                                <div>
                                    <p>¿No tienes cuenta?<a href="register.php">Registrate</a></p>
                                    <a href="reset.php" id="exampleModalLabel" style="color: black;">Olvide mi contraseña</a>
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
                    <h5>¿Que motivos tiene esta pagina? ¿Poque se hizo?</h5>
                    <p>
                        Crear una página web para Lost Ark puede ser beneficioso por varias razones. En primer lugar, puede servir como un eje central para que los fanáticos del juego se conecten y se relacionen entre sí. Al proporcionar una plataforma para que los jugadores compartan sus experiencias, consejos y estrategias, una página web de Lost Ark puede fomentar un sentido de comunidad entre los fanáticos del juego.

                    En segundo lugar, una página web de Lost Ark puede proporcionar recursos valiosos para los jugadores que buscan mejorar sus habilidades y conocimientos del juego. La página web puede incluir guías, tutoriales y tutoriales para misiones, mazmorras e incursiones, así como información sobre clases de personajes, habilidades y equipo. Esto puede ayudar a los jugadores a progresar en el juego de manera más eficiente y efectiva.
                
                    Una página web también puede servir como herramienta de marketing para el juego. Al proporcionar información sobre las características, los gráficos y la jugabilidad del juego, una página web de Lost Ark puede atraer a nuevos jugadores y generar interés en el juego. La página también puede incluir reseñas, calificaciones y testimonios de jugadores actuales, lo que puede animar aún más a los nuevos jugadores a probar el juego.
                
                    En conclusión, crear una página web para Lost Ark puede ser beneficioso para los fanáticos del juego, así como para sus desarrolladores y creadores. La página puede servir como centro central para que los jugadores se conecten y se comprometan entre sí, brindar recursos valiosos para mejorar el juego, servir como herramienta de marketing para el juego, brindar una plataforma para que los desarrolladores se comuniquen con su audiencia y brindar oportunidades de monetización.
                    </p>
                    <br>
                </div>
            </div>
        </div>
    </div>

    <div class="container p-3">
        <!-- <div class="row" style="height: 150px;">
            <div class="col-6 mx-auto px-0 shadow-lg py-2 color_ese ">
                <div id="carouselExampleControls" class="carousel px-2 slide px-0 shadow-lg" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active ">
                        <img src="img/1tarjeta.jpg" class="d-block w-100 nos_carro_img " alt="...">
                      </div>
                      <div class="carousel-item ">
                        <img src="img/2tarjeta.jpg" class="d-block w-100 nos_carro_img " alt="...">
                      </div>
                      <div class="carousel-item ">
                        <img src="img/3tarjeta.jpg" class="d-block w-100  nos_carro_img " alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
        </div> -->

        <div class="container" style="padding: 20px;">
            <div class="row nos_bor rounded-5">
                <div class="col-3 border nos rounded-5 border-secondary color_ese">
                    <div class="h-100  rounded-4 shadow ">
                        <img class="nos_img rounded-5" src="img/arcana.png" alt="">
                    </div>
                </div>
                <div class="col-3 align-items-center text-center h-75 rounded-5 align-self-center color_ese text-light mx-auto w-50">
                    <h2 class="my-3" >Gianni "Giarock" Arcana</h2>
                    <p class="my-4">Colaborador principal dentro de la guild, poseedor de 5 alters y uno de los mas veteranos guerreros del ARK, esta persona es responsable de la inteligencia dentro del gremio con un total de casi 1200 horas jugadas solo en dungeons.</p>
                </div>
            </div>
            <div class="row nos_bor my-5 rounded-5" >
                <div class="col-3 align-items-center text-center h-75 rounded-5 align-self-center color_ese text-light mx-auto w-50">
                    <h2 class="my-3" >Francisco "SummonPerkin" Summoner</h2>
                    <p class="my-4">El nuevo novato del grupo, a pesar de no tener una tan basta experiencia es del tipo de los que sobresalen por su esfuerzo al momento de querer entender como funciona el mundo, ha intentado varias veces cambiarse el nombre pero por ahora no ha tenido suerte.</p>
                </div>
                <div class="col-3 border color_ese rounded-5 border-secondary ms-auto ">
                    <div class="h-100  ">
                        <img class="nos_img rounded-5 " src="img/summoner.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row nos_bor rounded-5">
                <div class="col-3 border nos rounded-5 border-secondary color_ese">
                    <div class="h-100  rounded-4 shadow ">
                        <img class="nos_img rounded-5" src="img/glaivier.png" alt="">
                    </div>
                </div>
                <div class="col-3 align-items-center text-center h-75 rounded-5 align-self-center color_ese text-light mx-auto w-50">
                    <h2 class="my-3" >Javier "GMPoledancer" Glaivier</h2>
                    <p class="my-4">Especimen adicto al juego, no por el aspecto de coleccion o por sus interesantes mecanicas de juego cooperativo este usuario es uno de los top 30 jugadores dentro del servidor sudamericano en los rankings de PvP asi ganandose el titulo de Grandmaster en la primera temporada de competitivo.</p>
                </div>
            </div>
        </div>
    </div>

    <br>

    <footer id="pie-pagina" class="container-fluid p-3">
      <div class="row">
          <div class="col-4">
              <!-- contenido para la columna de la izquierda -->
  
          </div>
          <div class="col-4">
              <!-- contenido para la columna del medio -->
              <span class="text-muted">UDA | Copyright © Todos los derechos reservado |
                  <script>document.write(new Date().getFullYear())</script>
              </span>
          </div>
      </div>
  </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        src="https://code.jquery.com/jquery-3.5.1.min.js"
    </script>
  </body>
</html>