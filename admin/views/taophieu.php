<div class="text-center mt-3">
    <h3>TẠO MỚI PHIẾU</h3>
    <hr>
    <form method="POST" action="index.php?act=addpb" class="">
        <div class="mb-3 mt-3 row justify-content-center">
            <label for="tenNV" class="col-2 col-form-label offset-2">Tên nhân viên</label>
            <div class="col">
                <input type="text" class="form-control shadow-sm" id="tenNV" name="tenNV"
                       placeholder="Tên nhân viên...">
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
                       placeholder="Tổng số ngày...">
            </div>
        </div>

        <div class="mb-3 mt-3 row justify-content-center">
            <label for="tu_ngay" class="col-2 col-form-label offset-2">Ngày bắt đầu</label>
            <div class="col">
                <input type="date" class="form-control shadow-sm" id="tu_ngay" name="tu_ngay"
                       placeholder="Ngày bắt đầu...">
            </div>
            <div class="col">
                <select class="form-select shadow-sm w-50" name="tu_buoi" id="tu_buoi">
                    <option value="sang">Sáng</option>
                    <option value="trua">Trưa</option>
                    <option value="chieu">Chiều</option>
                </select>
            </div>
        </div>

        <div class="mb-3 mt-3 row justify-content-center">
            <label for="den_ngay" class="col-2 col-form-label offset-2">Ngày kết thúc</label>
            <div class="col">
                <input type="date" class="form-control shadow-sm" id="den_ngay" name="den_ngay"
                       placeholder="Ngày kết thúc...">
            </div>
            <div class="col">
                <select class="form-select shadow-sm w-50" name="tu_buoi" id="tu_buoi">
                    <option value="sang">Sáng</option>
                    <option value="trua">Trưa</option>
                    <option value="chieu">Chiều</option>
                </select>
            </div>
        </div>

        <div class="mb-3 mt-3 row justify-content-center">
            <label for="loaiPhep" class="col-2 col-form-label offset-2">Loại phép sử dụng</label>
            <div class="col">
                <select class="form-select shadow-sm w-25" name="loaiPhep" id="loaiPhep">
                    <option value="phepnam">Phép năm</option>
                    <option value="phepthang">Phép tháng</option>
                </select>
            </div>
        </div>

        <div class="mb-3 col-6">
            <input type="submit" class="btn d-inline-block text-light btn-sakura" name="addtp" value="Đăng ký">
        </div>
    </form>
</div>

