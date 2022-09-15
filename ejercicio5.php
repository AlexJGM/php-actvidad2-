Hacer una página PHP que compruebe si el contenido de una variable es par o impar.
Para ello realiza un formulario que pida un número. 

<?php

$num = 20;

if (($num % 2) == 0) {
    
    echo "<br>" . $num . " Es par";
    
}else
    echo  "<br>" . $num . " Es impar";

?>