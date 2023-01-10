<div class="text-center mt-3">
    <h3>DUYỆT MỚI PHIẾU</h3>
    <hr>
    <form method="POST" action="index.php?act=taophieu&q=confirm" class="">
        <div class="mb-3 mt-3 row justify-content-center">
            <label for="tenNV" class="col-2 col-form-label offset-2">Tên nhân viên</label>
            <div class="col">
                <input type="text" class="form-control shadow-sm" id="tenNV" name="tenNV"
                       placeholder="Tên nhân viên..." value="<?= $kqOne['tenNV'] ?>">
            </div>
        </div>

        <div class="mb-3 mt-3 row justify-content-center">
            <label for="maPhong" class="col-2 col-form-label offset-2">Phòng ban</label>
            <div class="col">
                <select class="form-select shadow-sm w-25" name="maPhong" id="maPhong">
                    <?php
                    $pb = new PhongBan();
                    $kqpb = $pb->getAll();
                    foreach ($kqpb as $item) {
                        echo '<option value="' . $item['maPhong'] . '"';
                        echo '>' . $item['tenPhong'] . '</option>';
                    }
                    ?>
                </select>
            </div>
        </div>

        <div class="mb-3 mt-3 row justify-content-center">
            <label for="tongSoNgay" class="col-2 col-form-label offset-2">Tổng số ngày nghỉ</label>
            <div class="col">
                <input type="text" class="form-control shadow-sm" id="tongSoNgay" name="tongSoNgay"
                       placeholder="Tổng số ngày..." value="<?= $kqOne['tongSoNgay'] ?>">
            </div>
        </div>

        <div class="mb-3 mt-3 row justify-content-center">
            <label for="tu_ngay" class="col-2 col-form-label offset-2">Ngày bắt đầu</label>
            <div class="col">
                <input type="date" class="form-control shadow-sm" id="tu_ngay" name="tu_ngay"
                       placeholder="Ngày bắt đầu..." value="<?= $kqOne['tu_ngay'] ?>">
            </div>
            <div class="col">
                <select class="form-select shadow-sm w-50" name="tu_buoi" id="tu_buoi">
                    <option value="<?= $kqOne['tu_buoi'] ?>"><?= getBuoi($kqOne['tu_buoi']) ?></option>
                </select>
            </div>
        </div>

        <div class="mb-3 mt-3 row justify-content-center">
            <label for="den_ngay" class="col-2 col-form-label offset-2">Ngày kết thúc</label>
            <div class="col">
                <input type="date" class="form-control shadow-sm" id="den_ngay" name="den_ngay"
                       placeholder="Ngày kết thúc..." value="<?= $kqOne['den_ngay'] ?>">
            </div>
            <div class="col">
                <select class="form-select shadow-sm w-50" name="den_buoi" id="den_buoi">
                    <option value="<?= $kqOne['den_buoi'] ?>"><?= getBuoi($kqOne['den_buoi']) ?></option>
                </select>
            </div>
        </div>

        <div class="mb-3 mt-3 row justify-content-center">
            <label for="loaiPhep" class="col-2 col-form-label offset-2">Loại phép sử dụng</label>
            <div class="col">
                <select class="form-select shadow-sm w-50" name="loaiPhep" id="loaiPhep">
                    <option value="<?= $kqOne['loaiPhep'] ?>"><?= getLoaiPhep($kqOne['loaiPhep']) ?></option>
                </select>
            </div>
        </div>

        <input type="hidden" name="maNV" value="<?= $kqOne['maNV'] ?>">
        <input type="hidden" name="maPhieu" value="<?= $kqOne['maPhieu'] ?>">

        <div class="mb-3 col-6">
            <input type="submit" class="btn d-inline-block text-light btn-sakura" name="accept" value="Duyệt">
            <input type="submit" class="btn d-inline-block text-light btn-sakura" name="reject" value="Từ chối">
        </div>
    </form>
    <?php
    if (isset($checkNP) && !$checkNP) {
        echo '<h1>Số ngày nghỉ vượt quá số ngày hiện có</h1>';
    }
    ?>
</div>

