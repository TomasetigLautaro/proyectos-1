<?php

    function getusuarioFromDB($usuario, $contraseña){

        echo 'hola';
    
        $conn = new mysqli("localhost", "root", "44824983", "tienda de videojuegos");
        
        if ($conn->connect_error) {
          die("ERROR: No se puede conectar al servidor: " . $conn->connect_error);
        } 
      
        echo 'Conectado a la base de datos.<br>';
        $result = $conn->query("SELECT * FROM usuarios WHERE usuario="+usuario+"  AND contraseña="+contraseña+"");
      
       echo "Numero de resultados: $result->num_rows";
    
    
        
       
        $result->close();
      
        $conn->close();
      
      }





?>