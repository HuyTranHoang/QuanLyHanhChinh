<?php

class ChucVuController extends ChucVu
{

    public function index()
    {
        $kq = self::getAll();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $kqOne = self::getOne($id);
        }
        include 'views/ChucVu/index.php';
    }

    public function create()
    {
        if ((isset($_POST['addcv'])) && ($_POST['addcv'])) {
            $chucVu = $_POST['chucVu'];
            self::insertCV($chucVu);
        }
        $this->index();
    }

    public function update()
    {
        if (isset($_POST['maCV'])) {
            $maCV = $_POST['maCV'];
            $chucVu = $_POST['chucVu'];
            self::updateCV($maCV, $chucVu);
        }
        $this->index();
    }

    public function delete()
    {
        if (isset($_GET['id']) && !isset($_GET['confirm'])) {
            $id = $_GET['id'];
            self::deleteCV($id);
        }
        $this->index();
    }

    public function __call($methodName, $argument) {
        header('location: index.php?act=chucvu&q=index');
    }

}