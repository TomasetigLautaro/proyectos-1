<?php

function getFromDB(){

    $productos=array();

    $conn = new mysqli("localhost", "root", "44824983", "tienda de videojuegos");
    
    if ($conn->connect_error) {
      die("ERROR: No se puede conectar al servidor: " . $conn->connect_error);
    } 
  
   
    $result = $conn->query("SELECT * FROM videojuegos");
  


    while($row = mysqli_fetch_array($result)) {  
        $productos[] = array(
            'titulo' => $row['titulo'],
             'plataforma'=> $row['plataforma'],
             'fecha_lanzamiento'=> $row['fecha_lanzamiento'],
             'precio'=> $row['precio'],
             'imagen'=> $row['imagen'],
             'descripcion'=> $row['descripcion'],
             'edad'=> $row['edad'],
        
           
            );
    }
   
    $result->close();
  
    $conn->close();
  
     return  json_encode($productos);
  }


  function getconsolasFromDB(){

    $productos=array();

    $conn = new mysqli("localhost", "root", "44824983", "tienda de videojuegos");
    
    if ($conn->connect_error) {
      die("ERROR: No se puede conectar al servidor: " . $conn->connect_error);
    } 
  
    echo 'Conectado a la base de datos.<br>';
    $result = $conn->query("SELECT * FROM consolas");
  
   echo "Numero de resultados: $result->num_rows";

    while($row = mysqli_fetch_array($result)) {  
        $productos[] = array(
            'nombre' => $row['nombre'],
             'empresa'=> $row['empresa'],
             'precio'=> $row['precio'],
             'imagen'=> $row['imagen'],
           
            );
    }
   
    $result->close();
  
    $conn->close();
  
 
     return  json_encode($productos);
  }




function obtenerCatalogo() {
    
    $content = getFromDB();
    $data = json_decode($content, true);
   
   
    return $data;
    
}

function filtrarPorPlataforma($productos) {
    $productos_filtrados = [];
    foreach ($productos as $producto) {
        
            $productos_filtrados[] = $producto;
        
    }
    return $productos_filtrados;
}


function obtenerConsolas() {
    $content = getconsolasFromDB();
    $data = json_decode($content, true);
    return $data;
}


function filtrarPorConsola($consolas) {
    $consolas_filtrados = [];
    foreach ($consolas as $consola) {
        
            $consolas_filtrados[] = $consola;
        
    }
    return $consolas_filtrados;
}


?>


