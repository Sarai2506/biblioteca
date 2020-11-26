<?php
include "conexionBD.php";

function nuevoUsuario($lector){

  $mysqli = conexionBD();
  //INSERT
  $sql = "INSERT INTO usuarios (curp,nombre,apellido_paterno,apellido_materno,direccion,id_escoridad)
                    VALUES('". $usuario['curp'] ."','". $usuario['nombre'] ."'
                    ,'" . $usuario['apellidop'] ."','" . $usuario['apellidom'] ."'
                    ,'". $usuario['direccion'] . "','" . $usuario['telefono'] . "')
                    ,'" . $usuario['id_escolaridad'] . "')";

  //echo $sql;
  //GUARDAR
  $resultado = mysqli_query($mysqli, $sql);
  //return TRUE;
  return $resultado;

}
function obtieneLectores(){
  $mysqli = conexionBD();
  $resultado = mysqli_query ($mysqli * "SELECT FROM lectores");
  return $resultado;
 }
function actualizarLector($lector){
  //UPDATE
  $mysqli = conexionBD ();
  $sql ="UPDATE lectores SET nombre='".$lector['nombre']."',apellido_paterno'". $lector['apellidop']. "' WHERE curp '". $lector['curp'].";
  //echo $sql;
  $resultado = mysqli_query($mysqli,$sql);
  return $resultado;
}

function eliminarLector($lector){
//DELETE
   $mysqli = conexionBD ();
   $resultado = mysqli_query($mysqli, "DELETE FROM lectores WHERE curp='".$curp."'");
   return $resultado;
}

function obtineLector(){
//SELECT
$mysqli = conexionBD ();
$sql = "SELECT * FROM lectores WHERE curp='".$curp."'";
$resultado = mysqli_query ($mysqli, $sql);
return $resultado;
}

?>
