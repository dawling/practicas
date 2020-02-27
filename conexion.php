<?php
$mysqli = new mysqli("localhost", "root", "root", "practica1");

/* comprobar la conexión */
if ($mysqli->connect_errno) 
{
    printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();
}
else
{
    echo "conexion realizada con exito";
}
mysqli_close($link);
?>