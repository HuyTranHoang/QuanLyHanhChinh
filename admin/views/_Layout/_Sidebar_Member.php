<div class="d-flex flex-column flex-shrink-0 p-3 bg-light ms-0" style="height: 100vh">
    <a href="?" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <i class="fa-solid fa-code me-3"></i>
        <span class="fs-4">Thành Viên</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto" id="sidebar">
        <li class="nav-item">
            <a href="?" class="nav-link
					<?php echo (!isset($_GET['act'])) ? 'active' : 'text-dark'; ?>" aria-current="page">
                <i class="fa-duotone fa-house me-2"></i> Trang chủ </a>
        </li>
        <li>
            <a href="?act=phieunghiphep&q=index" class="nav-link
					<?php echo (isset($_GET['act']) && $_GET['act'] == 'phieunghiphep') ? 'active' : 'text-dark'; ?> ">
                <i class="fa-regular fa-notes me-2"></i> Phiếu nghỉ phép </a>
        </li>
        <li>
            <a href="?act=taophieu&q=create" class="nav-link
					<?php echo (isset($_GET['act']) && $_GET['act'] == 'taophieu') ? 'active' : 'text-dark'; ?> ">
                <i class="fa-duotone fa-note"></i> Tạo phếu </a>
        </li>
        <li>
            <a href="?act=thoat&q=" class="nav-link text-dark ">
                <i class="fa-solid fa-arrow-right-from-bracket me-2"></i> Thoát </a>
        </li>
    </ul>
    <hr>
    <a href="#" class="d-flex align-items-center text-dark text-decoration-none" aria-expanded="false">
        <img src="../images/SGuraCheer.gif" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>Huy Nèk</strong>
    </a>
</div>