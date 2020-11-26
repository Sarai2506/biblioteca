<?php
$i = 10;
while ($i < 10) {
   $i++;
   echo $i,"<br>";  /* el valor presentado sería
                   $i antes del incremento
                   (post-incremento) */
}

$i = 11;
do {
    echo $i."<br>";
    $i++;
} while ($i <= 10);


for ($i = 1; $i <= 10; $i=$i+3) {
    echo $i,"<br>";
}


$frutas = array("pera", "manzana", "platano", "otro");
foreach ($frutas as &$valor) {
    //$valor = $valor * 2;
    echo $valor."<br>";
}

foreach ($frutas as $clave => $valor) {
    // $array[3] se actualizará con cada valor de $array...
    echo "{$clave} => {$valor} ";
    //print_r($frutas);
}


?>
