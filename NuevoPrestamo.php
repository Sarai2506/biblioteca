
    <?php $titulo = "Nuevo Préstamo";?>
<?php

if(isset($_POST['curp'])){
  include "controladores/prestamos.php";
  $prestamo = [
    "curp"=> $_POST['curp'],
    "fe_prestamo"=> $_POST['fe_prestamo'],
    "isbn"=> $_POST['isbn'],
    "id_bibliotecario"=> $_POST['id_bibliotecario'] ];
    $resultado = nuevoPrestamo($prestamo);
  if($resultado){
      echo "<h1> El préstamo se registro</h1>";
    } else {
      echo "<h1> Verifica los datos, no se registro el prestamo</h1>";
    }

} elseif (isset($_POST['buscalector'])) {
  include "controladores/lectores.php";
  $lectores = buscaLector($_POST['buscalector']);
  include "vistas/frmPrestamo.php";
}else {
  include "vistas/frmPrestamo.php";
}
?>
