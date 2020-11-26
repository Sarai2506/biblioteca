<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/estilo.css">
    <title></title>
  </head>
  <body class="">


    <?php

      $global = "Puedes consultarme siempre";

      function ejemplo(){
        //Todo lo que se utilice aqui es local a la funcion
        $local = "<h2>contenidoLocal</h2>";
        echo "<h2>Dentro de la función: ",$GLOBALS["global"],"<br></h2>";
        echo $global,"Contenido Global <br>";
        return $local;
      }

      echo "<H1>",$local,"<-- No se ven las variable locales de funciones</h1>";
      echo "<br>";
      echo "<h1>",$global,"</h1>";

      echo "<br>",ejemplo();
      
      print "<h2> Variables predefinidas: ".$_SERVER["SERVER_NAME"]."</h2>";
     ?>


  </body>
</html>
