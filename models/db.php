<?php

class db
{
    private $mDB = null; // Chứa object connect đến DB

    private $config = [];

    public function __construct()
    {
    }

    public function connectDB()
    {
        $this->config = getDatabaseInfo();
        $host = $this->config['host'];
        $username = $this->config['username'];
        $password = $this->config['password'];
        $dbName = $this->config['dbName'];

        if (!isset($this->mDB)) {
            try {
                $this->mDB = new PDO("mysql:host=$host;dbname=$dbName", $username, $password, array(PDO::ATTR_PERSISTENT => true));
                $this->mDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                return false;
            }
        }
        return $this->mDB;
    }
}
//
//function connectDB()
//{
//    $host = 'localhost';
//    $username = 'root';
//    $password = '';
//    $dbname = 'quanlyhanhchinh';
//    try {
//        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
//        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    } catch (PDOException $e) {
//        echo 'Kết nối database thất bại';
//    }
//    return $conn;
//}
