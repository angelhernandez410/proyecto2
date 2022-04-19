<?php

include("config.php");
session_start();

    date_default_timezone_set('America/Caracas');
    $fecha = date("Y-m-d H:i:s");

    $barcode = $_POST['barcode'];
    $precio1 = $_POST['precio1'];
    $query = "INSERT INTO precios (barcode, precio, fecha) VALUES ('$barcode', '$precio1', '$fecha')";
    echo mysqli_query($db, $query);
?>