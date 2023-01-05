<div class="mt-4">
    <div class="row">
        <div class="col"><h5>Thêm mới ngày phép</h5></div>
        <div class="col">
            <a href="index.php?act=ngayphep&q=index"><h5 class="float-end"><i class="fa-duotone fa-list"></i> Danh sách</h5></a>
        </div>
    </div>

    <hr class="mt-0">

    <form method="POST" action="index.php?act=ngayphep&q=update" class="">

        <div class="mb-3 mt-3 row justify-content-center">
            <label for="maPhong" class="col-2 col-form-label offset-2">Năm</label>
            <div class="col">
                <select class="form-select shadow-sm w-25" name="nam" id="nam">
                    <?php
                    $year = [2022, 2023];
                    foreach ($year as $item) {
                        echo '<option value="' . $item . '"';
                        echo ($item == $kqOne['nam']) ? ' selected' : false;
                        echo '>' . $item . '</option>';
                    }
                    ?>
                </select>
            </div>
        </div>

        <div class="mb-3 mt-3 row justify-content-center">
            <label for="maPhong" class="col-2 col-form-label offset-2">Phòng ban</label>
            <div class="col">
                <select class="form-select shadow-sm w-25" name="maPhong" id="maPhong">
                    <?php
                    $pb = new PhongBan();
                    $kqpb = $pb->getAll_PB();
                    foreach ($kqpb as $item) {
                        echo '<option value="' . $item['maPhong'] . '"';
                        echo ($item['maPhong'] == $kqOne['maPhong']) ? ' selected' : false;
                        echo '>' . $item['tenPhong'] . '</option>';
                    }
                    ?>
                </select>
            </div>
        </div>

        <div class="mb-3 mt-3 row justify-content-center">
            <label for="maNV" class="col-2 col-form-label offset-2">Nhân viên</label>
            <div class="col">
                <select class="form-select shadow-sm w-50" name="maNV" id="maNV">
                    <?php
                    $nv = new NhanVien();
                    $kqnv = $nv->getAll_NV_from_PB(1);
                    foreach ($kqnv as $item) {
                        echo '<option value="' . $item['maNV'] . '"';
                        echo ($item['maNV'] == $kqOne['maNV']) ? ' selected' : false;
                        echo '>' . $item['tenNV'] . '</option>';
                    }
                    ?>
                </select>
            </div>
        </div>


        <div class="mb-3 mt-3 row justify-content-center">
            <label for="tongSoNgay" class="col-2 col-form-label offset-2">Tổng số ngày</label>
            <div class="col">
                <input type="text" class="form-control shadow-sm w-50" id="tongSoNgay" name="tongSoNgay"
                       placeholder="Tổng số ngày..." value="<?= $kqOne['tongSoNgay'] ?>">
            </div>
        </div>

        <input type="hidden" name="ghiChu" value="<?= $kqOne['ghiChu'] ?>">
        <input type="hidden" name="soNgayHienTai" value="<?= $kqOne['soNgayHienTai'] ?>">
        <input type="hidden" name="maPhep" value="<?= $kqOne['maPhep'] ?>">

        <div class="mb-3 row offset-2">
            <div class="col-6">
                <?php echo (isset($_GET['confirm'])) ? false : '<button type="submit" class="btn text-light d-inline-block btn-sakura">Cập nhật</button>'; ?>
            </div>
            <div class="col-6">
                <?php
                if (isset($_GET['confirm'])) {
                    echo '<h6>Bạn có chắc chắn muốn xóa ngày phép trên?</h6>';
                    echo '<div class="row">';
                    echo '<div class="col">';
                    echo '<a href="index.php?act=ngayphep&q=delete&id=' . $kqOne['maPhep'] . '" class="btn btn-sakura text-white">Xác nhận</a>';
                    echo '</div>';
                    echo '<div class="col">';
                    echo '<a href="index.php?act=ngayphep&q=index" class="btn btn-sakura text-white">Quay lại</a>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </form>

</div>
