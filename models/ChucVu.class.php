<?php

class ChucVu extends DB
{

    public function __construct()
    {
    }

    public static function insertCV($chucVu)
    {
        $conn = self::connectDB();
        $query = "INSERT INTO chucvu (maCV, chucVu) VALUES (NULL,:chucVu)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":chucVu", $chucVu);
        $stmt->execute();
        $conn = null;
    }

    public static function updateCV($id, $chucVu)
    {
        $conn = self::connectDB();
        $query = "UPDATE chucvu SET chucVu=:chucVu WHERE maCV=:id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":chucVu", $chucVu);
        $stmt->execute();
        $conn = null;
    }

    public static function getOne_CV($id)
    {
        $conn = self::connectDB();
        $query = "SELECT * FROM chucvu where maCV =" . $id;
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $conn = null;
        return $stmt->fetch();
    }

    public static function delCV($id)
    {
        $conn = self::connectDB();
        $query = "DELETE FROM chucvu WHERE maCV=" . $id;
        $conn->exec($query);
        $conn = null;
    }

    public static function getAll_CV()
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
