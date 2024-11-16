<?php

/*
//ARRAYS INDEXADO NUMERICAMENTE

$array1 = array(); //DEFINIENDO UNA VARIABLE PARA QUE SEA DE TIPO ARRAY
var_dump($array1);
echo "<br>";

$array2 = [];
var_dump($array2);
echo "<br>";

$array3 = [1, 2, 3];
var_dump($array3);
echo "<br>";

//LA POSICION DEL PRIMER ELEMENTO DE LOS ARRAYS EN PHP ES 0

echo $array3[2];
echo "<br>";

//WARNING
//echo $array3[10];
//echo "<br>";

echo count($array3); //ESTO ME DEVUELVE LA CANTIDAD DE ELEMENTOS
echo "<br>";

array_push($array3, 100); //AGREGO UN ELEMENTO DE LA ULTIMA POSICION
var_dump($array3);
echo "<br>";

$ultimoElemento = array_pop($array3); //ELIMINA EL ULTIMO ELEMENTO DEL ARRAY
var_dump($array3);
echo "<br>";
echo $ultimoElemento;
echo "<br>";

array_push($array3, "Juan Ignacio"); 
var_dump($array3);
echo "<br>";

//TENGO UN ARRAY DE N ELEMENTOS => CUAL ES LA POSICION DEL ULTIMO ELEMENTO?
//LA POSICION DEL ULTIMO ELEMENTO ES N - 1

echo $array3[count($array3) - 1];
echo "<br>";

for($i = 0; $i < count($array3) ;$i++){
    echo $array3[$i];
    echo "<br>";
}

//FOREACH
$i = 0;
foreach($array3 as $key => $valor){
    echo $valor;
    echo "<br>";
    $i++;
}
*/

//ARRAYS ASOCIATIVOS

/*
$arrayAsociativo = [
    "nombre" => "Juan Ignacio",
    "edad" => 33,
    "apellido" => "Spadoni"
];

var_dump($arrayAsociativo);
echo "<br>";

echo $arrayAsociativo["apellido"];
echo "<br>";

echo count($arrayAsociativo);
echo "<br>";

$arrayAsociativo["edad"] = 34;
var_dump($arrayAsociativo);
echo "<br>";

$arrayAsociativo["localidad"] = "Carapachay";
var_dump($arrayAsociativo);
echo "<br>";

//WARNING
//echo $arrayAsociativo["direccion"];
//echo "<br>";

foreach($arrayAsociativo as $clave => $valor){
    echo "El indice $clave tiene el valor: $valor";
    //echo "El indice ".$clave." tiene el valor: ".$valor;
    echo "<br>";
}
*/

/*
$array = [1, 2, 3];

foreach($array as &$valor){
    $valor *= 2; //A LO QUE TENIA EL "valor" LO MULTIPLICO POR 2 Y SE LO ASIGNO A VALOR
}

var_dump($array);
*/

//FUNCIONES

/*
//FATAL ERROR
//saludar1();
saludar();
echo "<br>";

//DEFINI LA FUNCIONALIDAD DE LA FUNCION
function saludar(){
    echo "Hola mundo!!!!";
    echo "<br>";
}

//LLAMADO O INVOCACION A LA FUNCION
saludar();
saludar();
saludar();
saludar();
*/

/*
function saludarConNombre($nombre = "", $apellido = ""){
    //if(empty($nombre) && empty($apellido)){    
    if($nombre == "" && $apellido == ""){
        echo "Chau";
        echo "<br>";
    }
    else{
        echo "Hola $nombre $apellido";
        $nombre = "Pepe";
        $apellido = "Spadoni";
        echo "<br>";
    }    
}

saludarConNombre("Juan Ignacio", "Spadoni");

saludarConNombre("Juan Ignacio");
saludarConNombre("Fabrizio");
saludarConNombre();
$nombre = "Thiago";
saludarConNombre($nombre);
echo $nombre;

//CUANDO UNA VARIABLE ESTA "VACIA" - EMPTY
$array = [];
var_dump(empty($array));
echo "<br>";
$variable = "";
var_dump(empty($variable));
echo "<br>";
$numero = 0;
var_dump(empty($numero));
echo "<br>";
$booleano = false;
var_dump(empty($booleano));
echo "<br>";

//CUANDO UN VARIABLE ESTA "DEFINIDA" - ISSET
if(isset($apellido))
    echo $apellido;

if(isset($array["localidad"]))
    echo $array["localidad"];

*/

/*
function suma($numero1, $numero2){
    $resultado = $numero1 + $numero2;
    //return $numero1 + $numero2;
    if($resultado > 10){
        return $resultado . " (ES MAYOR A 10)";
    }
    else{
        return $resultado . " (ES MENOR O IGUAL A 10)";
    }
}

echo suma(5, 10); //echo 15;
echo "<br>";
$resultado = suma(1, 2);
echo $resultado;
echo "<br>";
*/

function operacionesMatematicas($numero1,$numero2){

    //CUANDO UNA VARIABLE ES "NUMERICA" - is_numeric

    if(is_numeric($numero1) && is_numeric($numero2)){
        $suma = $numero1 + $numero2;
        $resta = $numero1 - $numero2;
    
        //$array = [$suma, $resta];
        $arrayAsociativo = [
            "suma" => $suma,
            "resta" => $resta,
            "multiplicacion" => $numero1 * $numero2
        ];
        return $arrayAsociativo;
        //return $array;
        //return [$suma, $resta];
    }
    else{
        return false;
    }    
}

$resultado = operacionesMatematicas(5, 10);

//CUANDO UN VARIABLE ES "ARRAY" - is_array

if(is_array($resultado)){
    var_dump($resultado);
    echo "<br>";
}

$variable = 1;

if(is_array($variable)){
    foreach($variable as $valor){
        echo $variable;
        echo "<br>";
    }
}

$resultado = operacionesMatematicas("pepe", 10);
var_dump($resultado);
echo "<br>";


?>