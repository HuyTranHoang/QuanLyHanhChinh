<?php

class ChucVuController extends ChucVu
{

    public function myCallback($item) {
        $item();
    }
    public function index()
    {
        $kq = $this->getAll_CV();
        include 'views/ChucVu/index.php';
    }

    public function create()
    {
        if ((isset($_POST['addcv'])) && ($_POST['addcv'])) {
            $chucVu = $_POST['chucVu'];
            $this->insertCV($chucVu);
        }
        $kq = $this->getAll_cv();
        include 'views/ChucVu/index.php';
    }

    public function update()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $kqOne = $this->getOne_CV($id);
            $kq = $this->getAll_CV();
            include 'views/ChucVu/index.php';
        }
        if (isset($_POST['maCV'])) {
            $maCV = $_POST['maCV'];
            $chucVu = $_POST['chucVu'];
            $this->updateCV($maCV, $chucVu);
            $kq = $this->getAll_CV();
            include 'views/ChucVu/index.php';
        }
    }

    public function delete()
    {
        if (isset($_GET['confirm'])) {
            $id = $_GET['id'];
            $kqOne = $this->getOne_CV($id);
            $kq = $this->getAll_CV();
            include 'views/ChucVu/index.php';
        }
        if (isset($_GET['id']) && !isset($_GET['confirm'])) {
            $id = $_GET['id'];
            $this->delCV($id);
            $kq = $this->getAll_cv();
            include 'views/ChucVu/index.php';
        }
    }

}