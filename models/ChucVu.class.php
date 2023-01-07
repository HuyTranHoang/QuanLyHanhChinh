<?php

class ChucVu extends DB
{
    public function __construct()
    {
    }
    public function insertCV($chucVu)
    {
        $conn = self::connectDB();
        $query = "INSERT INTO chucvu (maCV, chucVu) VALUES (NULL,:chucVu)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":chucVu", $chucVu);
        $stmt->execute();
        $conn = null;
    }

    public function updateCV($id, $chucVu)
    {
        $conn = self::connectDB();
        $query = "UPDATE chucvu SET chucVu=:chucVu WHERE maCV=:id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":chucVu", $chucVu);
        $stmt->execute();
        $conn = null;
    }

    public function getOne($id)
    {
        $conn = self::connectDB();
        $query = "SELECT * FROM chucvu where maCV =" . $id;
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $conn = null;
        return $stmt->fetch();
    }

    public function deleteCV($id)
    {
        $conn = self::connectDB();
        $query = "DELETE FROM chucvu WHERE maCV=" . $id;
        $conn->exec($query);
        $conn = null;
    }

    public function getAll()
    {
        $conn = self::connectDB();
        $query = "SELECT * FROM chucvu";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $conn = null;
        return $stmt->fetchAll();
    }

}
