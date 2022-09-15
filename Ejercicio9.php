Definir dos notas en dos variables y calcular si la media es aprobada o suspendida.


<?php

$media;
$nota1 = 5;
$nota2 = 5;

$suma = $nota1 + $nota2;

$media = $suma/2;

if ($media < 5) {
    echo "Supendido";
    
} elseif ($media >= 5) {
    echo "Aprobado";
}

?>