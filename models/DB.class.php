<?php

class DB
{
    protected function connectDB()
    {
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $dbName = 'quanlyhanhchinh';

        try {
            $PDO = new PDO("mysql:host=$host;dbname=$dbName", $username, $password,
                array(PDO::ATTR_PERSISTENT => true));
            $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Lỗi database";
            return false;
        }

        return $PDO;
    }
}
