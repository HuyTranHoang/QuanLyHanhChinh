<div class="text-center mt-3">
    <h3>CẬP NHẬT CHỨC VỤ</h3>
    <hr>
    <form method="POST" action="index.php?act=updatecv" class="">
        <div class="mb-3 mt-3 row justify-content-center">
            <label for="tenPhong" class="col-2 col-form-label offset-2">Tên chức vụ</label>
            <div class="col">
                <input type="text" class="form-control shadow-sm" id="chucVu" name="chucVu"
                       placeholder="Chức vụ..." value="<?= $kqOne['chucVu'] ?>">
            </div>
        </div>

        <input type="hidden" name="maCV" value="<?= $kqOne['maCV'] ?>">

        <div class="mb-3 col-6">
            <button type="submit" class="btn text-light d-inline-block" style="background-color: var(--primaryColor);">Cập nhật</button>
        </div>
    </form>

</div>

<div class="mt-4">
    <h3>DANH SÁCH CHỨC VỤ</h3>
    <hr>
    <table class="table table-striped table-bordered">
        <tr class="table-primary">
            <th>#</th>
            <th>Tên chức vụ</th>
            <th><i class="fa-duotone fa-trash"></i></th>
        </tr>

        <?php
        if (isset($kq) && count($kq) > 0) {
            foreach ($kq as $index => $item) {
                echo '<tr>';
                echo '<td>' . $index + 1 . '</td>';
                echo '<td><a href="index.php?act=updatecv&id=' . $item['maCV'] . '" class="text-decoration-none" >' . $item['chucVu'] . '</a></td>';
                echo '<td><a href="index.php?act=delcv&id=' . $item['maCV'] . '"><i class="fa-duotone fa-x"></a></i></td>';
                echo '</tr>';
            }
        }
        ?>
    </table>
</div>