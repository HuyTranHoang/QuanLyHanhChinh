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
    <link rel="icon" href="../images/logo.png">
    <link rel="stylesheet" href="../css/fa/all.css">
    <link rel="stylesheet" href="../css/style.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,500;0,700;1,300&display=swap"
          rel="stylesheet">
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
                            //$q nhận 4 giá trị index, create, update, delete
                            $q = $_GET['q'];
                            PhongBanController::$q();
                            break;
                        case 'chucvu':
                            $q = $_GET['q'];
                            ChucVuController::$q();
                            break;
                        case 'nhanvien':
                            $q = $_GET['q'];
                            NhanVienController::$q();
                            break;
                        case 'ngayphep':
                            $q = $_GET['q'];
                            NgayPhepController::$q();
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
