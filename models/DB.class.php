<?php

class DB
{
    private $mDB = null; // Chứa object connect đến DB

    protected function __construct()
    {
    }

    protected function connectDB()
    {
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $dbName = 'quanlyhanhchinh';

        if (!isset($this->mDB)) {
            try {
                $this->mDB = new PDO("mysql:host=$host;dbname=$dbName", $username, $password,
                    array(PDO::ATTR_PERSISTENT => true));
                $this->mDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                return false;
            }
        }
        return $this->mDB;
    }
}
