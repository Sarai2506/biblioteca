<?php

function conexionBD(){
  $usuario = "root";
  $psw = "sarai2006";
  $bd = "biblioteca 2";
  $servidor = "localhost";
  $mysqli = mysqli_connect($servidor, $usuario, $psw, $bd);
  if (mysqli_connect_errno($mysqli)) {
      echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
  } else {
    return $mysqli;
  }
}

//$mysqli = conexionBD();
//$resultado = mysqli_query($mysqli, "SELECT 'Un mundo lleno de ' AS mensaje FROM DUAL");
//$fila = mysqli_fetch_assoc($resultado);
//echo $fila['mensaje'];
//mysqli_close($mysqli);

?>
