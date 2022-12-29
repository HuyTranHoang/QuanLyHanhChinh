<?php

class ChucVu extends DB
{

    public function __construct()
    {
    }

    public function insertPB($chucVu)
    {
        $conn = $this->connectDB();
        $query = "INSERT INTO chucvu (maCV, chucVu) VALUES (NULL,:chucVu)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":chucVu", $chucVu);
        $stmt->execute();
    }

    public function updateCV($id, $chucVu)
    {
        $conn = $this->connectDB();
        $query = "UPDATE chucvu SET chucVu=:chucVu WHERE maCV=:id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":chucVu", $chucVu);
        $stmt->execute();
    }

    public function getOne_CV($id)
    {
        $conn = $this->connectDB();
        $query = "SELECT * FROM chucvu where maCV =" . $id;
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetch();
    }

    public function delCV($id)
    {
        $conn = $this->connectDB();
        $query = "DELETE FROM chucvu WHERE maCV=" . $id;
        $conn->exec($query);
    }

    public function getAll_CV()
    {
        $conn = $this->connectDB();
        $query = "SELECT * FROM chucvu";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }

}