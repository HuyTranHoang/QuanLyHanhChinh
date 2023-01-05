<?php

class ChucVuController extends ChucVu
{

    public static function index()
    {
        $kq = self::getAll_CV();
        include 'views/ChucVu/index.php';
    }

    public static function create()
    {
        if ((isset($_POST['addcv'])) && ($_POST['addcv'])) {
            $chucVu = $_POST['chucVu'];
            self::insertCV($chucVu);
        }
        $kq = self::getAll_cv();
        include 'views/ChucVu/index.php';
    }

    public static function update()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $kqOne = self::getOne_CV($id);
            $kq = self::getAll_CV();
            include 'views/ChucVu/index.php';
        }
        if (isset($_POST['maCV'])) {
            $maCV = $_POST['maCV'];
            $chucVu = $_POST['chucVu'];
            self::updateCV($maCV, $chucVu);
            $kq = self::getAll_CV();
            include 'views/ChucVu/index.php';
        }
    }

    public static function delete()
    {
        if (isset($_GET['confirm'])) {
            $id = $_GET['id'];
            $kqOne = self::getOne_CV($id);
            $kq = self::getAll_CV();
            include 'views/ChucVu/index.php';
        }
        if (isset($_GET['id']) && !isset($_GET['confirm'])) {
            $id = $_GET['id'];
            self::delCV($id);
            $kq = self::getAll_cv();
            include 'views/ChucVu/index.php';
        }
    }

}