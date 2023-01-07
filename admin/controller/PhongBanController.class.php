<?php

class PhongBanController extends PhongBan
{
    public function index() {
        $kq = self::getAll();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $kqOne = self::getOne($id);
        }
        include 'views/PhongBan/index.php';
    }

    public function create(): static
    {
        if ((isset($_POST['addpb'])) && ($_POST['addpb'])) {
            $tenPhong = $_POST['tenPhong'];
            $vietTat = $_POST['vietTat'];
            $ghiChu = $_POST['ghiChu'];
            self::insertPB($tenPhong, $vietTat, $ghiChu);
        }
        return $this;
    }

    public function update(): static
    {
        if (isset($_POST['maPhong'])) {
            $maPhong = $_POST['maPhong'];
            $tenPhong = $_POST['tenPhong'];
            $vietTat = $_POST['vietTat'];
            $ghiChu = $_POST['ghiChu'];
            self::updatePB($maPhong, $tenPhong, $vietTat, $ghiChu);
        }
        return $this;
    }

    public  function delete(): static
    {
        if (isset($_GET['id']) && !isset($_GET['confirm'])) {
            $id = $_GET['id'];
            self::deletePB($id);
        }
        return $this;
    }

    public function __call($methodName, $argument) {
        header('location: index.php?act=phongban&q=index');
    }

}