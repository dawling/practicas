<?php
 include("conex.php");
 $existe="no";
if (isset($_POST["btnGuardar"]))
 {
 	$iddepto = $_POST["TxtFolio"];
 	$descrip = $_POST["TxtDescrip"];
 	$existe = $_POST["txtExiste"];
 	$idconex = Conectarse();
 	if ($existe=="no")
 	{
 		mysqli_query($idconex,"insert into deptos value('$iddepto','$descrip')") or die (mysqli_error($idconex));
 		echo "Datos Guardados con Exito";
 	}
 	else
 	{
 		mysqli_query($idconex,"update deptos set descrip='$descrip' where iddepto='$iddepto'") or die (mysqli_error($idconex));
 		echo "Datos Actualizados con Exito";
 	}
 	mysqli_close($idconex);
 	
 }
 if (isset($_POST["btnEliminar"]))
 {
 	$iddepto = $_POST["TxtFolio"];
 	$idconex = Conectarse();
 	mysqli_query($idconex,"delete from deptos where iddepto='$iddepto'") or die (mysqli_error($idconex));
 	mysqli_close($idconex);
 	echo "Datos Eliminados con Exito";
 }
if (isset($_POST["btnBuscar"]))
 {
 	$iddepto = $_POST["TxtFolio"];
 	$idconex = Conectarse();
 	$reg=mysqli_query($idconex,"select * from deptos where iddepto='$iddepto'") or die (mysqli_error($idconex));
 	if (mysqli_num_rows($reg)>0)
 	{
 		$datos = mysqli_fetch_assoc($reg);
 		$descrip = $datos["descrip"];
 		$existe="si";
 	}
 	else
 		$existe = "no";
 	mysqli_close($idconex);
 }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Envio de Datos</title>
	<meta charset="utf-8">
	<script type="text/javascript">
		function limpiar()
		{
			document.form1.txtExiste.value = "no";
			document.form1.TxtFolio.value = "";
			document.form1.TxtDescrip.value = "";
			document.form1.txtExiste.focus();
		}
	</script>
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<form method="post" name="form1" id="form1" class="cuadro_perzonalizado">
	<input type="hidden" name="txtExiste" value="<?php echo $existe ?>">
	<label class="label_perzonalizado">Folio:</label>
	<input type="text" required name="TxtFolio" class="txtbox_perzonalizado" maxlength="3" size="4" value="<?php echo $iddepto ?>"><input type="submit" name="btnBuscar" value="Buscar" class="boton_personalizado">
	<br>
	<label class="label_perzonalizado">Descripción:</label>
	<input type="text" name="TxtDescrip" class="txtbox_perzonalizado" value="<?php echo $descrip ?>">
	<br>
	<br>
	<input type="submit" name="btnGuardar" value="Guardar" class="boton_personalizado">
	<input type="submit" name="btnEliminar" value="Eliminar" class="boton_personalizado" <?php if ($existe=="no") echo "disabled"?> >
	<input type="button" name="btnNuevo" value="Limpiar" onclick="limpiar()" class="boton_personalizado">
</form>
</body>
</html>