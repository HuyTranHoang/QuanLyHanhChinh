<?php

class NgayPhepController extends NgayPhep
{

    public static function index()
    {
        $kq = self::getAll_NP_NV();
        include 'views/NgayPhep/index.php';
    }

    public static function create()
    {
        if ((isset($_POST['addnp'])) && ($_POST['addnp'])) {
            $maNV = $_POST['maNV'];
            $soNgayHienTai = 0;
            $tongSoNgay = $_POST['tongSoNgay'];
            $nam = $_POST['nam'];
            $ghiChu = "";
            self::insertNP($maNV, $soNgayHienTai, $tongSoNgay, $nam, $ghiChu);
            header('location: index.php?act=ngayphep&q=index');
        }
        include 'views/NgayPhep/index.php';

    }

    public static function update()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $kqOne = self::getOne_NP_NV($id);
            $kq = self::getAll_NP_NV();
            include 'views/NgayPhep/index.php';
        }
        if (isset($_POST['maPhep'])) {
            $maNV = $_POST['maNV'];
            $soNgayHienTai = $_POST['soNgayHienTai'];
            $tongSoNgay = $_POST['tongSoNgay'];
            $nam = $_POST['nam'];
            $ghiChu = $_POST['ghiChu'];
            $maPhep = $_POST['maPhep'];
            self::updateNP($maPhep, $maNV, $soNgayHienTai, $tongSoNgay, $nam, $ghiChu);
            $kq = self::getAll_NP_NV();
            include 'views/NgayPhep/index.php';
        }
    }
    public static function delete()
    {
        if (isset($_GET['confirm'])) {
            $id = $_GET['id'];
            $kqOne = self::getOne_NP_NV($id);
            $kq = self::getAll_NP_NV();
            include 'views/NgayPhep/index.php';
        }
        if (isset($_GET['id']) && !isset($_GET['confirm'])) {
            $id = $_GET['id'];
            self::delNP($id);
            $kq = self::getAll_NP_NV();
            include 'views/NgayPhep/index.php';
        }
    }

}