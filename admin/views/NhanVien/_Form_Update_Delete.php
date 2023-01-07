<div class="mt-4">
    <div class="row">
        <div class="col"><h5>Thêm mới nhân viên</h5></div>
        <div class="col">
            <a href="index.php?act=nhanvien&q=index"><h5 class="float-end"><i class="fa-duotone fa-list"></i> Danh sách</h5></a>
        </div>
    </div>

    <hr class="mt-0">

    <form method="POST" action="index.php?act=nhanvien&q=update" enctype="multipart/form-data">

        <div class="mb-3 mt-3 row justify-content-center">
            <label for="tenNV" class="col-2 col-form-label offset-2">Tên nhân viên</label>
            <div class="col">
                <input type="text" class="form-control shadow-sm" id="tenNV" name="tenNV"
                       placeholder="Tên nhân viên..." value="<?= $kqOne['tenNV'] ?>">
            </div>
        </div>

        <div class="mb-3 mt-3 row justify-content-center">
            <label for="userName" class="col-2 col-form-label offset-2">Username</label>
            <div class="col">
                <input type="text" class="form-control shadow-sm" id="userName" name="userName"
                       placeholder="Username..." value="<?= $kqOne['userName'] ?>">
            </div>
        </div>

        <div class="mb-3 mt-3 row justify-content-center">
            <label for="password" class="col-2 col-form-label offset-2">Password</label>
            <div class="col">
                <input type="text" class="form-control shadow-sm" id="password" name="password"
                       placeholder="Password..." value="<?= $kqOne['password'] ?>">
            </div>
        </div>

        <div class="mb-3 mt-3 row justify-content-center">
            <label for="gioiTinh" class="col-2 col-form-label offset-2">Giới tính</label>
            <div class="col">
                <select class="form-select shadow-sm w-25" name="gioiTinh" id="gioiTinh">
                    <?php
                    if ($kqOne['gioiTinh' == '0']) {
                        echo '<option selected value="0">Nam</option>
                                <option value="1">Nữ</option>';
                    } else {
                        echo '<option  value="0">Nam</option>
                                <option selected value="1">Nữ</option>';
                    }
                    ?>

                </select>
            </div>
        </div>

        <div class="mb-3 mt-3 row justify-content-center">
            <label for="ngaySinh" class="col-2 col-form-label offset-2">Ngày sinh</label>
            <div class="col">
                <input type="date" class="form-control shadow-sm w-25" id="ngaySinh" name="ngaySinh"
                       value="<?= $kqOne['ngaySinh'] ?>">
            </div>
        </div>

        <div class="mb-3 mt-3 row justify-content-center">
            <label for="maPhong" class="col-2 col-form-label offset-2">Phòng ban</label>
            <div class="col">
                <select class="form-select shadow-sm w-25" name="maPhong" id="maPhong">
                    <?php
                    $pb = new PhongBanController();
                    foreach ($pb->getAll() as $item) {
                        echo '<option ';
                        echo ($kqOne['maPhong'] == $item['maPhong']) ? 'selected ' : false;
                        echo 'value="' . $item['maPhong'] . '">' . $item['tenPhong'] . '</option>';
                    }
                    ?>
                </select>
            </div>
        </div>

        <div class="mb-3 mt-3 row justify-content-center">
            <label for="maCV" class="col-2 col-form-label offset-2">Chức vụ</label>
            <div class="col">
                <select class="form-select shadow-sm w-25" name="maCV" id="maCV">
                    <?php
                    $cv = new ChucVuController();
                    foreach ($cv->getAll() as $item) {
                        echo '<option ';
                        echo ($kqOne['maCV'] == $item['maCV']) ? 'selected ' : false;
                        echo 'value="' . $item['maCV'] . '">' . $item['chucVu'] . '</option>';
                    }
                    ?>
                </select>
            </div>
        </div>

        <div class="mb-3 mt-3 row justify-content-center">
            <label for="hinh" class="col-2 col-form-label offset-2">Avatar</label>
            <div class="col">
                <input type="file" class="form-control shadow-sm w-50" id="hinh" name="hinh">
            </div>
        </div>

        <input type="hidden" name="maNV" value="<?= $kqOne['maNV'] ?>">

        <div class="mb-3 row offset-2">
            <div class="col-6">
                <?php echo (isset($_GET['confirm'])) ? false : '<button type="submit" class="btn text-light d-inline-block btn-sakura">Cập nhật</button>'; ?>
            </div>
            <div class="col-6">
                <?php
                if (isset($_GET['confirm'])) {
                    echo '<h6>Bạn có chắc chắn muốn xóa nhân viên trên?</h6>';
                    echo '<div class="row">';
                    echo '<div class="col">';
                    echo '<a href="index.php?act=nhanvien&q=delete&id=' . $kqOne['maNV'] . '" class="btn btn-sakura text-white">Xác nhận</a>';
                    echo '</div>';
                    echo '<div class="col">';
                    echo '<a href="index.php?act=nhanvien&q=index" class="btn btn-sakura text-white">Quay lại</a>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </form>
</div>
