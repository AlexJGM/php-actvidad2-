Diseñar un programa que determine la cantidad total a pagar por una llamada telefónica de acuerdo a las siguientes premisas:
Toda llamada que dure menos de 3 minutos tiene un coste de 10 céntimos.
Cada minuto adicional a partir de los 3 primeros es un paso de contador y cuesta 5 céntimos.


<?php
   $call = 3;
   $coste = 10;
   $importe;
   
   if ($call == 3) {
       echo "<br><br>" . "El coste es " . $coste;
   } elseif ($call > 3) {
        $importe = (10+(5($call - 3)));
            echo "La llamada cuesta " . $importe;
   }
   
  
   
   ?>