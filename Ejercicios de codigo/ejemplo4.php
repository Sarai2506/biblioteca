<?php

//Arreglos Indices
$frutas = ["pera","manzana","platano"];
echo $frutas[0];
echo $frutas."<-Arreglo";
echo "<br>";


//Arreglos asociativos
$persona = [
  "nombre" => "Olga",
  "apellidop" => "Vargas",
  "apellidom" => "Perez",
];

echo $persona."Variable <br>";
var_dump($persona);
echo "<br>";
echo $persona["nombre"];


?>
