<?php
    $con = mysqli_connect("localhost", "root","", "gym");
    if(mysqli_connect_errno()){
        echo "Failed to connect to Mysql : " . mysqli_connect_errno();
    }
?>