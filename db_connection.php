<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "winmore";

    $conn = new mysqli($servername, $username, $password, $database);

    if($conn->connect_error){
        die("connection Failed: " .$conn->connect_error);
    }
?>