Concatena dos cadenas previamente almacenadas en dos variables distintas e imprimir su resultado. Guarde como ejercicio02.php

<?php

   $cadena1 = "<br>" . "La casa de Juan";
   $cadena2 = "es verde";

   $cadenacompleta = $cadena1 . "  " . $cadena2;
   echo $cadenacompleta;
?>