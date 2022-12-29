<?php

class NhanVien extends DB
{
    public function __construct()
    {
    }

    public function insertNV($tenPhong, $vietTat, $ghiChu)
    {
        $conn = $this->connectDB();
        $query = "INSERT INTO nhanvien (maNV, tenNV, userName,password, maPhong, gioiTinh, ngaySinh) 
                    VALUES (NULL,:tenNV,:userName,:password,:maPhong,:gioiTinh,:ngaySinh)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":tenNV", $tenNV);
        $stmt->bindParam(":userName", $userName);
        $stmt->bindParam(":password", $password);
        $stmt->bindParam(":maPhong", $maPhong);
        $stmt->bindParam(":gioiTinh", $gioiTinh);
        $stmt->bindParam(":ngaySinh", $ngaySinh);
        $stmt->execute();
    }

    public function updateNV($id, $tenNV, $userName, $password, $maPhong, $gioiTinh, $ngaySinh, $maCV)
    {
        $conn = $this->connectDB();
        $query = "UPDATE nhanvien SET tenNV=:tenNV, userName=:userName, password=:password,
                    maPhong=:maPhong, gioiTinh=:gioiTinh, ngaySinh=:ngaySinh, maCV=:maCV WHERE maNV=:id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":tenNV", $tenNV);
        $stmt->bindParam(":userName", $userName);
        $stmt->bindParam(":password", $password);
        $stmt->bindParam(":maPhong", $maPhong);
        $stmt->bindParam(":gioiTinh", $gioiTinh);
        $stmt->bindParam(":ngaySinh", $ngaySinh);
        $stmt->execute();
    }

    public function getOne_NV($id)
    {
        $conn = $this->connectDB();
        $query = "SELECT * FROM nhanvien where maNV =" . $id;
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetch();
    }

    public function delNV($id)
    {
        $conn = $this->connectDB();
        $query = "DELETE FROM nhanvien WHERE maNV=" . $id;
        $conn->exec($query);
    }

    public function getAll_NV()
    {
        $conn = $this->connectDB();
        $query = "SELECT * FROM nhanvien";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }

    public function getAll_NV_PB_CV()
    {
        $conn = $this->connectDB();
        $query = "SELECT n.maNV, n.tenNV,p.tenPhong,c.chucVu FROM nhanvien n join chucvu c on c.maCV = n.maCV join phongban p on p.maPhong = n.maPhong";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }
}