<?php

  function getusuarioFromDB($usuario,$contraseña){
 

  $conn = new mysqli("localhost", "root", "44824983", "tienda de videojuegos");
  
  if ($conn->connect_error) {
    die("ERROR: No se puede conectar al servidor: " . $conn->connect_error);
  } 


 
  $result = $conn->query("SELECT * FROM usuarios WHERE usuario='$usuario' AND contraseña='$contraseña'");



 $GLOBALS["existeUsuario"] = $result->num_rows>0;
  $result->close();
  $conn->close();
  
  
  
  $inicioSesionExitoso = false;

 
    if ($GLOBALS["existeUsuario"]) {
      $_SESSION["usuario"] = $usuario;
      $inicioSesionExitoso = true;
    }
    

  if ($inicioSesionExitoso) {
    echo "<p class='text-success text-center fw-bolder'>Conectado a la cuenta: " . $_SESSION["usuario"] . "</p>";
    header('Location: /DWM3BV-TOMASETIG-PARCIAL_1/index.php?seccion=juegos');
  } elseif (isset($usuario) && isset($contraseña)) {
    echo "<p class='text-danger text-center fw-bolder'>Error: Cuenta no encontrada. Por favor, inténtalo de nuevo.</p>";
  }
  
  


  
}
$usuario = ($_POST['usuario']) ??'';
$contraseña = ($_POST['pass']) ??'';



getusuarioFromDB($usuario,$contraseña);
?>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card m-3">
          <div class="card-header">
            <h4 class="text-center">Iniciar Sesión</h4>
          </div>
          <div class="card-body">
            <form action="index.php?seccion=inicio_sesion" method="POST">
              <div class="form-group">
                <label for="email">Usuario</label>
                <input type="text" class="form-control mt-3" placeholder="Ingrese su usuario" name="usuario">
              </div>
              <div class="form-group mt-3">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control mt-3" id="password" placeholder="Ingrese su contraseña" name="pass">
             
              </div>
              <button class="btn btn-primary btn-block mt-3" href="/DWM3BV-TOMASETIG-PARCIAL_1/index.php?seccion=juegos">Iniciar Sesión</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>