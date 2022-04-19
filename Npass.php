<?php

include("config.php");
session_start();

    $idx1 = $_POST['idx1'];
    $usuariox1 = $_POST['usuariox1'];
    $contrasenax1 = $_POST['contrasenax1'];
    $query = "UPDATE users SET pass = '$contrasenax1' WHERE id = $idx1";
    echo mysqli_query($db, $query);

?>