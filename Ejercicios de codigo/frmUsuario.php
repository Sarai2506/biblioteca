<form class="" action="#" method="post">
  <h1>Nuevo Lector</h1>
  <label for="curp">CURP</label>
  <input type="text" name="curp" required>
  <br><label for="nombre">Nombre Completo</label>
  <input type="text" name="nombre">
  <br><label for="apellidop">Apellido Paterno</label>
  <input type="text" name="apellidop">
  <br><label for="apellidom">Apellido Materno</label>
  <input type="text" name="apellidom">
  <br><label for="direccion">Direccion</label>
  <textarea name="direccion" rows="8" cols="80"></textarea>
  <br><label for="telefono">Teléfono</label>
  <input type="text" name="telefono">
  <br><label for="escolaridad">Selecciona escolaridad</label>
  <select name="id_escolaridad">
    <option value="0">Selecciona una escolaridad </option>
    <?php
      $escolaridades->data_seek(0);
      while ($fila = $escolaridades->fetch_assoc()) {
        echo " <option value=" . $fila['id_escoridad'] .">".$fila['nombre']. "</option>";
      }
     ?>
  </select>

  <br><input type="submit" value="Enviar el formulario">

</form>
