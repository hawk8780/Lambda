<?php 

	$host = "localhost";    
	$basededatos = "trayecto";  
	$usuariodb = "root"; 
	$clavedb = "";   

	
	$tabla_db1 = "buses"; 	 
	$tabla_db2 = "recorridos";
	$tabla_db3 = "usuarios";
	

	error_reporting(1); 
	
	$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);


	if ($conexion->connect_errno) {
	    echo "Error de conexion";
	    exit();
	}

?>