<?php

    include_once '../model/db.php';
    include_once '../model/phongban.php';
    connectDB();
    include  'view/header.php';

    if (isset($_GET['act'])) {
        switch ($_GET['act']) {
            case 'phongban':
                $kq = getAll_pb();
                include 'view/phongban.php';
                break;
            case 'delpb':
                if(isset($_GET['id'])) {
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
                include 'view/thoat.php';
                break;
            default:
                include  'view/home.php';
                break;
        }
    } else {
        include  'view/home.php';
    }

    include 'view/footer.php';
?>


<!---->
<!---->
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
//?>
