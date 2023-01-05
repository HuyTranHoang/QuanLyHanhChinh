<div class="text-center mt-3">
    <h3>QUẢN LÝ PHÒNG</h3>
    <hr>
    <form method="POST" action="index.php?act=phongban&q=create" class="">
        <div class="mb-3 mt-3 row justify-content-center">
            <label for="tenPhong" class="col-2 col-form-label offset-2">Tên phòng</label>
            <div class="col">
                <input type="text" class="form-control shadow-sm" id="tenPhong" name="tenPhong"
                       placeholder="Tên phòng...">
            </div>
        </div>

        <div class="mb-3 row justify-content-center">
            <label for="vietTat" class="col-2 col-form-label offset-2">Tên viết tắt</label>
            <div class="col">
                <input type="text" class="form-control shadow-sm" id="vietTat" name="vietTat"
                       placeholder="Tên viết tắt...">
            </div>
        </div>

        <div class="mb-3 row justify-content-center">
            <label for="vietTat" class="col-2 col-form-label offset-2">Ghi chú</label>
            <div class="col">
                <input type="text" class="form-control shadow-sm" id="ghiChu" name="ghiChu"
                       placeholder="Ghi chú...">
            </div>
        </div>

        <div class="mb-3 row">
            <div class="col-6">
                <input type="submit" class="btn d-inline-block text-light btn-sakura" name="addpb" value="Thêm mới">
            </div>
        </div>
    </form>
</div>

<?php