<?php

class NgayPhep extends DB
{
    public function __construct()
    {
    }

    public function insertNP($maNV, $soNgayHienTai, $tongSoNgay, $nam, $ghiChu)
    {
        $conn = self::connectDB();
        $query = "INSERT INTO `tongngaynghi` (`maPhep`, `maNV`, `soNgayHienTai`, `tongSoNgay`, `nam`, `ghiChu`) 
            VALUES (NULL, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->execute([$maNV, $soNgayHienTai, $tongSoNgay, $nam,$ghiChu]);
        $conn = null;
    }

    public function updateNP($maPhep,$maNV,$soNgayHienTai,$tongSoNgay,$nam,$ghiChu)
    {
        $conn = self::connectDB();
        $query = "UPDATE `tongngaynghi` SET `maNV` = ?, `soNgayHienTai` = ?, `tongSoNgay` = ?, `nam` = ?, 
                `ghiChu` = ? WHERE `tongngaynghi`.`maPhep` = ?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$maNV,$soNgayHienTai,$tongSoNgay,$nam,$ghiChu,$maPhep]);
        $conn = null;
    }


    public function deleteNP($id)
    {
        $conn = self::connectDB();
        $query = "DELETE FROM tongngaynghi WHERE maPhep=" . $id;
        $conn->exec($query);
        $conn = null;
    }

    public function getOne($id)
    {
        $conn = self::connectDB();
        $query = "SELECT t.maPhep, n.maNV ,n.tenNV, n.maPhong, t.soNgayHienTai, t.tongSoNgay, t.nam, t.ghiChu FROM tongngaynghi t JOIN nhanvien n on n.maNV = T.maNV";
        $query .= ' where t.maPhep ='.$id;
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $conn = null;
        return $stmt->fetch();
    }

    public function getAll()
    {
        $conn = self::connectDB();
        $query = "SELECT t.maPhep, n.maNV ,n.tenNV, t.soNgayHienTai, t.tongSoNgay, t.nam FROM tongngaynghi t JOIN nhanvien n on n.maNV = T.maNV";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $conn = null;
        return $stmt->fetchAll();

    }
}