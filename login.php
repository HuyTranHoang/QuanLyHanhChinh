<?php
session_start();
include 'model/db.php';
include 'model/user.php';

if (isset($_POST['userName']) && isset($_POST['password'])) {
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    $role = checkUser($userName, $password);
    $_SESSION['role'] = $role;
    if ($role == 1) {
        header('location: admin/index.php');
    } else {
        $loginErr = 'Sai tên tài khoản hoặc mật khẩu';
    }

}
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
        <title>Login</title>
    </head>
    <body>

    <nav class="navbar navbar-dark bg-secondary container-fluid">
        <div class="container position-relative">
            <a class="navbar-brand" href="#">
                <img src="./images/logo.jpg" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                Aptech - C2206L - Huy Nè
            </a>
            <h1 class="navbar-text position-absolute top-50 start-50 translate-middle text-white">Quản Lý Hành
                Chính</h1>
        </div>
    </nav>

    <div class="container">
        <form method="POST" action="">
            <div class="mb-3 mt-3 row">
                <label for="userName" class="col-sm-1 col-form-label">User Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control shadow-sm" id="userName" name="userName"
                           placeholder="User Name...">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="password" class="col-sm-1 col-form-label">Password</label>
                <div class="col-sm-6">
                    <input type="password" class="form-control shadow-sm" id="password" name="password"
                           placeholder="Password...">
                </div>
            </div>
            <div class="col-sm-6 offset-sm-1">
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="rememberInfo" name="rememberInfo">
                    <label class="form-check-label" for="rememberInfo">Ghi nhớ</label>
                </div>
                <button type="submit" class="btn btn-primary">Đăng nhập</button>
                <?php
                if (isset($loginErr)) {
                    echo '<div class="text-danger mt-3">';
                    echo '<h6> <i class="fa-duotone fa-circle-xmark"></i> ' . $loginErr . '</h6>';
                    echo '</div>';
                }
                ?>
            </div>

        </form>


    </div>

    </body>
    </html>

<?php
