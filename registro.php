<?php

include("config.php");
session_start();

    $usuariox = $_POST['usuariox'];
    $contrasenax = $_POST['contrasenax'];
    $correo = $_POST['correo'];
    $query = "INSERT INTO users (usuario, pass, mail) VALUES ('$usuariox', '$contrasenax', '$correo')";
    echo mysqli_query($db, $query);

?>