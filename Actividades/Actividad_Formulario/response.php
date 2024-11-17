<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    /*
    1) Se pide ingresar por un formulario el nombre de un alumno y su nota numérica. Mostrar la calificación resultante según la nota ingresada con el nombre del alumno:
            0-2: Muy deficiente
            3-5: Insuficiente
            6-7: Bien
            8-9: Notable
           10: Sobresaliente
    2) Al ejercicio anterior, agregarle validaciones con php, para indicar que los datos fueron ingresados incorrectamente:
           - Cuando el alumno no fue ingresado.
           - Cuando la nota no fue ingresada.
           - Cuando la nota no es un número.
           - Cuando la nota no es un número entre el 0 y el 10. Mostrar un mensaje diferente para cada situación. 
    */
    $mensaje_error;
    $datos_correctos = validar_datos($mensaje_error);

    if ( $datos_correctos ) {

        $nota_ingresada = $_POST["nota"];
        $alumno_ingresado = $_POST["alumno"];
        $calificacion;

        switch ($nota_ingresada) {
            case 0:
            case 1:
            case 2:
                $calificacion = "Muy deficiente";
                break;
            case 3:
            case 4:
            case 5:
                $calificacion = "Insuficiente";
                break;
            case 6:
            case 7:
                $calificacion = "Bien";
                break;
            case 8:
            case 9:
                $calificacion = "Notable";
                break;
            case 10:
                $calificacion = "Sobresaliente";
                break;
            default:
                $calificacion = "Invalida";
                break;
        }
        echo "La nota ingresada fue: $nota_ingresada <br> Calificacion: $calificacion ";

    }else{
        echo $mensaje_error;
    }

    function validar_datos(&$mensaje_error){

        if ( !isset($_POST["alumno"]) || empty($_POST["alumno"])) {
            $mensaje_error = "Se debe ingresar un alumno";
            return false;
        }
        if ( !isset($_POST["nota"]) ) {
            $mensaje_error = "Se debe ingresar una nota";
            return false;
        }
        if ( !is_numeric($_POST["nota"]) ) {
            $mensaje_error = "Se debe ingresar una nota numerica";
            return false;
        }
        return true;
    }
    ?>
</body>
</html>