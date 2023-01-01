<?php

class DB
{
    protected $host;
    protected $username;
    protected $password;
    protected $dbName;

    protected function connectDB()
    {
        $this->host = host;
        $this->username =  username;
        $this->password = password;
        $this->dbName = dbName;
        try {
            $PDO = new PDO("mysql:host=$this->host;dbname=$this->dbName", $this->username, $this->password,
                array(PDO::ATTR_PERSISTENT => true));
            $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Lỗi database";
            return false;
        }

        return $PDO;
    }
}
