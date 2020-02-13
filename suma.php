<?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma</title>
</head>
<body>
    <h1>Suma de 2 numeros</h1>
    <form name="form1" method="post">
        Primer numero:
        <input type="text" name="num1">
        <br>
        Segundo numero:
        <input type="text" name="num2">
        <br>
        <input type="submit" value="Sumar">
        <br>
        <?php
             echo "El total de la suma es: ", $num1 + $num2;
        ?>
    </form>
</body>
</html>