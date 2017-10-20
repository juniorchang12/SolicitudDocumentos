<?php
		include("conexion.php");
		$cn=Conectarse();
		$nombre=strtoupper($_GET['nombre']);
		$email=strtoupper($_GET['email']);
		$telefono=$_GET['telefono'];
		$consulta=strtoupper($_GET['consulta']);
		$rsinsertar="insert into consultas(nombre, email, telefono, consulta) values('$nombre', '$email' , '$telefono' , '$consulta' )";
		$insertar=mysql_query($rsinsertar);
		header("Location: contactanos.php");
?>