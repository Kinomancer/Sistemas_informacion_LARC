<?php

$host_DB = "127.0.0.1"; //localhost
$user_DB = "root";
$pass_DB = "luis2139331.";
$db_name = "sakila";

$conexion = new mysqli($host_DB, $user_DB, $pass_DB, $db_name);
if ($conexion -> connect_error) {
    echo "Mysql no pudo conectarse";
} else {
    echo "Conexion exitosa";
}


?>

