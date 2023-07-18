<?php
$conn = new mysqli("localhost", "root", "44824983", "tienda de videojuegos");

if ($conn->connect_error) {
    die("ERROR: No se puede conectar al servidor: " . $conn->connect_error);
}



if (isset($_POST['register'])) {
    $titulo = $_POST['titulo'];
    $plataforma = $_POST['plataforma'];
    $fecha_lanzamiento = $_POST['fecha_lanzamiento'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $edad = $_POST['edad'];

    
    $imagen = $_FILES['imagen'];
    $imagen_nombre = $imagen['name'];
    $imagen_tipo = $imagen['type'];
    $imagen_tmp = $imagen['tmp_name'];
    $imagen_error = $imagen['error'];
    $imagen_tamano = $imagen['size'];

    
    if ($imagen_error === UPLOAD_ERR_OK) {
        
        $ruta_imagen = 'images/' . $imagen_nombre;

       
        move_uploaded_file($imagen_tmp, $ruta_imagen);

       
        $consulta = "INSERT INTO videojuegos (titulo, plataforma, fecha_lanzamiento, precio, imagen, descripcion, edad) 
                     VALUES ('$titulo', '$plataforma', '$fecha_lanzamiento', '$precio', '$ruta_imagen', '$descripcion', '$edad')";
        $resultado = mysqli_query($conn, $consulta);

        if ($resultado) {
            echo '<h3 class="text-success">Cargaste los datos correctamente</h3>';
        } else {
            echo '<h3 class="text-danger">Error al cargar los datos</h3>';
        }
    } else {
        echo '<h3 class="text-danger">Error al cargar la imagen</h3>';
    }
}

$conn->close();
?>

<h2 class="text-center mt-3">Cargar Juegos</h2>

<main class="container">
    <div class="m-3">
        <form method="POST" action="" enctype="multipart/form-data">
            <label class="form-label mt-3 mb-0">Titulo del Videojuego</label>
            <input type="text" class="form-control mt-3" placeholder="Ingrese el titulo del videojuego" name="titulo">

            <label class="form-label mt-3 mb-0">Plataforma</label>
            <input type="text" class="form-control mt-3" placeholder="Ingrese la plataforma del videojuego" name="plataforma">

            <label class="form-label mt-3 mb-0">fecha de lanzamiento</label>
            <input type="text" class="form-control mt-3" placeholder="yy/mm/dd" name="fecha_lanzamiento">

            <label class="form-label mt-3 mb-0">Precio</label>
            <input type="text" class="form-control mt-3" placeholder="Ingrese el precio" name="precio">

            <label class="form-label mt-3 mb-0">Descripcion</label>
            <input type="text" class="form-control mt-3" placeholder="Ingrese la descripcion del videojuego" name="descripcion">

            <label class="form-label mt-3 mb-0">Edad</label>
            <input type="text" class="form-control mt-3" placeholder="Ingrese la edad minima para jugarlo" name="edad">

            <label for="formFileLg" class="form-label mt-3 mb-3">Imagen</label>
            <input class="form-control form-control-lg" id="formFileLg" type="file" name="imagen">

            <input class="btn btn-success btn-block mt-3" name="register" type="submit">
        </form>
    </div>
</main>
