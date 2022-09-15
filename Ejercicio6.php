Hacer una página PHP que tenga dos variables y nos indique si la suma de los números es mayor 
que el producto (resultado de la multiplicación) de ellos o al contrario: Ejemplo:
Numero1=1; numero2=2 —> “ la suma es mayor que el producto”
Numero1=1; numero2=2 —>“ el producto es mayor que la suma”


<?php

$num1 = 2;
$num2 = 2;

if ($num1*$num2 > $num1+$num2) {
    echo "<br><br>" . "La multiplicacion es mayor que la suma";
}
else if ($num1*$num2 < $num1+$num2) {
    echo "<br><br>" . "La suma es mayor que la multiplicacion";
}else 
    echo "<br><br>" . "Son iguales";

?>