<?php
    include "controladores/lectores.php";
    $titulo ="Editar lector";
    $resultado=eliminarLector($_GET['curp']);
    if($resultado){
      echo "<h1> El lector fue eliminado</h1>
            <a href='listaLectores.php'> Regresar a la lista </a>";
    } else {
      echo "<h1> Verifica los datos, no se pudo eliminar al lector</h1>
            <a href='listaLectores.php'> Regresar a la lista </a>";
    }
    ?>
