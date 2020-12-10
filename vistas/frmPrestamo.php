<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include "parcialidades/head.php"; ?>
    <title></title>
  </head>
  <body>
    <?php include "parcialidades/menu.php";
    date_default_timezone_set('america/mexico_city');
    $fecha = date("d") . "/ " . date("m") . "/" . date("Y"); ?>
    <form name="busqueda" action="#" method="post">
      <label for="buscalector">Busca Lector</label>
      <input type="text" name="buscalector" value="">
      <input type="submit" value="Busca Lector">
    </form>
    <ul>
       <?php
       if(isset($lectores)){
         $lectores->data_seek(0);
         while ($fila = $lectores->fetch_assoc()) {
           echo "<li><p>".$fila['nombre'] . " " .$fila['apellido_paterno']." ".$fila['apellido_materno'].
           " <button type='button' name='asignar' onclick='document.frmPrestamo.curp.value=\"".$fila['curp']."\";'>Seleccionar</button></p>"." </li>";

         }
       }
       ?>
   </ul>

    <form name='frmPrestamo' class="" action="#" method="post">
      <label for="curp">CURP Lector</label>
      <input type="text" name="curp" id="curpLector" required value="" readonly>
      <br><label for="fe_prestamo">Fecha de prestamo </label><?php echo " ".$fecha;?>
      <input type="hidden" name="fe_prestamo" required value="<?php echo $fecha;?>">
      <br><label for="nombre">Fecha de entrega programada</label>
      <input type="text" name="fe_entrega_programada" value="">
      <br><label for="nombre">ISBN del libro: </label>
      <input type="text" name="isbn" required value="">
      <br><label for="id_bibliotecario">El id del bibliotecario es: </label>
      <input type="search" name="id_bibliotecario" required value="">
      <p>

    </p>
    <p><input type="submit" value="Guardar préstamo"></br></p>
    </form>
    <?php include "parcialidades/footer.php"; ?>
  </body>
  </html>
