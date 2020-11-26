<?php
   include "controladores/prestamos.php";
   $titulo = "Listado de prestamos";
   $prestamos = obtienePrestamos();
   include "vistas/listaPrestamos.php";
 ?>
