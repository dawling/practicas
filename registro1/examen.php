<?php
 include("conex.php");

if (isset($_POST["btnguardar"]))
 {
 	$iddepto = $_POST["txtidtarea"];
    $descrip = $_POST["txtdescripcion"];
    $asignatura = $_POST["txtasignatura"];
 	$existe = $_POST["txtexiste"];
 	$idconex = Conectarse();
 	if ($existe=="no")
 	{
 		mysqli_query($idconex,"insert into tareas value('$idtarea','$descrip','$asignatura')") or die (mysqli_error($idconex));
 		echo "Datos Guardados con Exito";
 	}
 	else
 	{
 		mysqli_query($idconex,"update tareas set descrip='$descrip',asignatura='$asignatura' where idtarea='$idtarea'") or die (mysqli_error($idconex));
 		echo "Datos Actualizados con Exito";
 	}
 	mysqli_close($idconex);
 	
 }
 if (isset($_POST["btnborrar"]))
 {
 	$idtarea = $_POST["txtidtarea"];
 	$idconex = Conectarse();
 	mysqli_query($idconex,"delete from tareas where idtarea='$idtarea'") or die (mysqli_error($idconex));
 	mysqli_close($idconex);
 	echo "Datos Eliminados con Exito";
 }
if (isset($_POST["btnbuscar"]))
 {
 	$idtarea = $_POST["txtidtarea"];
 	$idconex = Conectarse();
 	$reg=mysqli_query($idconex,"select * from tareas where idtarea='$idtarea'") or die (mysqli_error($idconex));
 	if (mysqli_num_rows($reg)>0)
 	{
        $datos = mysqli_fetch_assoc($reg);
        $descrip = $datos["descrip"];
        $asignatura=$datos["asignatura"]; 
 		$existe="si";
 	}
 	else
 		$existe = "no";
 	mysqli_close($idconex);
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen</title>
    <script type="text/javascript">
		function limpiar()
		{
			document.form1.txtexiste.value = "no";
			document.form1.txtidtarea.value = "";
            document.form1.txtdescrip.value = "";
			document.form1.txtasignatura.value = "";
			document.form1.txtexiste.focus();
		}
	</script>
</head>
<body>
    <form method="post" name="frmexamen" id="frmexamen">
        <input type="hidden" name="txtexiste" value="<?php echo $existe ?>">
        <label>ID TAREA: </label><input type="text" name="txtidtarea" id="txtidtarea" value="<?php echo $idtarea ?>"><input type="submit" value="Buscar" name="btnbuscar" id="btnbuscar">
        <br>
        <label>Descripcion:</label><input type="text" name="txtdescripcion" id="txtdescripcion" value="<?php echo $descrip ?>">
        <br>
        <label>Asignatura:</label><input type="text" name="txtasignatura" id="txtasignatura" value="<?php echo $asignatura ?>">
        <br>
        <input type="submit" value="Guardar" name="btnguardar" id="btnguardar">
        <input type="submit" value="Borrar" name="btnborrar" id="btnborrar">
        <input type="submit" value="Limpiar" name="btnlimpiar" id="btnlimpiar" onclick="limpiar()">
    </form>
</body>
</html>