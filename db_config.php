<?php

    $db=mysqli_connect('localhost','root',"","samarth_bharat_db");

    if($db){
        
    }
    
    else{
        ?>
        <script>alert("No Connection")</script>
        <?php
    }
?>