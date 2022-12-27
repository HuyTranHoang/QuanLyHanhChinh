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
    <script defer src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <title>Admin</title>
</head>

<body>
<nav class="navbar navbar-dark bg-secondary container-fluid">
    <div class="container position-relative p-2">
        <a class="navbar-brand" href="#">
            <img src="../images/logo.jpg" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
            Aptech - C2206L - Huy Nè
        </a>
        <h1 class="navbar-text position-absolute top-50 start-50 translate-middle text-white">Quản Lý Hành Chính</h1>
    </div>
</nav>


<?php

session_start();
if (isset($_SESSION['role']) && $_SESSION['role'] == '1') {
    include_once '../model/db.php';
    include_once '../model/phongban.php';
    connectDB();


    if (isset($_GET['act'])) {
        switch ($_GET['act']) {
            case 'phongban':
                $kq = getAll_pb();
                include 'view/phongban.php';
                break;
            case 'delpb':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    delpb($id);
                    $kq = getAll_pb();
                    include 'view/phongban.php';
                }
                break;
            case 'chucvu':
                include 'view/chucvu.php';
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
</body>
</html>

<?php
//    if (isset($_POST['userName']) && isset($_POST['password'])) {
//        $conn = connectDB();
//        $user = [];
//
//        $query ="select * from nhanvien where userName= ? and password = ?";
//        $pre = $conn->prepare($query);
//        $pre->bind_param("ss",$userName,$password);
//        $userName = $_POST['userName'];
//        $password = $_POST['password'];
//        $t = $pre->execute();
//        $result = $pre->get_result();
//        if (mysqli_num_rows($result) == 0 ) {
//            header("Location: ../login.php?p=invalid");
//            exit;
//        }
//        while ( $arr = $result->fetch_row()){
//            $user = $arr;
//        }
//        $user = $result->fetch_assoc();
//        $conn->close();
//
//        echo '<pre>';
//        print_r($user);
//        echo '</pre>';
//
//    } else {
//        header("Location: ../login.php?p=invalid");
//        exit;
//    }
//
//
//    echo '<h1 class="text-primary">Welcome back '.$user['tenNV'].'</h1>'
//

?>
