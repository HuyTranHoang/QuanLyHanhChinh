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
                echo '<td><a href="index.php?act=phongban&q=update&id=' . $item['maPhong'] . '" class="text-decoration-none" >' . $item['tenPhong'] . '</a></td>';
                echo '<td>' . $item['vietTat'] . '</td>';
                echo '<td><a href="index.php?act=phongban&q=delete&confirm&id=' . $item['maPhong'] . '"><i class="fa-duotone fa-x"></a></i></td>';
                echo '</tr>';
            }
        }
        ?>
    </table>
</div>