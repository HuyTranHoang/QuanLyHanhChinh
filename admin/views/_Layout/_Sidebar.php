<div class="d-flex flex-column flex-shrink-0 p-3 bg-light ms-0" style="height: 100vh">
    <a href="?" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <i class="fa-solid fa-code me-3"></i>
        <span class="fs-4">Quản Lý</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto" id="sidebar">
        <li class="nav-item">
            <a href="?" class="nav-link
					<?php echo (!isset($_GET['act'])) ? 'active' : 'text-dark'; ?>" aria-current="page">
                <i class="fa-duotone fa-house me-2"></i> Trang chủ </a>
        </li>
        <li>
            <a href="?act=phongban&q=index" class="nav-link
					<?php echo (isset($_GET['act']) && ($_GET['act'] == 'phongban' || $_GET['act']=='delpb')) ? 'active' : 'text-dark'; ?> ">
                <i class="fa-regular fa-apartment me-2"></i> Phòng ban </a>
        </li>
        <li>
            <a href="?act=chucvu&q=index" class="nav-link
					<?php echo (isset($_GET['act']) && $_GET['act'] == 'chucvu') ? 'active' : 'text-dark'; ?> ">
                <i class="fa-solid fa-badge-check me-2"></i> Chức vụ </a>
        </li>
        <li>
            <a href="?act=nhanvien&q=index" class="nav-link
					<?php echo (isset($_GET['act']) && ($_GET['act'] == 'nhanvien' ||$_GET['act'] == 'addnvform' )) ? 'active' : 'text-dark'; ?> ">
                <i class="fa-solid fa-user me-2"></i> Nhân viên </a>
        </li>
        <li>
            <a href="?act=ngayphep&q=index" class="nav-link
					<?php echo (isset($_GET['act']) && ($_GET['act'] == 'ngayphep' || $_GET['act'] == 'addnpform')) ? 'active' : 'text-dark'; ?> ">
                <i class="fa-duotone fa-calendar-days me-2"></i> Ngày phép </a>
        </li>
        <li>
            <a href="?act=phieunghiphep&q=index" class="nav-link
					<?php echo (isset($_GET['act']) && $_GET['act'] == 'phieunghiphep') ? 'active' : 'text-dark'; ?> ">
                <i class="fa-regular fa-notes me-2"></i> Phiếu nghỉ phép </a>
        </li>
        <li>
            <a href="?act=taophieu&q=index" class="nav-link
					<?php echo (isset($_GET['act']) && $_GET['act'] == 'taophieu') ? 'active' : 'text-dark'; ?> ">
                <i class="fa-duotone fa-note"></i> Tạo phếu </a>
        </li>
        <li>
            <a href="?act=thoat" class="nav-link text-dark ">
                <i class="fa-solid fa-arrow-right-from-bracket me-2"></i> Thoát </a>
        </li>
    </ul>
    <hr>
    <a href="#" class="d-flex align-items-center text-dark text-decoration-none" aria-expanded="false">
        <img src="../images/SGuraCheer.gif" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>Huy Nèk</strong>
    </a>
</div>