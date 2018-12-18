<?php
	$Mes=$_POST["fecha"];
	$CiudadIda=$_POST["ciudadIDA"];
	$CiudadVuelta=$_POST["ciudadVUELTA"];
	//$database= mysqli_connect('db.inf.uct.cl','aparra', 'aparra9272','aparra');
	$database= mysqli_connect('200.24.13.62','trayecto','holaquetal1','trayecto_1');
	$consulta="SELECT * FROM recorridos WHERE origen='$CiudadIda' AND destino='$CiudadVuelta' AND MONTH(fecha)=$Mes";
	$respuesta=mysqli_query($database,$consulta);
	
	echo "<table border='5'>";
	echo "<tr>
	         <td>Origen</td>
			 <td>Destino</td>
			 <td>Fecha</td>
			 <td>Hora Salida</td>
			 <td>Número de Recorrido</td>
      </tr>";
			while($fila=mysqli_fetch_object($respuesta)){
			echo "<tr >
				 <td>$fila->origen</td>
				 <td>$fila->destino</td>
				 <td>$fila->fecha</td>
				 <td>$fila->horario_salida</td>
				 <td>$fila->numero_recorrido</td>
			</tr></center>";
	}

?>