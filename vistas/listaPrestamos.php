<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  <?php include "parcialidades/head.php"; ?>
    <title></title>
  </head>
  <body>
  <?php include "parcialidades/menu.php"; ?>
    <ul>
    <?php
      $prestamos->data_seek(0);
      while ($fila = $prestamos->fetch_assoc()) {
        echo "<li><p>".$fila['nombre_persona'] . " " .$fila['apellido_paterno']. "</p>". "<p>".$fila['fe_entrega_programada']. "</p>"."<p>" .$fila['nombre']."</p>
        <a href='Registrardevolucion.php?id_prestamo=".$fila['id_prestamo']."'> registrar devolución</a>
        </li>";
      }
     ?>
   </ul>
    <?php include "parcialidades/footer.php"; ?>
  </body>
</html>
