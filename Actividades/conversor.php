<?php

// Conversor de grados celcius a farenheit
//1) Realizar la transformación de grados Celsius a Fahrenheit para el Valor 20°C y luego lo imprima por pantalla. 

// F = (C * 9/5) + 32

$grados_celsius = 20;
$grados_farenheit;

function conversor_farenheit( $grados_celsius ){
    return ($grados_celsius * (9/5) + 32);
}

$grados_farenheit = conversor_farenheit($grados_celsius);

echo "20 grados Celsius equivalen a $grados_farenheit grados Farenheit";

?>