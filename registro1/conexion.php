<?php
$mysqli = new mysqli("localhost", "root", "root1234", "practica1");

/* comprobar la conexión 
1.-Conectarse al servidor y a la base de datos
2.-generar consultas basicas
(insert,delete, update, ---mysqli_query();
select) mysqli_query, mysqli_ num_rows() , fetch_assoc
3.- mysqli_close
*/
if ($mysqli->connect_errno) 
{
    printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();
}
mysqli_close($link);
?>