<?php

    $server = "sql103.epizy.com";
    $username ="epiz_28085139";
    $password ="aK6iMfu5J25hp";
    $dbname ="epiz_28085139_mochammadadindracv";

    $conn = mysqli_connect($server, $username, $password, $dbname);

    if(!$conn){
        die("Connection Failed:".mysqli_connect_error*());
    }
?>