<div class="text-center mt-3">
    <h3>QUẢN LÝ PHÒNG</h3>
    <hr>
    <form method="POST" action="index.php?act=addpb" class="">
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

        <div class="mb-3 col-6">
            <input type="submit" class="btn d-inline-block text-light btn-sakura" name="addpb" value="Thêm mới">
        </div>
    </form>
</div>

<div class="mt-4">
    <h3>DANH SÁCH PHÒNG</h3>
    <hr>
    <table class="table table-striped table-bordered">
        <tr class="table-primary">
            <th>#</th>
            <th>Tên phòng</th>
            <th>Tên viết tắt</th>
            <th><i class="fa-duotone fa-trash"></i></th>
        </tr>

        <?php
        if (isset($kq) && count($kq) > 0) {
            foreach ($kq as $index => $item) {
                echo '<tr>';
                echo '<td>' . $index + 1 . '</td>';
                echo '<td><a href="index.php?act=updatepb&id=' . $item['maPhong'] . '" class="text-decoration-none" >' . $item['tenPhong'] . '</a></td>';
                echo '<td>' . $item['vietTat'] . '</td>';
                echo '<td><a href="index.php?act=delpb&id=' . $item['maPhong'] . '"><i class="fa-duotone fa-x"></a></i></td>';
                echo '</tr>';
            }
        }
        ?>
    </table>
</div>
