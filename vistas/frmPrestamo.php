<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include "parcialidades/head.php"; ?>
    <title></title>
  </head>
  <body>
    <?php include "parcialidades/menu.php";
    $fecha = date("d") . "/ " . date("m") . "/" . date("Y"); ?>
    <form name='frmPrestamo' class="" action="#" method="post">
      <label for="curp">Lector</label>
      <input type="text" name="curp" required value="">
      <br><label for="fe_prestamo">Fecha de prestamo</label><?php echo $fecha;?>
      <input type="hidden" name="fe_prestamo" required value="<?php echo $fecha;?>">
      <br><label for="nombre">Fecha de entrega programada</label>
      <input type="text" name="fe_entrega_programada" value="">
      <br><label for="nombre">ISBN del libro: </label>
      <input type="text" name="isbn" required value="">
      <br><label for="id_bibliotecario">El id del bibliotecario es: </label>
      <input type="search" name="id_bibliotecario" required value="">
      <p>
      <?php /*if($prestamo['fe_pagomulta']==''){echo 'No ha pagado';} ?>
      <?php if($prestamo['dias_multa']>0 && $prestamo['fe_pagomulta']=='') {
        echo "Tiene una multa de : ". $prestamo['dias_multa'] . "días";
        echo "<br>Total de : ". $prestamo['dias_multa'] * 5 . "pesos";
        echo "<br><input type='submit' name='registrarMulta' value='Registar pago de  Multa'>";
      } else {
        echo "<br><input type='submit' name='Registrardevolucion' value='Registar Devolución'>";
      }*/
      ?>
    </p>
    <p><input type="submit" value="Guardar préstamo"></br></p>
    <button type="button" name="button"></button>
    </form>
    <?php include "parcialidades/footer.php"; ?>
  </body>
  </html>
