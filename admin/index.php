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
    <link rel="stylesheet" href="../css/toastr.css">
    <script defer src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.3/toastr.min.js"></script>
    <script defer src="../js/main.js"></script>


    <title>Quản lý hành chính</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <?php include 'views/_Layout/_Header.php'; ?>
    </div>
    <div class="row" style="min-height: 87vh">
        <div class="col-2 fixed-top ps-0">
            <?php ($_SESSION['role'] == 1) ? include_once 'views/_Layout/_Sidebar.php' : include_once 'views/_Layout/_Sidebar_Member.php' ?>
        </div>
        <div class="col-9 offset-2">
            <?php
            if (isset($_SESSION['role'])) {
                if (isset($_GET['act']) && isset($_GET['q'])) {
                    $q = $_GET['q'];
                    switch ($_GET['act']) {
                        case 'phongban':
                            $pb = new PhongBanController();
                            ($q == 'index') ? $pb->$q() : $pb->$q()->index();
                            break;
                        case 'chucvu':
                            (new ChucVuController()) -> $q();
                            break;
                        case 'nhanvien':
                            (new NhanVienController()) -> $q();
                            break;
                        case 'ngayphep':
                            (new NgayPhepController()) -> $q();
                            break;
                        case 'phieunghiphep':
                            $pnp = new PhieuNghiController();
                            $pnp->$q();
                            break;
                        case 'taophieu':
                            $tp = new PhieuNghiController();
                            $tp->$q();
                            break;
                        case 'thoat':
                            unset($_SESSION['role']);
                            unset($_SESSION['userID']);
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
