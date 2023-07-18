<?php

require_once 'libs/catalogos.php';



$plataforma = obtenerCatalogo();


$productos = filtrarPorPlataforma($plataforma);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $titulo = $_POST['titulo'];
    $fecha = $_POST['fecha'];
    $plataforma = $_POST['plataforma'];
    $precio = $_POST['precio'];
    $imagen = $_POST['imagen'];
    $descripcion = $_POST['descripcion'];
    $edad = $_POST['edad'];
  
    
    $producto = array(
      'titulo' => $titulo,
      'fecha_lanzamiento' => $fecha,
      'plataforma' => $plataforma,
      'precio' => $precio,
      'imagen' => $imagen,
      'descripcion' => $descripcion,
      'edad' => $edad
    );
  
   
    if (!isset($_SESSION['carrito'])) {
      $_SESSION['carrito'] = array();
    }
   
 
    array_push($_SESSION['carrito'], $producto);
    
   

   
    header('Location: index.php?seccion=juegos');
    exit();
}

?>




<h2 class="text-center mt-5 ">Todos los precios se encuentran en moneda USD (Dólar Estadounidense)</h2>
<div id="carrito"></div>

<div class="container">
    <h1 class="text-center my-5"><!-- <?=$productos[0]['plataforma']?> --></h1>
    <div class="row">
        <?php foreach ($productos as $producto) {?>
        <div class="col-3">
            <div class="card mb-3">
                <img src="<?= $producto['imagen'] ?>" class="card-img-top" alt="">
                <div class="card-body">
                    <p class="fs-6 m-0 fw-bold text-danger"><?= $producto['plataforma'] ?></p>
                    <h5 class="card-title"><?= $producto['titulo'] ?></h5>
                    <p class="card-text"><?= $producto['fecha_lanzamiento'] ?></p>
              
                
                </div>
               
                <div class="card-body">
                    <div class="fs-3 mb-3 fw-bold text-center text-danger"><?= $producto['precio'] ?>$</div>
                    <a href="detalle.php?titulo= <?= $producto['titulo'] ?> & fecha= <?= $producto['fecha_lanzamiento'] ?> & plataforma= <?= $producto['plataforma'] ?> & precio= <?= $producto['precio'] ?> & imagen= <?= $producto['imagen'] ?> & descripcion= <?= $producto['descripcion'] ?> & edad= <?= $producto['edad'] ?> " class="btn btn-secondary w-100 fw-bold" >Ver detalle</a>
                    <form action="index.php?seccion=juegos" method="POST">
                        <input type="hidden" name="titulo" value="<?= $producto['titulo'] ?>">
                        <input type="hidden" name="fecha" value="<?= $producto['fecha_lanzamiento'] ?>">
                        <input type="hidden" name="plataforma" value="<?= $producto['plataforma'] ?>">
                        <input type="hidden" name="precio" value="<?= $producto['precio'] ?>">
                        <input type="hidden" name="imagen" value="<?= $producto['imagen'] ?>">
                        <input type="hidden" name="descripcion" value="<?= $producto['descripcion'] ?>">
                        <input type="hidden" name="edad" value="<?= $producto['edad'] ?>">
                        <button type="submit" class="btn btn-danger w-100 fw-bold mt-2">Agregar al carrito</button>
                    </form>





                  
                </div>
            </div>
        </div>
        <?php } ?>
        
    </div>
</div>
