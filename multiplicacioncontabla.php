<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar</title>
</head>
<body>
<h1>Tabla de multiplicar</h1>
    <form name="form1" method="post">
        Numero a multiplicar:
        <input type="text" name="txtnum">
        <input type="submit" value="Multiplicar">
        <br>
        <br>
<?php
$numero=$_POST["txtnum"];
//se crea la tabla
echo "<table border=1 cellspacing=0 width=200 align=center>"; 
//filas 1 tr de 2 
echo "<tr>
  <th colspan=5>Tabla del $numero  </th>
     </tr>";
    for($i=1; $i<=10; $i++):
//fila 2 tr de 2 y 5 columnas td 
    echo "<tr>
        <td align=center>$numero </td>
        <td align=center>x</td>
        <td align=center>$i</td>
        <td align=center>=</td>
        <td align=center> ". ($numero*$i) . "</td>
        </tr>";
    endfor;
?> 
</body>
</html>