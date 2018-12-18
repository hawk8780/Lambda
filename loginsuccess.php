<!doctype html>
<html lang="es">

<head>
	<title>Trayecto</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="estilo.css"/>
<link rel="icon" href="icono.ico" type="image/icono.ico" sizes="16x16">
<script src="JQuery.js" type="text/javascript"></script>
<script src="script.js"></script>
<link rel=StyleSheet href="css/bootstrap.min.css" title="Bootstrap Min">
<script src="js/bootstrap.min.js"></script>
<script src="npm.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<script>


	</script>
		<body>
	<div id="wrap">
		    <div id="header" style="position:relative;">
	<h1>Login y Registro</h1>
	</div>
		    <div id="main" style="position:relative;">
<div style="text-align:center;"><form method="post" action="Validar.php">
				Introduzca su login: <input type="text" name="login" /> <br />
				Introduzca su contraseña: <input type="password" name="password" /> <br />
				<input type="submit" value="Enviar">
				</form>
			</div>
			</div>
			<div id="main" style="position:relative;">
				
				
			</div>
			<hr class="divquien">
			<?php
	session_start();
	echo "<h1>";
	echo "Bienvenido: ".$_SESSION['nombre'];
	echo "</h1>";
	?>
	<a href="cerrarSesion.php">Cerrar Sesion</a>
			
		</div>
		<div id="footer">
				<nav id="navegador">
			<ul >
			<li><a href="contacto.html">Contacto</a></li>
			<li><a href="quienessomos.html">Quiénes Somos</a></li>
			<li><a href="index.html">Busca tu Pasaje</a></li>
			<li><a href="registro.html">Registro</a></li>
			<li><a href="login.php">Login</a></li>
			</ul>
			</nav>
			</div>
		
		</body>
</html> 
	
