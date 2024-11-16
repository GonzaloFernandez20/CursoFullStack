<?php

/* 2) Utilizando funciones, realizar:
            a) Generar una función que le ingrese por parámetro el valor del lado de un cuadrado y calcular su perímetro y su superficie (Mostrar los resultados por la pantalla).

            b) Dado una cadena de caracteres almacenada en una variable, se pide realizar un función que acepte como parámetro el string y lo muestre en mayúsculas. Realizar otra función pero ahora que lo muestra en minúsculas. Investigue el manejo de string en PHP para realizar estas operaciones.

            c) Se pide realizar una función en el se pase por parámetro el número del mes (1 al 12) y devuelva (return) si ese mes tiene 30 o 31 días. Mostrar el resultado retornado por pantalla.

            d) OPCIONAL!! DIFÍCIL!! DESAFÍO!! => Dado una cadena de caracteres almacenada en una variable, se pide realizar una función que indique si ese string es un palíndromo. Ejemplo de palíndromo: "Somos o no somos". */


# A) ---------------------------------------------------------------------------
echo "A)- <br>";

function calcular_valores_cuadrado($lado){
    echo "Ingreso un cuadrado de lado igual a $lado";
    echo "<br>";
    echo "El perimetro del cuadrado ingresado es: ". $lado*4;
    echo "<br>";
    echo "La superficie del cuadrado ingresado es: ". $lado ** 2;
}

calcular_valores_cuadrado(5);
echo "<br>";

# B) ---------------------------------------------------------------------------
echo "B)- <br>";
function conversor_mayus($palabra){
    echo strtoupper($palabra);
}

function conversor_minus($palabra){
    echo strtolower($palabra);
}

conversor_mayus("Hola");
echo "<br>";
conversor_minus("GONzalo");
echo "<br>";

# C) ---------------------------------------------------------------------------
echo "C)- <br>";



# D) ---------------------------------------------------------------------------
echo "D)- <br>";

function es_palindromo($palabra){
    $palabra = strtolower(str_replace(' ', '', $palabra));
    return $palabra === strrev($palabra);
}

$palabra = "somos o no somos";

echo es_palindromo($palabra) ? "Es un palíndromo" : "No es un palíndromo";

?>