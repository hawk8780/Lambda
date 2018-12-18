<?php

$nombre=$_POST["nombre"];
$pregunta=$_POST["pregunta"];

$database= mysqli_connect('200.24.13.63','trayecto','holaquetal1','trayecto_1');

$consulta="INSERT INTO `preguntas`(`nombre`,`pregunta`) VALUES ('$nombre','$pregunta')";

$respuesta=mysqli_query($database,$consulta);

echo "Pregunta enviada exitosamente";

?>
