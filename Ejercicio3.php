Define la constante PI y calcula el perímetro y superficie de un círculo cuyo radio es de 5cm. Guarde como ejercicio03.php

<?php

$radio = 5;

$perimetro = ($radio * 2 * pi());
$superficie = (pi() * $radio * $radio);
echo "<br>" . "El PERIMETRO ES : " . $perimetro . "<br>" . "LA SUPERFICIE ES " . $superficie;

?>