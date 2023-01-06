<?php

class PhongBanController extends PhongBan
{

    public static function index() {
        $kq = self::getAll();
        include 'views/PhongBan/index.php';
    }

    public static function create() {
        if ((isset($_POST['addpb'])) && ($_POST['addpb'])) {
            $tenPhong = $_POST['tenPhong'];
            $vietTat = $_POST['vietTat'];
            $ghiChu = $_POST['ghiChu'];
            self::insertPB($tenPhong, $vietTat, $ghiChu);
        }
        $kq = self::getAll();
        include 'views/PhongBan/index.php';
    }

    public static function update() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $kqOne = self::getOne($id);
            $kq = self::getAll();
            include 'views/PhongBan/index.php';
        }
        if (isset($_POST['maPhong'])) {
            $maPhong = $_POST['maPhong'];
            $tenPhong = $_POST['tenPhong'];
            $vietTat = $_POST['vietTat'];
            $ghiChu = $_POST['ghiChu'];
            self::updatePB($maPhong, $tenPhong, $vietTat, $ghiChu);
            $kq = self::getAll();
            include 'views/PhongBan/index.php';
        }
    }

    public static  function delete(){
        if (isset($_GET['confirm'])) {
            $id = $_GET['id'];
            $kqOne = self::getOne($id);
            $kq = self::getAll();
            include 'views/PhongBan/index.php';
        }
        if (isset($_GET['id']) && !isset($_GET['confirm'])) {
            $id = $_GET['id'];
            self::deletePB($id);
            $kq = self::getAll();
            include 'views/PhongBan/index.php';
        }
    }

}