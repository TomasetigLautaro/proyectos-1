<?php



$estado = false;

if ($GLOBALS["existeUsuario"]) {
  session_start();
  $_SESSION["usuario"] = $usuario;

  echo "Conectado a la cuenta: " . $_SESSION["usuario"];
   
   }

$_SESSION['usuario'] = $usuario;


  










?>