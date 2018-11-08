<html>
<head>
<meta http-equiv="refresh" content="2; URL='http://localhost/estupidades/index.html'" />
</head>
<?php
	$Usuario=$_GET["user"];
	$correo=$_GET["email"];
	$contrasena=$_GET["pass"];
	$contrasenamd5=password_hash($contrasena, PASSWORD_DEFAULT);
	
	$database= mysqli_connect('localhost','root', '','trayecto');
	$consulta="CALL Registro('$Usuario','$correo','$contrasenamd5')";
	$respuesta=mysqli_query($database,$consulta);
	echo "Registrado exitosamente";
?>
</html>