<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  <?php include "parcialidades/head.php"; ?>
    <title></title>
  </head>
  <body>
  <?php include "parcialidades/menu.php"; ?>
    <h1> Lectores </h1>
    <ul>
    <?php
      $lectores->data_seek(0);
      while ($fila = $lectores->fetch_assoc()) {
        echo "<li>".$fila['nombre'] ." " .$fila['apellido_paterno']. " " .$fila['apellido_materno']."
        <a href='editarLector.php?curp=".$fila['curp']."'> editar</a>
        <a href='eliminarLector.php?curp=".$fila['curp']."'> eliminar</a></li>";
      }
     ?>
   </ul>
    <?php include "parcialidades/footer.php"; ?>
  </body>
</html>
