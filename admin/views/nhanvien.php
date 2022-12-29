<div class="mt-4">
    <div class="row">
        <div class="col"><h5>Danh sách nhân viên</h5></div>
        <div class="col"><h5 class="float-end"> <i class="fa-duotone fa-user"></i> Thêm mới</h5></div>
    </div>
    <hr class="mt-0">
    <table class="table table-striped table-bordered">
        <tr class="table-primary">
            <th>#</th>
            <th>Tên nhân viên</th>
            <th>Phòng</th>
            <th>Chức vụ</th>
            <th><i class="fa-duotone fa-trash"></i></th>
        </tr>
        <?php
        if (isset($kq) && count($kq) > 0) {
            foreach ($kq as $index => $item) {
                echo '<tr>';
                echo '<td>' . $index + 1 . '</td>';
                echo '<td><a href="index.php?act=updatecv&id=' . $item['maNV'] . '" class="text-decoration-none" >' . $item['tenNV'] . '</a></td>';
                echo '<td>' . $item['tenPhong'] . '</td>';
                echo '<td>' . $item['chucVu'] . '</td>';
                echo '<td><a href="index.php?act=delcv&id=' . $item['maNV'] . '"><i class="fa-duotone fa-x"></a></i></td>';
                echo '</tr>';
            }
        }
        ?>
    </table>
</div>
