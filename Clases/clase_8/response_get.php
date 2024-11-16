<?php 

$usuarioAcreditado = "juan";
$passwordAcreditado = "1234"; //"asfa/sfas1241"; HASHEO

echo "Hola mundo => get!";
echo "<br>";

$usuario = $_GET["usuario"];
$usuario = strtolower($usuario);
echo $usuario;
echo "<br>";
$password = $_GET["password"];
echo $password;
echo "<br>";

if($usuario == $usuarioAcreditado && $password == $passwordAcreditado){
    echo "Credenciales correctas";
}
else{
    echo "Error al acreditar!";
}

?>