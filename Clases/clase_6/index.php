<?php 

//OPERACIONES LOGICAS
/*
$variable = true;
var_dump($variable);
echo $variable;
$variable = false;
echo $variable;
*/

/*
$numero1 = 10;
$numero2 = 5;

//OPERADOR MAYOR (>)
$resultado = $numero1 > $numero2; //TRUE O FALSE
var_dump($resultado);
echo "<br>";
var_dump(15 > 25);
echo "<br>";

//OPERADOR MENOR (<)
var_dump($numero1 < $numero2); 
echo "<br>";

//OPERADOR MAYOR O IGUAL (>=)
var_dump($numero1 >= $numero2);
echo "<br>";

//OPERADOR MENOR O IGUAL (<=)
var_dump(5 <= 5);
echo "<br>";

var_dump('B' > 'A');
echo "<br>";

//OPERADOR IGUALDAD NO ESTRICTA (==)
var_dump($numero1 == $numero2); //COMPARO LOS VALORES ABSOLUTOS SOLAMENTE
echo "<br>";

var_dump($numero1 = $numero2);
echo "<br>";

var_dump("5" == 5);
echo "<br>";

var_dump("5pepe" == 5);
echo "<br>";

//OPERADOR IGUALDAD ESTRICTA (===)
var_dump("5" === 5); //COMPARO LOS VALORES ABSOLUTOS Y TAMBIEN LOS TIPOS DE DATOS
echo "<br>";
*/

/*
//OPERADOR DE NEGACION (INVERSA/NOT)
$variableBooleana = false;
$numero1 = 10;
$numero2 = 5;

var_dump(!$variableBooleana);
echo "<br>";
var_dump($numero1 > $numero2); // SI EL NUMERO 1 ES MAYOR A NUMERO 2
echo "<br>";
var_dump(!($numero1 > $numero2)); // SI EL NUMERO 1 ES MENOR O IGUAL A NUMERO 2
echo "<br>";

//OPERADOR DISTINTO NO ESTRICTO (!=)
var_dump($numero1 != $numero2);
echo "<br>";
var_dump("5" != 5);
echo "<br>";

//OPERADOR DISTINTO ESTRICTO (!==)
var_dump("5" !== 5);
echo "<br>";
*/

/*

//OPERADOR AND (&&) => ampersand
var_dump(true && true);
echo "<br>";
var_dump(true && false);
echo "<br>";
var_dump(false && true);
echo "<br>";
var_dump(false && false);
echo "<br>";

$numero1 = 10;

var_dump($numero1 >= 1 && $numero1 <= 10); // TRUE && TRUE => TRUE
echo "<br>";

*/

/*
//OPERADOR OR (||) => pipeline
var_dump(true || true);
echo "<br>";
var_dump(true || false);
echo "<br>";
var_dump(false || true);
echo "<br>";
var_dump(false || false);
echo "<br>";

$numero1 = 0;

var_dump($numero1 > 0 || $numero1 < 0); // ESTO ES LO MISMO QUE $numero1 != 0
echo "<br>";
*/

/*
//ESTRUCTURA DE DECISION SIMPLE (IF)
$numero1 = 10;
$numero2 = 5;

if($numero1 > $numero2){
    echo "Esto es el camino verdadero del if";
    echo "<br>";
    echo "El numero1 es mayor a numero2";    
    echo "<br>";
}    

echo "Esto esta fuera del if";
*/

/*
//ESTRUCTURA DE DECISION DOBLE (IF ELSE)
$numero1 = 10;
$numero2 = 50;

if($numero1 > $numero2){
    echo "Esto es el camino verdadero del if";
    echo "<br>";
    echo "El numero1 es mayor a numero2";    
    echo "<br>";
}
else{
    echo "Esto es el camino falso del if";
    echo "<br>";
    echo "El numero1 es menor o igual a numero2";    
    echo "<br>";
}

echo "Esto esta fuera del if";
*/

/*
//ESTRUCTURA DE DECISION ANIDADA (ELSEIF)

$numero1 = 10;
$numero2 = 10;

if($numero1 > $numero2){
    //ESTOY EN EL CAMINO VERDADERO DEL IF
    echo "El numero1 es mayor a numero2";
    echo "<br>";
}
else{
    //ESTOY EN EL CAMINO FALSO DEL IF
    echo "El numero1 es menor o igual a numero2";
    echo "<br>";
    if($numero1 < $numero2){
        //ESTOY EN EL CAMINO VERDADERO DEL IF ANIDADO
        echo "El numero1 es menor a numero2";
        echo "<br>";
    }
    else{
        //ESTOY EN EL CAMINO FALSO DEL IF ANIDADO
        echo "El numero1 es igual a numero2";
        echo "<br>";
    }
}

if($numero1 > $numero2){
    //EL NUMERO1 ES MAYOR A NUMERO2
}
elseif($numero1 < $numero2){
    //EL NUMERO1 ES MENOR A NUMERO2
}
else{
    //EL NUMERO1 ES IGUAL A NUMERO2
}
*/

//ESTRUCTURA DE DECISION SWITCH 

/*
$numero = 4;

switch($numero){
    case 1:
        //codigo que se ejecuta cuando el $numero == 1
        echo "El valor de numero es 1";
        echo "<br>";  
        break;
    case 2: 
        echo "El valor de numero es 2";
        echo "<br>";   
        break; 
    case 5:
        echo "El valor de numero es 5";
        echo "<br>";  
        break;
    default: 
        echo "El valor de numero no es valido";
        echo "<br>";
}

echo "Esto esta fuera del switch";

if($numero == 1){
    //codigo para numero es 1
}
elseif($numero == 2){
    //codigo para numero es 2
}
elseif($numero == 5){
    //codigo para numero es 5
}
else{
    //valor por defecto
}
*/

/*
$diaSemana = 1;

switch($diaSemana){
    case "Lunes":
    case "Viernes":
        echo "Tengo clases de programacion";
        echo "<br>";
        break;
    case "Martes":
    case "Miercoles":
    case "Jueves":
    case "Sabado":
    case "Domingo":
        echo "No tengo clases de programacion";
        echo "<br>";
        break;
    case "1":
        echo "El valor es 1 - texto";
        break;
    case 1:
        echo "El valor es 1 - numero";
        break;
    default:
        echo "El dia ingresado no es valido";
        echo "<br>";
        break;        
}
*/

//ESTRUCTURA DE REPETICION WHILE (ESTRUCTURA DE REPETICION INEXACTA)

/*
$variableControl = 0;

while($variableControl < -5){
    //instrucciones a ejecutar y ademas, se va a realizar la actualizacion de la variable de control
    echo "Estoy adentro del bucle while y el valor de variableControl es: " . $variableControl;
    echo "<br>";
    //$variableControl = $variableControl + 2;
    //$variableControl += 2;
    $variableControl++; //SUMARLE UNO A LO QUE HABIA Y ASIGNAR A LA MISMA VARIABLE
}

echo "Estoy afuera del while y el valor de la variableControl es: " . $variableControl;

//EL CICLO WHILE PUEDE ITERAR COMO MAXIMO INFINITA CANTIDAD DE VECES
//EL CICLO WHILE PUEDE ITERAR COMO MINIMO 0 CANTIDAD DE VECES
*/

/*
//ESTRUCTURA DE REPETICION DO WHILE

$variableControl = 0;

do{
    //codigo a ejecutar
    echo "Estoy dentro del do while y el valor de la variableControl es: " . $variableControl;
    echo "<br>";
    $variableControl++;
} while($variableControl < 0);

echo "Estoy afuera del do while y el valor de la variableControl es: " . $variableControl;

//EL CICLO WHILE PUEDE ITERAR COMO MAXIMO INFINITA CANTIDAD DE VECES
//EL CICLO WHILE PUEDE ITERAR COMO MINIMO 1 CANTIDAD DE VECES
*/

//ESTRUCTURA DE REPETICION FOR (ESTRUCTURA DE REPETICION EXACTA)

// 1) PRECONDICION (OPCIONAL) => definir la variable control y su valor inicial (solo se ejecuta una vez, cuando ingreso por primera vez al bucle)
// 2) CONDICION LOGICA => es la que se va a evaluar y define si se sigue iterando o no. (Relacionada con la variable de control)
// 3) POSCONDICION (OPCIONAL) => definir la actualizacion de la variable control y se ejecuta siempre cuando termina un ciclo de iteracion.

/*
for($i = 0; $i < 5; $i++){
    //codigo a ejecutar
    echo "Estoy dentro del for y el valor de la i es: " . $i;
    echo "<br>";
}

echo "Estoy afuera del for y el valor de la i es: " . $i;
*/
$i = 0;

for(;$i < 4;){
    $i++;
}



?>