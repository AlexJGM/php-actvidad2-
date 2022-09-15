Definir un número en una variable  y decir a qué nota le corresponde.
Entre 1 y 4,9: suspenso
Entre 5 y 5,9: suficiente
Entre 6 y 6,9: bien
Entre 7 y 8,9: muy bien
Entre 9 y 10: sobresaliente
Si no ERROR.


<?php
$num = 6.1;

if ($num < 5) {
    echo  "Suspenso";
} elseif ($num < 6) {
    echo " Suficiente";
} elseif ($num < 7)  {
    echo " Bien";
} elseif ($num < 9 ) {
    echo " Muy bien";
} elseif ($num < 10 )  {
    echo " Sobresaliente";
} else 
    echo "Error";
?>