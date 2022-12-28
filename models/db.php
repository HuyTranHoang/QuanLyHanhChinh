<?php

function connectDB()
{
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'quanlyhanhchinh';
//    $conn = new mysqli($host, $user, $password, $dbname);
//    if (!$conn) {
//        die("Connection failed: " . mysqli_connect_error());
//    }
//    echo "Connected successfully </br>";
//    return $conn;
    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//        echo "Connected successfully";
    } catch (PDOException $e) {
//        echo "Connection failed: " . $e->getMessage();
    }
    return $conn;
}
