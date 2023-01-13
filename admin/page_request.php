<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
    <title>Ajax example 456</title>
</head>
<body>

<?php
include_once '../models/DB.class.php';
include_once '../models/PhongBan.class.php';
?>


<form action="">
    <div class="form-group">
        Phòng Ban
        <select name="sphong" class="form-control">
            <?php
            $pb = new PhongBan();
            $dspb = $pb->getAll();
            foreach ($dspb as $p) {
                echo '<option value = '.$p['maPhong'].' >'.$p['tenPhong'].'</option>';
            }
            ?>
        </select>
    </div>

    <div class="form-group">
        <table id="dsNV" class="table table-bordered"></table>
    </div>

</form>

</body>

<script>
    window.onload = function() {
        let pb = document.getElementsByName('sphong');
        let dsNV = document.getElementById('dsNV');
        pb[0].onchange = function (e) {
            let id = e.currentTarget.value; // Lấy mã pb
            const xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if(this.status === 200 && this.readyState === 4) {
                    let data = JSON.parse(this.responseText);
                    let strText = '<tr><th>Ma NV</th><th>Ten NV</th><th>Phong</th><th>Chuc Vu</th></tr>';
                    if (data.length > 0 ) {
                        data.forEach((item) => {
                            strText += '<tr>';
                            strText += '<td>' + item.maNV + '</td>';
                            strText += '<td>' + item.tenNV + '</td>';
                            strText += '<td>' + item.tenPhong + '</td>';
                            strText += '<td>' + item.chucVu + '</td>';
                            strText += '<tr>';
                        })
                    } else {
                        strText += '<tr><td colspan="4">Không có nhân viên nào thuộc phòng ban này</td></tr>'
                    }

                    dsNV.innerHTML = strText;

                }
            };

            xmlhttp.open('get','page_reponse.php?id='+id,true);
            xmlhttp.send(); // tt readystate bắt đầu thay đổi => sự kiện onreadystatechange xảy ra

        }
    }
</script>
</html>