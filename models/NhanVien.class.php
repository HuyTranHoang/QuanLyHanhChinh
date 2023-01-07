<?php

class NhanVien extends DB
{
    public function __construct()
    {
    }

    public function insertNV($tenNV, $userName, $password, $maPhong, $gioiTinh, $ngaySinh, $maCV,$hinh)
    {
        $conn = self::connectDB();
        $query = "INSERT INTO `nhanvien` (`maNV`, `tenNV`, `userName`, `password`, `maPhong`, `gioiTinh`, `ngaySinh`, `maCV`,`hinh` ) 
            VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->execute([$tenNV, $userName, $password, $maPhong, $gioiTinh, $ngaySinh, $maCV,$hinh]);
        $conn = null;

    }

    public function updateNV($id, $tenNV, $userName, $password, $maPhong, $gioiTinh, $ngaySinh, $maCV, $hinh)
    {
        $conn = self::connectDB();
        $query = "UPDATE `nhanvien` SET `tenNV` = ?, `userName` = ?, `password` = ?, `maPhong` = ?, 
                `gioiTinh` = ?, `ngaySinh` = ?, `maCV` = ?, `hinh` = ? WHERE `nhanvien`.`maNV` = ?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$tenNV, $userName, $password, $maPhong, $gioiTinh, $ngaySinh, $maCV,$hinh, $id]);
        $conn = null;

    }

    public function getOne($id)
    {
        $conn = self::connectDB();
        $query = "SELECT n.* ,p.tenPhong,c.chucVu FROM nhanvien n join chucvu c on c.maCV = n.maCV join phongban p on p.maPhong = n.maPhong where maNV = ?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$id]);
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $conn = null;
        return $stmt->fetch();
    }

    public function deleteNV($id)
    {
        $conn = self::connectDB();
        $query = "DELETE FROM nhanvien WHERE maNV=" . $id;
        $conn->exec($query);
        $conn = null;
    }


    public function getAll_FromID_PB($id)
    {
        $conn = self::connectDB();
        $query = "SELECT * FROM nhanvien join phongban p on p.maPhong = nhanvien.maPhong where nhanvien.maPhong = ?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$id]);
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $conn = null;
        return $stmt->fetchAll();
    }

    public function getAll()
    {
        $conn = self::connectDB();
        $query = "SELECT n.maNV, n.tenNV,p.tenPhong,c.chucVu FROM nhanvien n join chucvu c on c.maCV = n.maCV join phongban p on p.maPhong = n.maPhong";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $conn = null;
        return $stmt->fetchAll();
    }
}