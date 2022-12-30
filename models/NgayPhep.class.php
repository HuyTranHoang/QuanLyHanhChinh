<?php

class NgayPhep extends DB
{
    public function __construct()
    {
    }

    public function insertNP($maNV, $soNgayHienTai, $tongSoNgay, $nam, $ghiChu)
    {
        $conn = $this->connectDB();
        $query = "INSERT INTO `tongngaynghi` (`maPhep`, `maNV`, `soNgayHienTai`, `tongSoNgay`, `nam`, `ghiChu`) 
            VALUES (NULL, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->execute([$maNV, $soNgayHienTai, $tongSoNgay, $nam,$ghiChu]);
    }

    public function delNP($id)
    {
        $conn = $this->connectDB();
        $query = "DELETE FROM tongngaynghi WHERE maPhep=" . $id;
        $conn->exec($query);
    }


    public function getAll_NP_NV()
    {
        $conn = $this->connectDB();
        $query = "SELECT n.maNV ,n.tenNV, t.soNgayHienTai, t.tongSoNgay FROM tongngaynghi t JOIN nhanvien n on n.maNV = T.maNV";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }
}