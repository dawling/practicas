<?php
    if(isset($_POST["btncalcular"]))
    {
        $v1=$_POST["txtv1"];
        $v2=$_POST["txtv2"];
        $suma=$v1+$v2;
    }
    else
    {
        $suma=0;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma de Nestor</title>
</head>
<body>
<form name="form1" id="form1" method="post">
    <h1>Suma de 2 numeros</h1>
    <label>Primer Valor:</label>
    <input type="text" name="txtv1">
    <br>
    <label>Segundo Valor:</label>
    <input type="text" name="txtv2">
    <br>
    <input type="submit" name="btncalcular" id="btncalcular" value="Calcular">
    <br>
    <?php
        if ($suma>0)
        echo '<input type="text" name="txtres" value="'.$suma.'">';
    ?>
</form>
</body>
</html>