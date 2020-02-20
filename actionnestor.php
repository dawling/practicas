<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>action</title>
</head>
<body>
    <form action="actionnestor2.php" method="post">
        <label>Nombre:</label>
        <input type="text" name="txtnombre">
        <br>
        <label>Edad:</label>
        <input type="number" name="txtedad" min="18" maxlength="45" value="18">
        <br>
        <input type="submit" name="btnenviar" value="Enviar">
    </form>
</body>
</html>