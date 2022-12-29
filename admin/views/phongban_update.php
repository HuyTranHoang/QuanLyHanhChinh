<div class="text-center mt-3">
    <h3>CẬP NHẬT PHÒNG</h3>
    <hr>
    <form method="POST" action="index.php?act=updatepb" class="">
        <div class="mb-3 mt-3 row justify-content-center">
            <label for="tenPhong" class="col-2 col-form-label offset-2">Tên phòng</label>
            <div class="col">
                <input type="text" class="form-control shadow-sm" id="tenPhong" name="tenPhong"
                       placeholder="Tên phòng..." value="<?= $kqOne['tenPhong'] ?>">
            </div>
        </div>

        <div class="mb-3 row justify-content-center">
            <label for="vietTat" class="col-2 col-form-label offset-2">Tên viết tắt</label>
            <div class="col">
                <input type="text" class="form-control shadow-sm" id="vietTat" name="vietTat"
                       placeholder="Tên viết tắt..." value="<?= $kqOne['vietTat'] ?>">
            </div>
        </div>

        <div class="mb-3 row justify-content-center">
            <label for="vietTat" class="col-2 col-form-label offset-2">Ghi chú</label>
            <div class="col">
                <input type="text" class="form-control shadow-sm" id="ghiChu" name="ghiChu"
                       placeholder="Ghi chú..." value="<?= $kqOne['ghiChu'] ?>">
            </div>
        </div>

        <input type="hidden" name="maPhong" value="<?= $kqOne['maPhong'] ?>">

        <div class="mb-3 col-6">
            <button type="submit" class="btn text-light d-inline-block" style="background-color: var(--primaryColor);">Cập nhật</button>
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