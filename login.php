<?php
session_start();
include 'models/DB.class.php';
include 'models/User.class.php';

if (isset($_POST['userName']) && isset($_POST['password'])) {
    $user = new user();
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    $role = $user->checkUser($userName, $password);
    $_SESSION['role'] = $role;
    if ($role == 1) {
        header('location: admin/index.php');
        exit();
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
        <link rel="stylesheet" href="css/style.css">
        <script defer src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <title>Login</title>
    </head>
    <body>

    <nav class="navbar navbar-dark container-fluid" style="background-color: #FFB6C1">
        <div class="container position-relative">
            <a class="navbar-brand" href="#">
                <i class="fa-duotone fa-rocket-launch"></i>
                Aptech - C2206L
            </a>
            <h1 class="navbar-text position-absolute top-50 start-50 translate-middle text-white">Quản Lý Hành
                Chính</h1>
        </div>
    </nav>

    <div class="loginform mt-5">
        <div class="row">
            <div class="col">
                <img src="./images/loginForm.jpeg" class="img-fluid">
            </div>
            <div class="col">
                <form method="POST" action="">
                    <div class="my-3 row text-center text-pink">
                        <i class="fa-duotone fa-flower fs-3"></i>
                        <h3 class="mt-3 mb-5">Hello again!</h3>
                    </div>

                    <div class="form-floating mb-3 col-11">
                        <input type="text" class="form-control" id="userName" name="userName" placeholder="userName">
                        <label for="userName">Tài khoản</label>
                    </div>

                    <div class="form-floating mb-3 col-11">
                        <input type="password" class="form-control" id="password" name="password"
                               placeholder="password">
                        <label for="password">Mật khẩu</label>
                    </div>


                    <button class="btn btn-primary">Đăng nhập <i class="ps-3 fa-duotone fa-right-to-bracket"></i>
                    </button>

                    <div class="col">
                        <?php
                        if (isset($loginErr)) {
                            echo '<div class="text-danger mt-3">';
                            echo '<h6> <i class="fa-duotone fa-circle-xmark"></i> ' . $loginErr . '</h6>';
                            echo '</div>';
                        }
                        ?>
                    </div>

                    <div class="col mt-3">
                        <div class="footer-login">
                            <p class="text-muted">Chưa có tài khoản? <a href="#" class="text-decoration-none">Đăng ký</a> ngay</p>
                        </div>
                    </div>
            </div>
        </div>
    </div>


    </body>
    </html>

<?php
