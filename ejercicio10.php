Tengo un billete de avión para Denver definir la variable dataSalida (fecha y hora). 
Necesito que el programa que calcule tiempo me falta para coger dicho avión, dependiendo de la hora actual.

<?php
    $datasalida = new DateTime('2022-09-18 11:12:34');
    $dataactual = new DateTime('now');
    
    echo "La fecha de salida es " . $datasalida->format('Y-m-d H:i:s');
    echo "<br>";
    echo "La fecha actual es " . $dataactual->format('Y-m-d H:i:s');
    echo "<br>";
    var_dump($dataactual);
    
    $interval = $datasalida->diff($dataactual);
    
    echo "<h3>Para ir de vacaciones me quedan ";
    echo $interval->format('%a dias, %H horas, %i minutos');

?>