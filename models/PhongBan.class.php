<?php

class PhongBan extends DB
{
    public function __construct()
    {
    }

    public static function insertPB($tenPhong, $vietTat, $ghiChu)
    {
        $conn = self::connectDB();
        $query = "INSERT INTO phongban (maPhong, tenPhong, vietTat,ghiChu) VALUES (NULL,:tenPhong,:vietTat,:ghiChu)";
        $stmt = $conn -> prepare($query);
        $stmt->bindParam(":tenPhong", $tenPhong);
        $stmt->bindParam(":vietTat", $vietTat);
        $stmt->bindParam(":ghiChu", $ghiChu);
        $stmt->execute();
        $conn = null;
    }

    public static function updatePB($id, $tenPhong, $vietTat, $ghiChu)
    {
        $conn = self::connectDB();
        $query = "UPDATE phongban SET tenPhong=:tenPhong, vietTat=:vietTat, ghiChu=:ghiChu WHERE maPhong=:id";
        $stmt = $conn -> prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":tenPhong", $tenPhong);
        $stmt->bindParam(":vietTat", $vietTat);
        $stmt->bindParam(":ghiChu", $ghiChu);
        $stmt->execute();
        $conn = null;
    }

    public static function getOne_PB($id)
    {
        $conn = self::connectDB();
        $query = "SELECT * FROM phongban where maPhong =" . $id;
        $stmt = $conn -> prepare($query);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $conn = null;
        return $stmt->fetch();
    }

    public static function delPB($id)
    {
        $conn = self::connectDB();
        $query = "DELETE FROM phongban WHERE maPhong=" . $id;
        $conn -> exec($query);
        $conn = null;

    }

    public static function getAll_PB()
    {
        $conn = self::connectDB();
        $query = "SELECT * FROM phongban";
        $stmt = $conn -> prepare($query);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $conn = null;
        return $stmt->fetchAll();
    }
}