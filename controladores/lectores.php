<?php
include_once "conexionBD.php";

function nuevoLector($lectores){

  $mysqli = conexionBD();
  //INSERT
  $sql = "INSERT INTO lectores (curp,nombre,apellido_paterno,apellido_materno,direccion,telefono,id_escoridad)
                    VALUES('". $lectores['curp'] ."','". $lectores['nombre'] ."'
                    ,'" . $lectores['apellidop'] ."','" . $lectores['apellidom'] ."'
                    ,'". $lectores['direccion'] . "','" . $lectores['telefono'] . "'
                    ,'". $lectores['id_escolaridad'] . "',)";
  //echo $sql;
  //GUARDAR
  $resultado = mysqli_query($mysqli, $sql);
  //return TRUE;
  return $resultado;

}

 function obtieneLectores()
 {
   $mysqli = conexionBD();
   $resultado = mysqli_query ($mysqli , "SELECT * FROM lectores");
   return $resultado;
  }

 function actualizarLector($lector){
//UPDATE
$mysqli = conexionBD ();
$sql ="UPDATE lectores SET nombre='".$lector['nombre']."',apellido_paterno='". $lector['apellidop']. "',apellido_materno='". $lector['apellidom']. "' WHERE curp= '". $lector['curp']."'";
//echo $sql;
$resultado = mysqli_query($mysqli,$sql);
return $resultado;

}

function eliminarLector($curp)
{
  //DELETE
    $mysqli = conexionBD();
    $sql = "DELETE FROM lectores WHERE curp='".$curp."'";
    $resultado = mysqli_query($mysqli, $sql);
    echo $sql;
    return $resultado;
}

function obtieneLector($curp)
{
  //SELECT
  $mysqli = conexionBD ();
  $sql = "SELECT * FROM lectores WHERE curp='".$curp."'";
  $resultado = mysqli_query ($mysqli, $sql);
  //echo $sql;
  return $resultado;
}

function buscaLector($patron)
{
  $mysqli = conexionBD ();
  $sql = "SELECT * FROM lectores WHERE UCASE(nombre) = UCASE('".$patron."') OR UCASE(apellido_paterno) = UCASE('".$patron."') OR UCASE(apellido_materno) = UCASE('".$patron."')";
  $resultado = mysqli_query ($mysqli, $sql);
  //echo $sql;
  return $resultado;
}
?>
