<?php
	function Conectarse()
	{
		$link = mysqli_connect("localhost", "root", "root1234", "practica1");
		/* comprobar la conexión */
		if (mysqli_connect_errno()) 
		{
		    printf("Falló la conexión: %s\n", mysqli_connect_error());
		    exit();
		}
		return $link;
	}

?>