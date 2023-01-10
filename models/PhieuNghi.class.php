<?php

class PhieuNghi extends DB
{
    public function __construct()
    {
    }

    public function insertPN($maNV, $tongSoNgay, $tu_buoi, $den_buoi, $tu_ngay, $den_ngay, $loaiPhep, $ghiChu, $nguoi_duyet, $trang_thai, $ngay_duyet)
    {
        $conn = self::connectDB();
        $query = "insert into phieunghi (maPhieu, maNV, tongSoNgay, tu_buoi, den_buoi, tu_ngay, den_ngay, 
            loaiPhep, ghiChu, nguoi_duyet,trang_thai, ngay_duyet)
            values (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->execute([$maNV,$tongSoNgay,$tu_buoi,$den_buoi,$tu_ngay,$den_ngay,$loaiPhep,$ghiChu,$nguoi_duyet,$trang_thai,$ngay_duyet]);
        $conn = null;
    }

    public function updatePN($trang_thai,$nguoi_duyet, $ngay_duyet, $maPhieu)
    {
        $conn = self::connectDB();
        $query = "UPDATE phieunghi SET trang_thai = ?, nguoi_duyet = ?, ngay_duyet = ? WHERE maPhieu = ?";
        $stmt = $conn -> prepare($query);
        $stmt->execute([$trang_thai,$nguoi_duyet,$ngay_duyet, $maPhieu]);
        $conn = null;
    }

    public function updateTongNgay($soNgay,$maNV)
    {
        $conn = self::connectDB();
        $query = "UPDATE tongngaynghi SET soNgayHienTai = ? WHERE maNV = ?";
        $stmt = $conn -> prepare($query);
        $stmt->execute([$soNgay,$maNV]);
        $conn = null;
    }

    public function getOne($id)
    {
        $conn = self::connectDB();
        $query = "select phieunghi.*, n.tenNV from phieunghi join nhanvien n on n.maNV = phieunghi.maNV where maPhieu = $id";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $conn = null;
        return $stmt->fetch();
    }

    public function deletePN($id)
    {

    }


    public function getAll($id = 0)
    {
        $conn = self::connectDB();
        $query = "select * from phieunghi";
        $query.= ($id != 0 ) ? " where maNV = $id order by trang_thai, ngay_duyet": false ;
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $conn = null;
        return $stmt->fetchAll();
    }
    public function getAllNV_FromPB($id)
    {
        $conn = self::connectDB();
        $query = "select phieunghi.*, n.tenNV, n.maNV from phieunghi join nhanvien n on n.maNV = phieunghi.maNV where n.maPhong = $id and trang_thai = 0";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $conn = null;
        return $stmt->fetchAll();
    }

}