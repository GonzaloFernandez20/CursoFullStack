<?php

/* 1) Utilizando arrays, realizar:
            a) Almacenar en un array los 10 primeros números pares y mostrarlos en pantalla uno debajo del otro.

            b) Crear un array asociativo e introducir los siguientes valores: Nombre: Pedro Apellido: Torres Dirección: Av. Mayo 3703 Teléfono: 1122334455

            c) Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y Chicago. A continuación, mostrar el contenido del array con la siguiente estructura: "La ciudad con el índice 0 tiene el nombre Madrid". 

            d) Repite el ejercicio anterior pero ahora con un array asociativo con los índices MD para el valor Madrid, BCL para Barcelona, LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago. Mostrarlo de la siguiente manera: "El índice de Madrid es MD".
 */
# A) ---------------------------------------------------------------------------
echo "A)- <br>";
$arrayDeNumeros = array();
/*
Forma 1: 
$arrayDeNumeros = [2,4,6,8,10,12,14,16,18,20];
*/

/* 
Forma 2:
$cant_pares = 0;
for ($i = 1; $cant_pares < 10; $i++) { 
    if ($i % 2 == 0) {
        array_push($arrayDeNumeros, $i);
        $cant_pares++;
    }
} */

#Forma 3:
$cant_pares = 0;
for ($i = 2; $cant_pares < 10; $i+=2) { 
    array_push($arrayDeNumeros, $i);
    $cant_pares++;
}

/* for ($i=0; $i < count($arrayDeNumeros); $i++) { 
    echo "$arrayDeNumeros[$i] ";
    echo "<br>";
} */

foreach ($arrayDeNumeros as $valor) {
    echo "$valor";
    echo "<br>";
}

#var_dump($arrayDeNumeros);

# B) ---------------------------------------------------------------------------
echo "B)- <br>";
$arrayAsociativo = [
    "nombre" => "Pedro",
    "apellido" => "Torres",
    "direccion" => "Av. Mayo 3703",
    "telefono"  => "1122334455"
];
var_dump($arrayAsociativo);
echo "<br>";

# C) ---------------------------------------------------------------------------
echo "C)- <br>";
$arrayDeCiudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];

$indice = 0;
echo "La ciudad con el indice $indice tiene el nombre $arrayDeCiudades[$indice]";
echo "<br>";

# D) ---------------------------------------------------------------------------
echo "D)- <br>";

$arrayAsociativoDeCiudades = [
    "MD" => "Madrid",
    "BCL" => "Barcelona",
    "LD" => "Londres",
    "LA" => "Los Angeles",
    "CCG" => "Chicago"
];

$ciudadBuscada = "Madrid";
$ciudad = array_search($ciudadBuscada, $arrayAsociativoDeCiudades);
echo "El indice para $ciudadBuscada es $ciudad";


# X) ---------------------------------------------------------------------------
echo "<br>";
echo "<br>";
foreach ($arrayAsociativoDeCiudades as $clave => $valor) {
    $ciudadBuscada = $valor;
    $ciudad = array_search($ciudadBuscada, $arrayAsociativoDeCiudades);
    echo "El indice para $ciudadBuscada es $ciudad <br>";
}
?>