<?php
include_once "conexionBD.php";

function obtineEscolaridades(){
  $mysqli = conexionBD();
  $resultado = mysqli_query($mysqli, "SELECT * FROM cat_escolaridad");

  /*$resultado->data_seek(0);
  while ($fila = $resultado->fetch_assoc()) {
    echo " id = " . $fila['id_escolaridad'] .$fila['escolaridad']. "\n";
  }*/
  return $resultado;

}

?>
