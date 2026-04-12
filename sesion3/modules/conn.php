<?php
 $host= "localhost";
 $user= "root";
 $pass= "";
 $db= "gestiones";
 $conexion = new mysqli($host,$user,$pass,$db);
 if ($conexion -> connect_error) {
     die("error de conexion". $conexion->connect_error);
 }else{
    
 }
?>