<?php
	//$database= mysqli_connect('db.inf.uct.cl','aparra', 'aparra9272','aparra');
	$database= mysqli_connect('200.24.13.62','trayecto','holaquetal1','trayecto_1');
	$consulta="SELECT * FROM recorridos ORDER BY precio";
	$respuesta=mysqli_query($database,$consulta);
	echo "<center>";
	echo "<table border='2'>";
	echo "<tr>
	         <td>Origen</td>
			 <td>Destino</td>
			 <td>Fecha</td>
			 <td>Hora Salida</td>
			 <td>Número de Recorrido</td>
			 <td>Precio (CLP)</td>
      </tr>";
			while($fila=mysqli_fetch_object($respuesta)){
			echo "<tr >
				 <td>$fila->origen</td>
				 <td>$fila->destino</td>
				 <td>$fila->fecha</td>
				 <td>$fila->horario_salida</td>
				 <td>$fila->numero_recorrido</td>
				 <td>$ $fila->precio</td>
			</tr></center>";
	}

?>