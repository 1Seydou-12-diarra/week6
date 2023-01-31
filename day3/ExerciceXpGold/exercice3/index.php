<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice3</title>
</head>
<body>
<?php

 function tempConversionF($temperature){ 

// calcul de celcius en  Fahrenheit
$temperatureF = ($temperature * 9 / 5) + 32;
return  $temperatureF;

 }
 function tempConversionK($temperatureK){ 

    // calcul de temperature de fahrenheit en  kelvin 
    $tempkelvin =($temperatureK + 275.5 );
    return  $tempkelvin;
    
     }
 $tempC = 0;

 echo $tempC." °C ".tempConversionF($tempC)." is equal to °F and  " .  tempConversionK($tempC) ." K";
?>
    
</body>
</html>