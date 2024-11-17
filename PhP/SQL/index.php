<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP con MySQL</title>
    </head>
    <body>
        <?php
            $conexion_sql = mysqli_connect("127.0.0.1:3306", "root", "12345", "Full_Stack");

            if ($conexion_sql) {
               echo "Se conecto a la Base de Datos <br>"; 
            }else {
                echo "No se conecto a la base de datos";
            }

            /* $query = "INSERT INTO usuarios (usuario, contrasenia) VALUES ('Gonzalo', '1234');";
            $resultado_query = mysqli_query($conexion_sql, $query);
            

            if ($resultado_query != false) {
                echo "Query exitosa";
            } */

            $query = "SELECT * FROM usuarios";
            $resultado_query = mysqli_query($conexion_sql, $query);
            
            // Mientras siga habiendo resultados, sigue iterando sobre ellos
            while ($una_fila = mysqli_fetch_assoc($resultado_query)) {
                // Devuelve un array asociativo 
                echo $una_fila["usuario"];
                echo "<br>";
                echo $una_fila["contrasenia"];
                echo "<br>";
            }

            mysqli_close($conexion_sql);
        ?>
    </body>
</html>