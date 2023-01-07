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

    public function create(): static
    {
        if ((isset($_POST['addcv'])) && ($_POST['addcv'])) {
            $chucVu = $_POST['chucVu'];
            self::insertCV($chucVu);
        }
        return $this;
    }

    public function update(): static
    {
        if (isset($_POST['maCV'])) {
            $maCV = $_POST['maCV'];
            $chucVu = $_POST['chucVu'];
            self::updateCV($maCV, $chucVu);
        }
        return $this;
    }

    public function delete(): static
    {
        if (isset($_GET['id']) && !isset($_GET['confirm'])) {
            $id = $_GET['id'];
            self::deleteCV($id);
        }
        return $this;
    }

    public function __call($methodName, $argument) {
        header('location: index.php?act=chucvu&q=index');
    }

}