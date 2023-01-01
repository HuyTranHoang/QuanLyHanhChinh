<?php

class PhongBan extends DB
{
    public function __construct()
    {
    }

    public function insertPB($tenPhong, $vietTat, $ghiChu)
    {
        $conn = $this->connectDB();
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
        $conn = $this->connectDB();
        $query = "UPDATE phongban SET tenPhong=:tenPhong, vietTat=:vietTat, ghiChu=:ghiChu WHERE maPhong=:id";
        $stmt = $conn -> prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":tenPhong", $tenPhong);
        $stmt->bindParam(":vietTat", $vietTat);
        $stmt->bindParam(":ghiChu", $ghiChu);
        $stmt->execute();
        $conn = null;
    }

    public function getOne_PB($id)
    {
        $conn = $this->connectDB();
        $query = "SELECT * FROM phongban where maPhong =" . $id;
        $stmt = $conn -> prepare($query);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $conn = null;
        return $stmt->fetch();
    }

    public function delPB($id)
    {
        $conn = $this->connectDB();
        $query = "DELETE FROM phongban WHERE maPhong=" . $id;
        $conn -> exec($query);
        $conn = null;

    }

    public function getAll_PB()
    {
        $conn = $this->connectDB();
        $query = "SELECT * FROM phongban";
        $stmt = $conn -> prepare($query);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $conn = null;
        return $stmt->fetchAll();
    }
}