<?php

    include("db_config.php");
    $id = $_GET['id'];
    $q =" DELETE FROM `medicine_stock` WHERE id='$id'";
    mysqli_query($db, $q);
    header('location:display_medicine.php');  
?>
