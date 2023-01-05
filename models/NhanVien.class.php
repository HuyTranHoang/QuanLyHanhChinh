<?php

class NhanVien extends DB
{
    public function __construct()
    {
    }

    public static function insertNV($tenNV, $userName, $password, $maPhong, $gioiTinh, $ngaySinh, $maCV)
    {
        $conn = self::connectDB();
        $query = "INSERT INTO `nhanvien` (`maNV`, `tenNV`, `userName`, `password`, `maPhong`, `gioiTinh`, `ngaySinh`, `maCV`) 
            VALUES (NULL, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->execute([$tenNV, $userName, $password, $maPhong, $gioiTinh, $ngaySinh, $maCV]);
        $conn = null;

    }

    public static function updateNV($id, $tenNV, $userName, $password, $maPhong, $gioiTinh, $ngaySinh, $maCV)
    {
        $conn = self::connectDB();
        $query = "UPDATE `nhanvien` SET `tenNV` = ?, `userName` = ?, `password` = ?, `maPhong` = ?, 
                `gioiTinh` = ?, `ngaySinh` = ?, `maCV` = ? WHERE `nhanvien`.`maNV` = ?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$tenNV, $userName, $password, $maPhong, $gioiTinh, $ngaySinh, $maCV, $id]);
        $conn = null;

    }

    public static function getOne_NV($id)
    {
        $conn = self::connectDB();
        $query = "SELECT * FROM nhanvien where maNV =" . $id;
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $conn = null;
        return $stmt->fetch();
    }

    public static function delNV($id)
    {
        $conn = self::connectDB();
        $query = "DELETE FROM nhanvien WHERE maNV=" . $id;
        $conn->exec($query);
        $conn = null;
    }

    public static function getAll_NV()
    {
        $conn = self::connectDB();
        $query = "SELECT * FROM nhanvien";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $conn = null;
        return $stmt->fetchAll();
    }

    public static function getAll_NV_from_PB($id)
    {
        $conn = self::connectDB();
        $query = "SELECT * FROM nhanvien join phongban p on p.maPhong = nhanvien.maPhong where nhanvien.maPhong = ?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$id]);
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $conn = null;
        return $stmt->fetchAll();
    }

    public static function getAll_NV_PB_CV()
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