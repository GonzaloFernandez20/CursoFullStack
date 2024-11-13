<?php 

/*
echo "Hola Mundo!";
echo "<br>";
echo "<strong>Este texto esta en negrita</strong>";
echo "<br>";
*/

// COMENTARIO UNILINEA
/* 
    COMENTARIO 
    MULTILINEA
*/

/*
echo $Variable; // WARNING
echo 50/0; // FATAL ERROR
*/

/*
$variable = 3; // OPERADOR ASIGNACION
echo $variable;
echo "<br>";
$variable = 15;
echo $variable;
echo "<br>";
var_dump($variable);
echo "<br>";
$variable = "Hola Mundo!";
var_dump($variable);
echo "<br>";

//OPERACIONES ALGEBRAICAS

$numero1 = 10;
$numero2 = 5;

//SUMA
echo 5 + 5;
echo "<br>";
echo $numero1 + $numero2;
echo "<br>";
echo $numero1;
echo "<br>";
$resultadoSuma = $numero1 + $numero2;
echo $resultadoSuma;
echo "<br>";

//RESTA
echo $numero1 - $numero2;
echo "<br>";

//MULTIPLICACION
echo $numero1 * $numero2;
echo "<br>";

//DIVISION 
echo $numero1 / $numero2;
echo "<br>";

//RESTO
echo $numero1 % $numero2;
echo "<br>";

echo $numero1 % 2; //SI ES 0 ES PAR
echo "<br>";

echo $numero2 % 2; //SI ES 1 ES IMPAR
echo "<br>";
*/

/*
//echo 3 + "Hola"; //ESTO TIRA ERROR
var_dump("5");
echo 3 + "5"; //ESTO DA 8
echo 3 + "5hola"; // ESTO TIRA UN WARNING
*/

//OPERADOR DE CONCATENACION (.)

$texto1 = "Hola";
$texto2 = "Mundo";

echo $texto1 . $texto2;
echo "<br>";
echo $texto1 . " " . $texto2 . "!!";
echo "<br>";
echo $texto1 . 5;




?>