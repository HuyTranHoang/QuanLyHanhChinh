<div class="text-center mt-3">
    <h3>CẬP NHẬT CHỨC VỤ</h3>
    <hr>
    <form method="POST" action="index.php?act=chucvu&q=update" class="">
        <div class="mb-3 mt-3 row justify-content-center">
            <label for="tenPhong" class="col-2 col-form-label offset-2">Tên chức vụ</label>
            <div class="col">
                <input type="text" class="form-control shadow-sm" id="chucVu" name="chucVu"
                       placeholder="Chức vụ..." value="<?= $kqOne['chucVu'] ?>">
            </div>
        </div>

        <input type="hidden" name="maCV" value="<?= $kqOne['maCV'] ?>">

        <div class="mb-3 row">
            <div class="col-6">
                <?php echo (isset($_GET['confirm'])) ? false : '<button type="submit" class="btn text-light d-inline-block btn-sakura">Cập nhật</button>'; ?>
            </div>
            <div class="col-6">
                <?php
                if (isset($_GET['confirm'])) {
                    echo '<h6>Bạn có chắc chắn muốn xóa chức vụ trên?</h6>';
                    echo '<div class="row">';
                    echo '<div class="col">';
                    echo '<a href="index.php?act=chucvu&q=delete&id=' . $kqOne['maCV'] . '" class="btn btn-sakura text-white">Xác nhận</a>';
                    echo '</div>';
                    echo '<div class="col">';
                    echo '<a href="index.php?act=chucvu&q=index" class="btn btn-sakura text-white">Quay lại</a>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </form>
</div>