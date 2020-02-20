<?php
    $nom=$_POST["txtnombre"];
    $edad=$_POST["txtedad"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>action2</title>
</head>
<body>
    <form>
        <label>Nombre:</label>
        <input type="text" name="txtnombre" value="<?php echo $nom?>">
        <br>
        <label>Edad: <?php echo $edad?></label>
    </form>
</body>
</html>