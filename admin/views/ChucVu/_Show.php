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
                echo '<td><a href="index.php?act=chucvu&q=update&id=' . $item['maCV'] . '" class="text-decoration-none" >' . $item['chucVu'] . '</a></td>';
                echo '<td><a href="index.php?act=chucvu&q=delete&confirm&id=' . $item['maCV'] . '"><i class="fa-duotone fa-x"></a></i></td>';
                echo '</tr>';
            }
        }
        ?>
    </table>
</div>