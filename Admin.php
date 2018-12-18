<?php
session_start();
if($_SESSION['estado'] != "logeado")
  echo "Debe de logearse antes";


//SI está logueado, ejecutará lo que sigue

echo "Bienvenido ".$_SESSION['nombre'];
?>
<br /><br /><br />
  <a href="cerrarSesion.php"> Cerrar Sesión </a>
 
