<?php
$password = $_POST['password'];
$database= mysqli_connect('200.24.13.62','trayecto','holaquetal1','trayecto_1');
$consulta="SELECT 'Usuario' FROM usuarios WHERE 'Usuario'=='$login'";
	session_start();
	header("Cache-control: private");
		$login = $_POST['login'];
		$password = $_POST['password'];
			
			$respuesta=mysqli_query($database,$consulta);
		if ($respuesta!=NULL) {
			$_SESSION['estado'] = "logeado" // Coloco la variable de sesión 'estado'
			$msg = "<a href=\"index.html\">Bienvenido " . $login . ">></a>";
			} 
		else {
			$msg = "Datos erroneos!!. <a href=\"login.html\">Inténtelo de nuevo.</a>";
		}
?>
<html>
<head><title>:: Valida ::</title></head>
<body>
<p style="text-align:center;"><?= $msg ?></p>
</form>
</body>
</html>
