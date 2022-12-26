<?php

function connectDB () {
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'quanlyhanhchinh';
    $conn = new mysqli($host, $user, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully </br>";
    return $conn;
}
