<?php
/* 
- Calcular e imprimir el perímetro y el área de un rectángulo con base de 18cm y altura 12cm.
- Calcular e imprimir el perímetro y el área de un círculo dado que su radio es de 30cm.
*/

function calcular_perimetro_y_area_rectangulo($base, $altura){
    $perimetro = 2*$base + 2*$altura;
        echo "El rectangulo ingresado tiene un perimetro de $perimetro cm";

    echo "<br>";
    $area = $base * $altura;
        echo "El rectangulo ingresado tiene un area de $area cm";
}

function calcular_perimetro_y_area_circulo($radio){
    $perimetro = $radio * 3.14 * 2;
        echo "El circulo ingresado tiene un perimetro de $perimetro cm";

    echo "<br>";
    $area = 3.14 * $radio ** 2;
        echo "El circulo ingresado tiene un area de $area cm";
}

calcular_perimetro_y_area_rectangulo(18, 12);
echo "<br>";
calcular_perimetro_y_area_circulo(30);

?>