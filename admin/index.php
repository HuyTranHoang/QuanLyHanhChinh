<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.2/css/all.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,500;0,700;1,300&display=swap" rel="stylesheet">
    <script defer src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <title>Admin</title>
</head>

<body>


<div class="container-fluid">
    <div class="row">
        <?php include 'view/header.php'; ?>
    </div>

    <div class="row">
        <div class="col-2 fixed-top" style="margin-left: -12px"><?php include_once 'view/sidebar.php' ?></div>
        <div class="col-10 offset-2">
            <?php
            if (isset($_SESSION['role']) && $_SESSION['role'] == '1') {
                include_once '../models/db.php';
                include_once '../models/phongban.php';
                include_once '../models/chucvu.php';
                connectDB();


                if (isset($_GET['act'])) {
                    switch ($_GET['act']) {
                        case 'phongban':
                            $kq = getAll_PB();
                            include 'view/phongban.php';
                            break;
                        case 'addpb':
                            if ((isset($_POST['addpb'])) && ($_POST['addpb'])) {
                                $tenPhong = $_POST['tenPhong'];
                                $vietTat = $_POST['vietTat'];
                                $ghiChu = $_POST['ghiChu'];
                                insertPB($tenPhong,$vietTat,$ghiChu);
                            }
                            $kq = getAll_PB();
                            include 'view/phongban.php';
                            break;
                        case 'updatepb':
                            if (isset($_GET['id'])) {
                                $id = $_GET['id'];
                                $kqOne = getOne_PB($id);
                                $kq = getAll_PB();
                                include 'view/phongban_update.php';
                            }
                            if (isset($_POST['maPhong'])) {
                                $maPhong = $_POST['maPhong'];
                                $tenPhong = $_POST['tenPhong'];
                                $vietTat = $_POST['vietTat'];
                                $ghiChu = $_POST['ghiChu'];
                                updatePB($maPhong, $tenPhong, $vietTat, $ghiChu);
                                $kq = getAll_PB();
                                include 'view/phongban.php';
                            }
                            break;
                        case 'delpb':
                            if (isset($_GET['id'])) {
                                $id = $_GET['id'];
                                delPB($id);
                                $kq = getAll_PB();
                                include 'view/phongban.php';
                            }
                            break;
                        case 'chucvu':
                            $kq = getAll_cv();
                            include 'view/chucvu.php';
                            break;
                        case 'addcv':
                            if ((isset($_POST['addcv'])) && ($_POST['addcv'])) {
                                $chucVu = $_POST['chucVu'];
                                insertCV($chucVu);
                            }
                            $kq = getAll_cv();
                            include 'view/chucvu.php';
                            break;
                        case 'updatecv':
                            if (isset($_GET['id'])) {
                                $id = $_GET['id'];
                                $kqOne = getOne_CV($id);
                                $kq = getAll_CV();
                                include 'view/chucvu_update.php';
                            }
                            if (isset($_POST['maCV'])) {
                                $maCV = $_POST['maCV'];
                                $chucVu = $_POST['chucVu'];
                                updateCV($maCV, $chucVu);
                                $kq = getAll_CV();
                                include 'view/chucvu.php';
                            }
                            break;
                        case 'delcv':
                            if (isset($_GET['id'])) {
                                $id = $_GET['id'];
                                delCV($id);
                                $kq = getAll_cv();
                                include 'view/chucvu.php';
                            }
                            break;
                        case 'nhanvien':
                            include 'view/nhanvien.php';
                            break;
                        case 'ngayphep':
                            include 'view/ngayphep.php';
                            break;
                        case 'phieunghiphep':
                            include 'view/phieunghiphep.php';
                            break;
                        case 'thoat':
                            if (isset($_SESSION['role'])) {
                                unset($_SESSION['role']);
                            }
                            header('location:../login.php');
                            break;
                        default:
                            include 'view/home.php';
                            break;
                    }
                } else {
                    include 'view/home.php';
                }
            } else {
                header('location: ../login.php');
            }
            ?>
        </div>
    </div>

    <div class="row">
        <?php include 'view/footer.php'; ?>
    </div>
</div>

</body>
</html>
