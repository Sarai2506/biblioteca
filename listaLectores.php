<?php
   include "controladores/lectores.php";
   $titulo = "Listado de lectores";
   $lectores = obtieneLectores();
   include "vistas/listaLectores.php";
 ?>
