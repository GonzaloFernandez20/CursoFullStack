<?php
/*
Crear un archivo y mediante estructuras de decisión, realizar los siguientes ejercicios:
1) Crear una variable llamada n, asignarle un valor numérico y validar si es un número mayor o igual a 10 o menor a 2. Si el número es mayor o igual a 10 o menor a 2, imprimir un mensaje diciendo "El número ingresado es mayor o igual a 10 o menor a 2". En caso contrario, mostrar un mensaje diciendo que "El número ingresado no pudo ser validado".
*/

$n = 12;

if ($n >= 10 or $n < 2) {
    echo "El número ingresado es mayor o igual a 10 o menor a 2";
} else {
    echo "El número ingresado no pudo ser validado";
}

/*
2) Mediante una estructura de repetición, realizar: 
            - Mostrar los números del 9 al 1.
            - Mostrar los números impares del 1 al 20.
            - Mostrar la suma de los números del 1 al 20.
            - Mostrar la suma de los números pares del 1 al 20.
*/

echo "<br>";


function numeros_9a1(){
    for ($i = 9; $i > 0; $i--) { 
        echo "$i ";

    }
}

function numeros_impares(){
    for ($i=0; $i < 20; $i++) { 
        if ($i % 2 != 0) {
            echo "$i ";
        }
    }
}

function suma_1a20(){
    $resultado = 0;

    for ($i=0; $i < 20; $i++) { 
        $resultado += $i;
    }

    echo "La suma de los numeros entre 1 y 20 es: $resultado";
}

function suma_1a20_impares(){
    $resultado = 0;

    for ($i=0; $i < 20; $i++) {
        if ($i % 2 == 0) {
            $resultado += $i;
        } 
    }

    echo "La suma de los numeros pares entre 1 y 20 es: $resultado";
}

echo "<br>";
echo "Numeros desde 9 a 1: ";
numeros_9a1();

echo "<br>";
echo "Numeros impares entre 1 y 20: ";
numeros_impares();

echo "<br>";
suma_1a20();

echo "<br>";
suma_1a20_impares();
?>