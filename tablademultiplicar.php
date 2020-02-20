<?php
    $num = $_POST["txtnum"];
    echo "<table border=0 cellspacing=0 width=200>"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar</title>
</head>
<body>
    <table>
    <h1>Tabla de multiplicar</h1>
    <form name="form1" method="post">
        Numero a multiplicar:
        <input type="text" name="txtnum">
        <input type="submit" value="Multiplicar">
        <br>
        <?php
        if(isset($_POST["txtnum"]))
        {
            for($i=1;$i<=10;$i++)
            {
                echo "$num X $i"."=".$num*$i;
                echo "<br>";
            } 
        }
        
        ?>
    </form>
    </table>
</body>
</html>