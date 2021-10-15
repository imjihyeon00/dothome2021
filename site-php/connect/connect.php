<?php
    $host = "localhost";
    $user = "imjihyeon01";
    $pass = "dlawltn1!";
    $db = "imjihyeon01";
    $connect = new mysqli($host, $user, $pass, $db);
    $connect -> set_charset("utf8");

    if(mysqli_connect_errno()){
        echo "Database Connect False";
    } else {
        // echo "Database Connect True";
    }
?>