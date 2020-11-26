<?php
$titulo="Editar prestamo";
  if (isset( $_POST['curp'])){
    include "controladores/prestamos.php";
    $prestamos = [
      "curp"=> $_POST['curp'],
      "fe_entrega"=> $_POST['fe_entrega'],
      "fe_prestamo"=> $_POST['fe_prestamo'],];
      $resultado = actualizarPrestamo($prestamos);
    if($resultado){
      $resultado="<h1> El lector fue actualizado con exito</h1>";
    } else {
      $resultado="<h1> Verifica los datos, no se pudo actualizar al lector</h1>
      <a href='listaPrestamos.php'> Regresar a la lista </a>";
    }
    include "vistas/resultadoEdicion.php";
  } else {
    include "controladores/prestamos.php";
    $prestamos = obtienePrestamo();
    $resultado = obtieneLector($_GET['curp']);
    //$operacion = "actualizar";
    $resultado->data_seek(0);
    $lector=$resultado->fetch_assoc();
    //echo $lector;
    include "vistas/frmPrestamo.php";
  }
  ?>
