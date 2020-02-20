<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Action 2</title>
</head>
<body>
<?php
if ( ! isset($_POST["nombre"]) )
{
?>
    <form action="saludar.php" method="post"> 
    Dime tu nombre: <input type="text" name="nombre" /> <br />
    <input type="submit" value="Saludar" /><br />
   </form>
<?php    
}
else
    echo "Hola " . $_POST["cuantos"];
?>
</body>
</html>