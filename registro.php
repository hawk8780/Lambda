<html>
<?php
	$Usuario=$_GET["Usuario"];
	$correo=$_GET["email"];
	$contrasena=$_GET["contrasena"];
	$contrasenamd5=MD5($contrasena, PASSWORD_DEFAULT);
	$database= mysqli_connect('200.24.13.63','trayecto','holaquetal1','trayecto_1');
	$consulta="INSERT INTO `usuarios` (`ID_USUARIO`, `Usuario`, `Correo`, `contrasena`) VALUES (NULL, '$Usuario', '$correo', '$contrasenamd5')";
	$respuesta=mysqli_query($database,$consulta);
	echo "Registrado exitosamente";
?>
<head>
<meta http-equiv="refresh" content="1; URL='login.php'" />
</head>
</html>