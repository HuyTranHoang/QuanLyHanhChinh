<?php
session_start();
include '../includes/autoloader.inc.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="../images/logo.png">
    <link rel="stylesheet" href="../css/fa/all.css">
    <link rel="stylesheet" href="../css/style.min.css">
    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script defer src="../js/main.js"></script>
    <title>Quản lý hành chính</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <?php include 'views/_Layout/_Header.php'; ?>
    </div>
    <div class="row">
        <div class="col-2 fixed-top ps-0">
            <?php include_once 'views/_Layout/_Sidebar.php' ?>
        </div>
        <div class="col-8 offset-2">
            <?php
            if (isset($_SESSION['role'])) {
                if (isset($_GET['act']) && isset($_GET['q'])) {
                    switch ($_GET['act']) {
                        case 'phongban':
                            $pb = new PhongBanController();
                            $q = $_GET['q'];
                            ($q == 'index') ? $pb->index() : $pb->$q()->index();
                            break;
                        case 'chucvu':
                            $cv = new ChucVuController();
                            $q = $_GET['q'];
                            ($q == 'index') ? $cv->index() : $cv->$q()->index();
                            break;
                        case 'nhanvien':
                            $nv = new NhanVienController();
                            $q = $_GET['q'];
                            ($q == 'index') ? $nv->index() : $nv->$q()->index();
                            break;
                        case 'ngayphep':
                            $np = new NgayPhepController();
                            $q = $_GET['q'];
                            ($q == 'index') ? $np->index() : $np->$q()->index();
                            break;
                        case 'phieunghiphep':
//                            include 'views/phieunghiphep.php';
                            break;
                        case 'taophieu':
                            include 'views/taophieu.php';
                            break;
                        case 'thoat':
                            unset($_SESSION['role']);
                            header('location:../login.php');
                            exit();
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
        <?php include 'views/_Layout/_Footer.php'; ?>
    </div>
</div>
</body>
</html>
