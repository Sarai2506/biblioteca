<?php
include_once "conexionBD.php";

function nuevoPrestamo($prestamo){

  $mysqli = conexionBD();
  //INSERT
  $sql = "INSERT INTO prestamos (curp,id_bibliotecario,fe_prestamo,isbn)
   VALUES ('". $prestamo['curp'] ."','". $prestamo['id_bibliotecario'] . "'
   ,'". $prestamo['fe_prestamo'] . "','". $prestamo['isbn'] . "')";
  echo $sql;
  //GUARDAR
  $resultado = mysqli_query($mysqli, $sql);
  //return TRUE;
  return $resultado;

}

 function obtienePrestamos()
 {
   $mysqli = conexionBD();
   $sql= "SELECT lec.nombre as nombre_persona,id_prestamo,lec.apellido_paterno,p.fe_entrega_programada,l.nombre
FROM lectores lec INNER JOIN prestamos p ON(lec.curp=p.curp)
INNER JOIN libros l ON(p.isbn =l.isbn)
WHERE p.fe_entrega IS NULL";
   $resultado = mysqli_query ($mysqli , $sql);
   return $resultado;
  }

  function obtienePrestamo($id_prestamo)
  {
    $mysqli = conexionBD();
    $sql= "SELECT lec.nombre as nombre_persona,id_prestamo,lec.apellido_paterno,p.fe_entrega_programada,p.fe_prestamo,l.nombre,p.fe_pagomulta,datediff(CURDATE(),p.fe_entrega_programada) as dias_multa
 FROM lectores lec INNER JOIN prestamos p ON(lec.curp=p.curp)
 INNER JOIN libros l ON(p.isbn =l.isbn)
 WHERE p.id_prestamo =".$id_prestamo;
    $resultado = mysqli_query ($mysqli , $sql);
    return $resultado;
   }

function registrarDevolucion($id_prestamo){
  $mysqli = conexionBD ();
  $sql ="UPDATE prestamos SET fe_entrega=CURDATE() WHERE id_prestamo=".$id_prestamo;
  //echo $sql;
  $resultado = mysqli_query($mysqli,$sql);
  return $resultado;

}
function registrarMulta($id_prestamo){
  $mysqli = conexionBD ();
  $sql ="UPDATE prestamos SET fe_pagomulta=CURDATE() WHERE id_prestamo=".$id_prestamo;
  echo $sql;
  $resultado = mysqli_query($mysqli,$sql);
  return $resultado;
}

 function actualizarPrestamo($prestamos){
//UPDATE
$mysqli = conexionBD ();
$sql ="UPDATE prestamos SET fe_entrega='".$prestamos['fe_entrega']."',fe_prestamo='". $prestamos['fe_prestamo']. "' WHERE curp= '". $prestamos['curp']."'";
//echo $sql;
$resultado = mysqli_query($mysqli,$sql);
return $resultado;

}

function eliminarPrestamo($curp)
{
  //DELETE
    $mysqli = conexionBD();
    $sql = "DELETE FROM prestamos WHERE curp='".$curp."'";
    $resultado = mysqli_query($mysqli, $sql);
    echo $sql;
    return $resultado;
}
?>
