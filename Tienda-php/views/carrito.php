<?php


if (isset($_SESSION['carrito']))
{
    $array=$_SESSION['carrito'];
  
    ?>
    <main class="container">
    <div class="card mt-3 text-center fs-3">
    <div class="card-header bg-secondary text-white">Productos añadidos al carrito:</div>
       <?php
           echo implode('<br>', array_map(function ($entry) {
          return ( $entry[key($entry)]);
          }, $array));?>
    </div>
        </main>
    <?php
    
}
else{
    ?>
    <div class="card mt-3 text-center fs-3">
    <div class="card-header bg-secondary text-white">Todavía no agregó ningún producto</div>

</div>
<?php
    
}
  exit();

?>


