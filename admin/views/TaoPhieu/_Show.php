<div class="mt-4">
    <?php if ($_SESSION['role'] == 1 && isset($kqQuanLy) && count($kqQuanLy) > 0): ?>
        <h3>PHIẾU CHỜ DUYỆT</h3>
        <hr>
        <table class="table table-striped table-bordered" id="tablePN">
            <tr class="table-primary">
                <th>#</th>
                <th>Tên Nhân Viên</th>
                <th>Tổng số ngày</th>
                <th>Từ buổi</th>
                <th>Đến buổi</th>
                <th>Từ ngày</th>
                <th>Đến ngày</th>
                <th>Loại phép</th>
                <th>Trạng thái</th>
                <th>Ngày duyệt</th>
            </tr>
            <?php

            foreach ($kqQuanLy as $index => $item) {
                echo '<tr>';
                echo '<td>' . $index + 1 . '</td>';
                echo '<td>' . setConfirmID($item['maPhieu'], $item['tenNV']) . '</td>';
                echo '<td>' . $item['tongSoNgay'] . '</td>';
                echo '<td>' . getBuoi($item['tu_buoi']) . '</td>';
                echo '<td>' . getBuoi($item['den_buoi']) . '</td>';
                echo '<td>' . formatDate($item['tu_ngay']) . '</td>';
                echo '<td>' . formatDate($item['den_ngay']) . '</td>';
                echo '<td>' . getLoaiPhep($item['loaiPhep']) . '</td>';
                echo '<td>' . getTrangThai($item['trang_thai']) . '</td>';
                echo '<td>' . formatDate($item['ngay_duyet']) . '</td>';
                echo '</tr>';
            }
            ?>
        </table>
    <?php else:
    echo '<h3>KHÔNG CÓ PHIẾU CHỜ DUYỆT</h3>
          <hr>';
    endif;?>

    <h3>DANH SÁCH PHIẾU</h3>
    <hr>
    <table class="table table-striped table-bordered" id="tablePN">
        <tr class="table-primary">
            <th>#</th>
            <th>Tổng số ngày</th>
            <th>Từ buổi</th>
            <th>Đến buổi</th>
            <th>Từ ngày</th>
            <th>Đến ngày</th>
            <th>Loại phép</th>
            <th>Trạng thái</th>
            <th>Ngày duyệt</th>
        </tr>
        <?php

        if (isset($kq) && count($kq) > 0) {
            foreach ($kq as $index => $item) {
                echo '<tr>';
                echo '<td>' . $index + 1 . '</td>';
                echo '<td>' . $item['tongSoNgay'] . '</td>';
                echo '<td>' . getBuoi($item['tu_buoi']) . '</td>';
                echo '<td>' . getBuoi($item['den_buoi']) . '</td>';
                echo '<td>' . formatDate($item['tu_ngay']) . '</td>';
                echo '<td>' . formatDate($item['den_ngay']) . '</td>';
                echo '<td>' . getLoaiPhep($item['loaiPhep']) . '</td>';
                echo '<td>' . getTrangThai($item['trang_thai']) . '</td>';
                echo '<td>' . formatDate($item['ngay_duyet']) . '</td>';
                echo '</tr>';
            }
        }
        ?>
    </table>


</div>