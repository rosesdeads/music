<?php

$host="localhost";
$user="root";
$contrasena="";
$databases="mensajes";

$db = new mysqli($host, $user, $contrasena, $databases);

if($db->connect_error){
    die("Error en la base de datos");
}

?>