<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include "parcialidades/head.php"; ?>
    <title></title>
  </head>
  <body>
    <?php include "parcialidades/menu.php"; ?>
    <form class="" action="#" method="post">
      <h1>Nuevo Lector</h1>
      <label for="curp">CURP</label>
      <input type="text" name="curp" required value="<?php if(isset($lector['curp'])){ echo $lector['curp']; }?>">
      <br><label for="nombre">Nombre Completo</label>
      <input type="text" name="nombre" value="<?php if(isset($lector['nombre'])){ echo $lector['nombre']; }?>">
      <br><label for="apellidop">Apellido Paterno</label>
      <input type="text" name="apellidop" value="<?php if(isset($lector['apellidop'])){ echo $lector['apellidop']; }?>">
      <br><label for="apellidom">Apellido Materno</label>
      <input type="text" name="apellidom" value="<?php if(isset($lector['apellidom'])){ echo $lector['apellidom']; }?>">
      <br><label for="direccion">Dirección</label>
      <textarea name="direccion" rows="8" cols="80"><?php if(isset($lector['direccion'])){ echo $lector['direccion']; }?></textarea>
      <br><label for="telefono" name="telefono">Telefono</label>
      <input type="text" name="telefono" value="<?php if(isset($lector['telefono'])){ echo $lector['telefono']; }?>"></br>
      <br><label for="escolaridad">Selecciona escolaridad</label>
      <select name="id_escolaridad">
     <?php
     $escolaridades->data_seek(0);
     while ($fila = $escolaridades->fetch_assoc()) {
         if($fila['id_escoridad'] == $lector['id_escoridad']) {
            $sel="selected";
          } else { $sel = ""; }
          echo " <option value=" . $fila['id_escoridad'] ." ". $sel .">".$fila['nombre']. "</option>";
        }
       ?>
    </select>
    <p><input type="submit" value="Guardar lector"></br></p>
    <button type="button" name="button"></button>

    </form>
    <?php include "parcialidades/footer.php"; ?>
  </body>
  </html>
