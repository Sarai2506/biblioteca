
    <?php $titulo = "Nuevo Lector";?>
<?php
  /*include "vistas/resultadoLector.php";*/
if(isset($_POST['curp'])){
  include "controladores/lectores.php";
  $lectores = [
    "curp"=> $_POST['curp'],
    "nombre"=> $_POST['nombre'],
    "apellidop"=> $_POST['apellidop'],
    "apellidom"=> $_POST['apellidom'],
    "direccion"=> $_POST['direccion'],
    "telefono"=> $_POST['telefono'],
    "id_escolaridad"=> $_POST['id_escolaridad']  ];
    $resultado = NuevoLector($lectores);
  if($resultado){
    echo "<h1> El lector fue dado de alta</h1>";
  }
    else {
    echo "<h1> Verifica los datos, no se pudo dar de alta al lector</h1>";
  }

} else {
  include_once "controladores/Escolaridades.php";
  $escolaridades = obtineEscolaridades();
  include "vistas/frmLector.php";
}
?>
