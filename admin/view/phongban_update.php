<div class="container-fluid">
    <div class="row">
        <?php
        include 'sidebar.php';
        ?>

        <div class="col-10">
            <div class="text-center mt-3">
                <h3>CẬP NHẬT PHÒNG</h3>
                <hr>
                <form method="POST" action="index.php?act=updatepb" class="">
                    <div class="mb-3 mt-3 row justify-content-center">
                        <label for="tenPhong" class="col-sm-1 col-form-label">Tên phòng</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control shadow-sm" id="tenPhong" name="tenPhong"
                                   placeholder="Tên phòng..." value="<?= $kqOne['tenPhong'] ?>">
                        </div>
                    </div>

                    <div class="mb-3 row justify-content-center">
                        <label for="vietTat" class="col-sm-1 col-form-label">Tên viết tắt</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control shadow-sm" id="vietTat" name="vietTat"
                                   placeholder="Tên viết tắt..." value="<?= $kqOne['vietTat'] ?>">
                        </div>
                    </div>

                    <div class="mb-3 row justify-content-center">
                        <label for="vietTat" class="col-sm-1 col-form-label">Ghi chú</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control shadow-sm" id="ghiChu" name="ghiChu"
                                   placeholder="Ghi chú..." value="<?= $kqOne['ghiChu'] ?>">
                        </div>
                    </div>

                    <input type="hidden" name="maPhong" value="<?= $kqOne['maPhong'] ?>">

                    <div class="mb-3 col-sm-6">
                        <button type="submit" class="btn btn-primary d-inline-block">Cập nhật</button>
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
                        foreach ($kq as $index => $pb) {
                            echo '<tr>';
                            echo '<td>' . $index . '</td>';
                            echo '<td><a href="index.php?act=updatepb&id=' . $pb['maPhong'] . '" class="text-decoration-none" >' . $pb['tenPhong'] . '</a></td>';
                            echo '<td>' . $pb['vietTat'] . '</td>';
                            echo '<td><a href="index.php?act=delpb&id=' . $pb['maPhong'] . '"><i class="fa-duotone fa-x"></a></i></td>';
                            echo '</tr>';
                        }
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>

</div>