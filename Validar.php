<?php
include('conexion.php');
$user=$_POST['Usuario'];
$pass=$_POST['contrasena'];
$passN=MD5($pass, PASSWORD_DEFAULT);
$query="SELECT * FROM `usuarios` WHERE Usuario='$user' AND contrasena='$passN'";
$consulta = $mysql ->query($query);
if (mysqli_num_rows($consulta) == true) {
	session_start();
$_SESSION['estado'] = "Logeado";
$_SESSION['nombre'] = $user;
header("Location: loginsuccess.php");      //redirecciona al script Admin.php
}else{
	header("Location: login.php?=ContraseñaIncorrecta");
	
}