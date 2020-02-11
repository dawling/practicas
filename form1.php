<?php
    $nom=$_POST["txtnom"];
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario1</title>
</head>
<body>
    <form name="form1" method="post">
        <label for="Nombre:"></label>
        <input type="text" id="txtnom" name="txtnom" value="<?php echo $nom?>"value="aceptar">
        <br>
        <input type="submit" id="btnaceptar" name="btnaceptar" value="aceptar" >
        <br>
        <?php
        if ($nom!="")
        echo "el nombre es: " .$nom;
        ?>
    </form>
</body>
</html>