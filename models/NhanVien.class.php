<?php

class NhanVien extends DB
{
    public function __construct()
    {
    }

    public function insertNV($tenNV, $userName, $password, $maPhong, $gioiTinh, $ngaySinh, $maCV)
    {
        $conn = $this->connectDB();
        $query = "INSERT INTO `nhanvien` (`maNV`, `tenNV`, `userName`, `password`, `maPhong`, `gioiTinh`, `ngaySinh`, `maCV`) 
            VALUES (NULL, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->execute([$tenNV, $userName, $password, $maPhong, $gioiTinh, $ngaySinh, $maCV]);
    }

    public function updateNV($id, $tenNV, $userName, $password, $maPhong, $gioiTinh, $ngaySinh, $maCV)
    {
        $conn = $this->connectDB();
        $query = "UPDATE `nhanvien` SET `tenNV` = ?, `userName` = ?, `password` = ?, `maPhong` = ?, 
                `gioiTinh` = ?, `ngaySinh` = ?, `maCV` = ? WHERE `nhanvien`.`maNV` = ?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$tenNV, $userName, $password, $maPhong, $gioiTinh, $ngaySinh, $maCV, $id]);
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

    public function getAll_NV_from_PB($id)
    {
        $conn = $this->connectDB();
        $query = "SELECT * FROM nhanvien join phongban p on p.maPhong = nhanvien.maPhong where nhanvien.maPhong = ?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$id]);
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