<?php 
 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de videojuegos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link href="css/styles.css" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-danger">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">Tienda de Videojuegos</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto ">
                <li class="nav-item">
                    <a class="nav-link active text-white" href="index.php?seccion=home">Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-white" href="index.php?seccion=datos">Alumno</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="index.php?seccion=juegos">Productos</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="index.php?seccion=consolas">Consolas</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="index.php?seccion=carrito">Carrito</a>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link text-white" href="index.php?seccion=contacto">Contacto</a>
                </li>
                <?php  session_start();
                       if(isset($_SESSION["usuario"])){
                        ?>   
                        
                <li class="nav-item">
                    <a class="nav-link text-white" href="index.php?seccion=ABMjuegos">ABM Juegos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white fw-bolder" href="views/logout.php">Logout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white fw-bolder text-bg-secondary"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
</svg>
        <?php echo $_SESSION["usuario"]?></a>
                </li>
              
                        <?php
                        }else{
                            ?>
                            <li class="nav-item">
                            <a class="nav-link text-white" href="index.php?seccion=inicio_sesion">Iniciar Sesion</a>
                        </li>
                            <?php
                        } 
                     ?>

               
                <li>
        
</li>
            </ul>
        </div>
    </div>
</nav>