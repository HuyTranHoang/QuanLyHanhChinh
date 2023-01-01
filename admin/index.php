<?php
session_start();
include '../includes/autoloader.inc.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/fa/all.css">
    <link rel="stylesheet" href="../css/style.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,500;0,700;1,300&display=swap"
          rel="stylesheet">
    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script defer src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script defer src="../js/main.js"></script>
    <title>Quản lý hành chính</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <?php include 'views/header.php'; ?>
    </div>
    <div class="row">
        <div class="col-2 fixed-top ps-0">
            <?php include_once 'views/sidebar.php' ?>
        </div>
        <div class="col-8 offset-2">
            <?php
            if (isset($_SESSION['role'])) {
                if (isset($_GET['act'])) {
                    switch ($_GET['act']) {
                        case 'phongban':
                            $pb = new PhongBan();
                            $kq = $pb->getAll_PB();
                            include 'views/phongban.php';
                            break;
                        case 'addpb':
                            $pb = new PhongBan();
                            if ((isset($_POST['addpb'])) && ($_POST['addpb'])) {
                                $tenPhong = $_POST['tenPhong'];
                                $vietTat = $_POST['vietTat'];
                                $ghiChu = $_POST['ghiChu'];
                                $pb->insertPB($tenPhong, $vietTat, $ghiChu);
                            }
                            $kq = $pb->getAll_PB();
                            include 'views/phongban.php';
                            break;
                        case 'updatepb':
                            $pb = new PhongBan();
                            if (isset($_GET['id'])) {
                                $id = $_GET['id'];
                                $kqOne = $pb->getOne_PB($id);
                                $kq = $pb->getAll_PB();
                                include 'views/phongban_update.php';
                            }
                            if (isset($_POST['maPhong'])) {
                                $maPhong = $_POST['maPhong'];
                                $tenPhong = $_POST['tenPhong'];
                                $vietTat = $_POST['vietTat'];
                                $ghiChu = $_POST['ghiChu'];
                                $pb->updatePB($maPhong, $tenPhong, $vietTat, $ghiChu);
                                $kq = $pb->getAll_PB();
                                include 'views/phongban.php';
                            }
                            break;
                        case 'delpb':
                            $pb = new PhongBan();
                            if (isset($_GET['id'])) {
                                $id = $_GET['id'];
                                $pb->delPB($id);
                                $kq = $pb->getAll_PB();
                                include 'views/phongban.php';
                            }
                            break;
                        case 'chucvu':
                            $cv = new ChucVu();
                            $kq = $cv->getAll_CV();
                            include 'views/chucvu.php';
                            break;
                        case 'addcv':
                            $cv = new ChucVu();
                            if ((isset($_POST['addcv'])) && ($_POST['addcv'])) {
                                $chucVu = $_POST['chucVu'];
                                $cv->insertCV($chucVu);
                            }
                            $kq = $cv->getAll_cv();
                            include 'views/chucvu.php';
                            break;
                        case 'updatecv':
                            $cv = new ChucVu();
                            if (isset($_GET['id'])) {
                                $id = $_GET['id'];
                                $kqOne = $cv->getOne_CV($id);
                                $kq = $cv->getAll_CV();
                                include 'views/chucvu_update.php';
                            }
                            if (isset($_POST['maCV'])) {
                                $maCV = $_POST['maCV'];
                                $chucVu = $_POST['chucVu'];
                                $cv->updateCV($maCV, $chucVu);
                                $kq = $cv->getAll_CV();
                                include 'views/chucvu.php';
                            }
                            break;
                        case 'delcv':
                            $cv = new ChucVu();
                            if (isset($_GET['id'])) {
                                $id = $_GET['id'];
                                $cv->delCV($id);
                                $kq = $cv->getAll_cv();
                                include 'views/chucvu.php';
                            }
                            break;
                        case 'nhanvien':
                            $nv = new NhanVien();
                            if ((isset($_POST['addnv'])) && ($_POST['addnv'])) {
                                $tenNV = $_POST['tenNV'];
                                $userName = $_POST['userName'];
                                $password = $_POST['password'];
                                $maPhong = $_POST['maPhong'];
                                $gioiTinh = $_POST['gioiTinh'];
                                $ngaySinh = $_POST['ngaySinh'];
                                $maCV = $_POST['maCV'];
                                $nv->insertNV($tenNV, $userName, $password, $maPhong, $gioiTinh, $ngaySinh, $maCV);
                            }
                            $kq = $nv->getAll_NV_PB_CV();
                            include 'views/nhanvien.php';
                            break;
                        case 'addnvform':
                            include 'views/nhanvien_add.php';
                            break;
                        case 'updatenv':
                            $nv = new NhanVien();
                            if (isset($_GET['id'])) {
                                $id = $_GET['id'];
                                $kqOne = $nv->getOne_NV($id);
                                $kq = $nv->getAll_NV();
                                include 'views/nhanvien_update.php';
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
                                $nv->updateNV($maNV, $tenNV, $userName, $password, $maPhong, $gioiTinh, $ngaySinh,
                                    $maCV);
                                $kq = $nv->getAll_NV_PB_CV();
                                include 'views/nhanvien.php';
                            }
                            break;
                        case 'delnv':
                            $nv = new NhanVien();
                            if (isset($_GET['id'])) {
                                $id = $_GET['id'];
                                $nv->delNV($id);
                                $kq = $nv->getAll_NV_PB_CV();
                                include 'views/nhanvien.php';
                            }
                            break;
                        case 'ngayphep':
                            $np = new NgayPhep();
                            if ((isset($_POST['addnp'])) && ($_POST['addnp'])) {
                                $maNV = $_POST['maNV'];
                                $soNgayHienTai = 0;
                                $tongSoNgay = $_POST['tongSoNgay'];
                                $nam = $_POST['nam'];
                                $ghiChu = "";
                                $np->insertNP($maNV, $soNgayHienTai, $tongSoNgay, $nam, $ghiChu);
                            }
                            $kq = $np->getAll_NP_NV();
                            include 'views/ngayphep.php';
                            break;
                        case 'addnpform':
                            include 'views/ngayphep_add.php';
                            break;
                        case 'updatenp':
                            $np = new NgayPhep();
                            if (isset($_GET['id'])) {
                                $id = $_GET['id'];
                                $kqOne = $np->getOne_NP_NV($id);
                                $kq = $np->getAll_NP_NV();
                                include 'views/ngayphep_update.php';
                            }
                            if (isset($_POST['maPhep'])) {
                                $maNV = $_POST['maNV'];
                                $soNgayHienTai = $_POST['soNgayHienTai'];
                                $tongSoNgay = $_POST['tongSoNgay'];
                                $nam = $_POST['nam'];
                                $ghiChu = $_POST['ghiChu'];
                                $maPhep = $_POST['maPhep'];
                                $np->updateNP($maPhep, $maNV, $soNgayHienTai, $tongSoNgay, $nam, $ghiChu);
                                $kq = $np->getAll_NP_NV();
                                include 'views/ngayphep.php';
                            }
                            break;
                        case 'delnp':
                            $np = new NgayPhep();
                            if (isset($_GET['id'])) {
                                $id = $_GET['id'];
                                $np->delNP($id);
                                $kq = $np->getAll_NP_NV();
                                include 'views/ngayphep.php';
                            }
                            break;
                        case 'phieunghiphep':
                            include 'views/phieunghiphep.php';
                            break;
                        case 'thoat':
                            if (isset($_SESSION['role'])) {
                                unset($_SESSION['role']);
                            }
                            header('location:../login.php');
                            exit();
                            break;
                        default:
                            include 'views/home.php';
                            break;
                    }
                } else {
                    include 'views/home.php';
                }
            } else {
                header('location: ../login.php');
                exit();
            }
            ?>
        </div>
    </div>
    <div class="row">
        <?php include 'views/footer.php';
        ?>
    </div>
</div>
</body>
</html>
