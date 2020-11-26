<?php
  $titulo="Registrar Devolución";
  include "controladores/prestamos.php";
  if (isset($_POST['Registrardevolucion']))
  {
    registrarDevolucion($_POST['id_prestamo']);
    echo "Se registro la devolución del libro";
  }
 else if (isset($_POST['registrarMulta']))
 {
   registrarMulta($_POST['id_prestamo']);
   echo "Se pago la multa";
 }
   else {
  $resultado = obtienePrestamo($_GET['id_prestamo']);
  $resultado->data_seek(0);
  $prestamo = $resultado->fetch_assoc();
  include "vistas/frmPrestamo.php";
  }
?>
