<?php

$edad = 5;
$estatura = 180;
if ($edad >= 18 OR $estatura>130) {
    echo "Eres mayor de edad";
} else {
    echo "Eres menor de edad";
}

$edad = 18;
                    //
echo ($edad >=18) ? "<br>Eres mayor de edad" : "<br>Eres menor de edad";

$i=2;
switch ($i) {
    case 0:
        echo "<br>i es igual a 0";
        break;
    case 1:
        echo "<br>i es igual a 1";
        break;
    case 2:
        echo "<br>i es igual a 2";
        break;
    default:
        echo "<br> No es ninguna";
}

?>
