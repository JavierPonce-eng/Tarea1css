<?php 
    include("conexion.php");

    $con=conectar();

    $sql="SELECT * FROM usuarios";

    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>base</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
    <nav id="header" class="navbar navbar-expand-lg">
            <div class="container">
                <a href="index.html">
                    <img class="logo" src="img/logo.jpg">
                </a>
            </div>
        </nav>

            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="Apellido" placeholder="Apellido">
                                    <input type="text" class="form-control mb-3" name="Username" placeholder="Usuario">
                                    <input type="password" class="form-control mb-3" name="Password" placeholder="Contraseña">
                                    <input type="email" class="form-control mb-3" name="Correo" placeholder="Correo">
                                    <input type="date" class="form-control mb-3" name="Fecha_nacimiento" placeholder="fecha nacimiento">
                                    <input type="text" class="form-control mb-3" name="RUT" placeholder="rut con guion sin puntos">
            
                                    <input type="submit" name="btnEnviar" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Usuario</th>
                                        <th>Contraseña</th>
                                        <th>Correo</th>
                                        <th>Fecha de nacimiento</th>
                                        <th>RUT</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['ID']?></th> 
                                                <th><?php  echo $row['Nombre']?></th>
                                                <th><?php  echo $row['Apellido']?></th>
                                                <th><?php  echo $row['Username']?></th>
                                                <th><?php  echo $row['Password']?></th>
                                                <th><?php  echo $row['Correo']?></th> 
                                                <th><?php  echo $row['Fecha_nacimiento']?></th> 
                                                <th><?php  echo $row['RUT']?></th>     
                                                <th><a href="update.php?id=<?php echo $row['ID'] ?>"  name="btnUpdate"class="btn btn-info">Editar</a></th>
                                                <th><a href="eliminar.php?id=<?php echo $row['ID'] ?>"  name="btnEnviar"class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
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
                <span class="text-muted"> | Copyright © Todos los derechos reservado |
                    <script>document.write(new Date().getFullYear())</script>
                </span>
            </div>
        </footer>
    </body>
</html>