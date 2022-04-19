<?php

    /*header("Access-Control-Allow-Origin: *");
    define('DB_SERVER','localhost'); 
    define('DB_USERNAME','root');
    define('DB_PASSWORD','2001');
    define('DB_DATABASE','proyecto');
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);*/

    header("Access-Control-Allow-Origin: *");
    $host="localhost";
    $usuario="root";
    $contraseña="2001";
    $base="proyecto";

    $db= mysqli_connect($host, $usuario, $contraseña, $base);
    if (!$db){
	echo"Fallo la conexion con el servidor";
    }

?>