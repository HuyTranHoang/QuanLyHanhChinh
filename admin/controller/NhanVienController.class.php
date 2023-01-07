<?php

class NhanVienController extends NhanVien
{
    public function index() {
        $kq = self::getAll();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $kqOne = self::getOne($id);
        }
        include 'views/NhanVien/index.php';
    }
    public function create() {
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
            move_uploaded_file($tmpTenHinh,'../images/HinhNV/'.$tenHinh);
            self::insertNV($tenNV, $userName, $password, $maPhong, $gioiTinh, $ngaySinh, $maCV,$tenHinh);
            header('location: index.php?act=nhanvien&q=index');
        }
        return $this;
    }
    public function update() {
        if (isset($_POST['maNV'])) {
            $maCV = $_POST['maCV'];
            $tenNV = $_POST['tenNV'];
            $userName = $_POST['userName'];
            $password = $_POST['password'];
            $maPhong = $_POST['maPhong'];
            $gioiTinh = $_POST['gioiTinh'];
            $ngaySinh = $_POST['ngaySinh'];
            $maNV = $_POST['maNV'];
            $tenHinh = $_FILES['hinh']['name'];
            $sizeHinh = $_FILES['hinh']['size'];
            $tmpTenHinh = $_FILES['hinh']['tmp_name'];
            move_uploaded_file($tmpTenHinh,'../images/HinhNV/'.$tenHinh);
            self::updateNV($maNV, $tenNV, $userName, $password, $maPhong, $gioiTinh, $ngaySinh,
                $maCV,$tenHinh);
        }
        return $this;
    }
    public  function delete(){
        if (isset($_GET['id']) && !isset($_GET['confirm'])) {
            $id = $_GET['id'];
            self::deleteNV($id);
        }
        return $this;
    }

    public  function detail(){
        return $this;
    }

    //Gọi khi bên ngoài gọi hàm không tồn tại hoặc private
    public function __call($methodName, $argument) {
        header('location: index.php?act=nhanvien&q=index');
    }
}