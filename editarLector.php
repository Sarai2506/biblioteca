<?php

$titulo="Editar lector";
  if (isset( $_POST['curp'])){
    include "controladores/lectores.php";
    $lectores = [
      "curp"=> $_POST['curp'],
      "nombre"=> $_POST['nombre'],
      "apellidop"=> $_POST['apellidop'],
      "apellidom"=> $_POST['apellidom'],
      "direccion"=> $_POST['direccion'],
      "telefono"=> $_POST['telefono'],
      "id_escolaridad"=> $_POST['id_escolaridad'], ];
      $resultado = actualizarLector($lectores);
    if($resultado){
      $resultado="<h1> El lector fue actualizado con exito</h1>
      <a href='listaLectores.php'> Regresar a la lista </a>";
    } else {
      $resultado="<h1> Verifica los datos, no se pudo actualizar al lector</h1>";
    }

  } else {
    include "controladores/escolaridades.php";
    include "controladores/lectores.php";
    $escolaridades = obtineEscolaridades();
    $resultado = obtieneLector($_GET['curp']);
    //$operacion = "actualizar";
    $resultado->data_seek(0);
    $lector=$resultado->fetch_assoc();
    //echo $lector;
    include "vistas/frmLector.php";
    //UN COMENTARIO
  }
  ?>
