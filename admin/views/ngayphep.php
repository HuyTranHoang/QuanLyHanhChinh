<div class="mt-4">
    <div class="row">
        <div class="col"><h5>Danh sách ngày nghỉ</h5></div>
        <div class="col">
            <a href="index.php?act=addnpform"><h5 class="float-end"><i class="fa-duotone fa-notes"></i> Thêm mới</h5></a>
        </div>
    </div>

    <hr class="mt-0">
    <table class="table table-striped table-bordered">
        <tr class="table-primary">
            <th>#</th>
            <th>Tên nhân viên</th>
            <th>Số ngày nghỉ</th>
            <th>Số ngày đã nghỉ</th>
            <th><i class="fa-duotone fa-trash"></i></th>
        </tr>
        <?php
        if (isset($kq) && count($kq) > 0) {
            foreach ($kq as $index => $item) {
                echo '<tr>';
                echo '<td>' . $index + 1 . '</td>';
                echo '<td><a href="index.php?act=updatenp&id=' . $item['maPhep'] . '" class="text-decoration-none" >' . $item['tenNV'] . '</a></td>';
                echo '<td>' . $item['soNgayHienTai'] . '</td>';
                echo '<td>' . $item['tongSoNgay'] . '</td>';
                echo '<td><a href="index.php?act=delnp&id=' . $item['maPhep'] . '"><i class="fa-duotone fa-x"></a></i></td>';
                echo '</tr>';
            }
        }
        ?>
    </table>
</div>
