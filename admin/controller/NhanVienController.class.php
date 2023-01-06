<?php

class NhanVienController extends NhanVien
{
    public static function index() {
        $kq = self::getAll_NV_PB_CV();
        include 'views/NhanVien/index.php';
    }
    public static function create() {

        if ((isset($_POST['addnv'])) && ($_POST['addnv'])) {
            $tenNV = $_POST['tenNV'];
            $userName = $_POST['userName'];
            $password = $_POST['password'];
            $maPhong = $_POST['maPhong'];
            $gioiTinh = $_POST['gioiTinh'];
            $ngaySinh = $_POST['ngaySinh'];
            $maCV = $_POST['maCV'];
            $tenHinh = $_FILES['hinh']['name'];
            $sizeHinh = $_FILES['hinh']['size'];
            $tmpTenHinh = $_FILES['hinh']['tmp_name'];
            move_uploaded_file($tmpTenHinh,'images/'.$tenHinh);
            self::insertNV($tenNV, $userName, $password, $maPhong, $gioiTinh, $ngaySinh, $maCV,$tenHinh);
            header('location: index.php?act=nhanvien&q=index');
        }
        include 'views/NhanVien/index.php';
    }
    public static function update() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $kqOne = self::getOne_NV($id);
            $kq = self::getAll_NV();
            include 'views/NhanVien/index.php';
        }
        if (isset($_POST['maNV'])) {
            $maCV = $_POST['maCV'];
            $tenNV = $_POST['tenNV'];
            $userName = $_POST['userName'];
            $password = $_POST['password'];
            $maPhong = $_POST['maPhong'];
            $gioiTinh = $_POST['gioiTinh'];
            $ngaySinh = $_POST['ngaySinh'];
            $maNV = $_POST['maNV'];
            self::updateNV($maNV, $tenNV, $userName, $password, $maPhong, $gioiTinh, $ngaySinh,
                $maCV);
            $kq = self::getAll_NV_PB_CV();
            include 'views/NhanVien/index.php';
        }
    }
    public static  function delete(){
        if (isset($_GET['confirm'])) {
            $id = $_GET['id'];
            $kqOne = self::getOne_NV($id);
            $kq = self::getAll_NV();
            include 'views/NhanVien/index.php';
        }
        if (isset($_GET['id']) && !isset($_GET['confirm'])) {
            $id = $_GET['id'];
            self::delNV($id);
            $kq = self::getAll_NV_PB_CV();
            include 'views/NhanVien/index.php';
        }
    }
}