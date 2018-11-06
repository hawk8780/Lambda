<?php
   $server = "localhost";
   $user     = "root";
   $pass = "";
   $database = "trayecto";
   $db = mysqli_connect($server, $user, $pass, $database);

   if(!$db) {
         echo "Couldn't connect to the database";
         exit();
   }
?>