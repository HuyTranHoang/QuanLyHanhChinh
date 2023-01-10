<?php

class TaoPhieu extends DB
{
    public function __construct()
    {
    }

    public function insertTP($maNV,$tongsoNgay,$tu_buoi,$den_buoi,$tu_ngay,$den_ngay,$loaiPhep,$ghiChu,$nguoi_duyet,$trang_thai,$ngay_duyet)
    {
        $conn = self::connectDB();
        $query = "insert into phieunghi (maPhieu, maNV, tongSoNgay, tu_buoi, den_buoi, tu_ngay, den_ngay, 
            loaiPhep, ghiChu, nguoi_duyet,trang_thai, ngay_duyet)
            values (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->execute([$maNV,$tongsoNgay,$tu_buoi,$den_buoi,$tu_ngay,$den_ngay,$loaiPhep,$ghiChu,$nguoi_duyet,$trang_thai,$ngay_duyet]);
        $conn = null;

    }

    public function updateNV()
    {


    }

    public function getOne($id)
    {

    }

    public function deleteNV($id)
    {

    }


    public function getAll_FromID_PB($id)
    {

    }

    public function getAll()
    {

    }
}