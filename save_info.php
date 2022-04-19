<?php

include("config.php");
session_start();

    $barcode = $_POST['barcode'];
    $p_name = $_POST['p_name'];
    $p_type = $_POST['p_type'];
    $query = "INSERT INTO productos VALUES ('$barcode', '$p_name', '$p_type')";
    echo mysqli_query($db, $query);
?>