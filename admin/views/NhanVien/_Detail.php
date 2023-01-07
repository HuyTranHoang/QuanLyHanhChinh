<div class="mt-4">
    <div class="row">
        <div class="col"><h5>Chi tiết nhân viên</h5></div>
        <div class="col">
            <a href="index.php?act=nhanvien&q=index"><h5 class="float-end"><i class="fa-duotone fa-list"></i> Danh sách</h5></a>
        </div>
    </div>

    <hr class="mt-0">
    <div class="row">
        <div class="col-5 border-end">
            <div class="card">
                <img src="../images/hinhNV/<?= $kqOne['hinh'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><i class="fa-regular fa-id-card me-2"></i><?= $kqOne['tenNV'] ?></h5>
                    <h6 class="card-subtitle mb-2 text-danger"><?= $kqOne['chucVu'] ?></h6>
                </div>
            </div>
        </div>
        <div class="col-7">
            <h5>User <small class="text-muted"><?= $kqOne['userName'] ?></small></h5>
            <h5>Password: <small class="text-muted"><?= $kqOne['password'] ?></small></h5>
            <h5>Giới tính: <small class="text-muted"><?= ($kqOne['gioiTinh'])? 'Nữ' : 'Nam' ?></small></h5>
            <h5>Ngày sinh: <small class="text-muted"><?= date('d-m-Y',strtotime($kqOne['ngaySinh'])) ?></small></h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin elementum magna nec convallis vehicula. Quisque nec neque velit. In at felis sit amet justo faucibus pretium et euismod turpis. Etiam massa dui, facilisis in gravida non, condimentum nec diam. Mauris malesuada ultrices eros vitae lacinia. Fusce eget scelerisque lectus, id.</p>
        </div>
    </div>
</div>

<!--Ngày trong mysql có dạng năm tháng ngày,
nên để in ra cho đẹp thì nên dùng
date("d-m-Y",strtotime($item['ngaysinh]))-->