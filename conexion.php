<?php
	$mysql = new mysqli('200.24.13.63','trayecto','holaquetal1','trayecto_1');
	if (!$mysql) {
		echo "Error en la conexion".mysql_error(); 
		exit();
	}
?>