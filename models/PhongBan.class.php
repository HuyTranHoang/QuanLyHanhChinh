<?php

class PhongBan extends DB
{

    public function __construct()
    {
    }

    public function insertPB($tenPhong, $vietTat, $ghiChu)
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

    public function updatePB($id, $tenPhong, $vietTat, $ghiChu)
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

    public function getOne($id)
    {
        $conn = self::connectDB();
        $query = "SELECT * FROM phongban where maPhong =" . $id;
        $stmt = $conn -> prepare($query);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $conn = null;
        return $stmt->fetch();
    }

    public function findNV($id)
    {
        $conn = self::connectDB();
        $query = "select phongban.maPhong from phongban join nhanvien n on phongban.maPhong = n.maPhong where n.maNV = $id";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $conn = null;
        return $stmt->fetch();
    }

    public function deletePB($id)
    {
        $conn = self::connectDB();
        $query = "DELETE FROM phongban WHERE maPhong=" . $id;
        $conn -> exec($query);
        $conn = null;

    }

    public function getAll()
    {
        $conn = self::connectDB();
        $query = "SELECT * FROM phongban";
        $stmt = $conn -> prepare($query);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $conn = null;
        return $stmt->fetchAll();
    }

    public function getMaxID() {
        $conn = self::connectDB();
        $query = "SELECT AUTO_INCREMENT - 1 as CurrentId FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'quanlyhanhchinh' AND TABLE_NAME = 'phongban'";
        $stmt = $conn -> prepare($query);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $conn = null;
        return $stmt->fetch();
    }
}