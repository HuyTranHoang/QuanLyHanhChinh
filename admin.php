<?php
    include_once 'db.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.2/css/all.css">
    <link rel="stylesheet" href="./css/style.css">
    <script defer src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <title>Admin</title>
</head>
<body>

<?php
    if (isset($_POST['userName']) && isset($_POST['password'])) {
        $conn = connectDB();
        $user = [];

        $query ="select * from nhanvien where userName= ? and password = ?";
        $pre = $conn->prepare($query);
        $pre->bind_param("ss",$userName,$password);
        $userName = $_POST['userName'];
        $password = $_POST['password'];
        $t = $pre->execute();
        $result = $pre->get_result();
        if (mysqli_num_rows($result) == 0 ) {
            header("Location:login.php?p=invalid");
        }
//        while ( $arr = $result->fetch_row()){
//            $user = $arr;
//        }
        $user = $result->fetch_assoc();
        $conn->close();

        echo '<pre>';
        print_r($user);
        echo '</pre>';

    } else {
        header("Location:login.php?p=invalid");
    }


    echo '<h1 class="text-primary">Welcome back '.$user['tenNV'].'</h1>'

?>

</body>
</html>