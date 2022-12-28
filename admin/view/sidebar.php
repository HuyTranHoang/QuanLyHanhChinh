<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark ms-0"
     style="height: 100vh">
    <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <i class="fa-sharp fa-solid fa-code me-3"></i>
        <span class="fs-4">Quản Lý</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto" id="sidebar">
        <li class="nav-item">
            <a href="index.php" class="nav-link <?php echo (!isset($_GET['act'])) ? 'active' : 'text-white'; ?>"
               aria-current="page">
                <i class="fa-duotone fa-house me-2"></i>
                Trang chủ
            </a>
        </li>
        <li>
            <a href="?act=phongban"
               class="nav-link <?php echo (isset($_GET['act']) && $_GET['act'] == 'phongban') ? 'active' : 'text-white'; ?> ">
                <i class="fa-regular fa-apartment me-2"></i>
                Phòng ban
            </a>
        </li>
        <li>
            <a href="?act=chucvu" class="nav-link <?php echo (isset($_GET['act']) && $_GET['act'] == 'chucvu') ? 'active' : 'text-white'; ?> ">
                <i class="fa-sharp fa-solid fa-badge-check me-2"></i>
                Chức vụ
            </a>
        </li>
        <li>
            <a href="?act=nhanvien" class="nav-link <?php echo (isset($_GET['act']) && $_GET['act'] == 'nhanvien') ? 'active' : 'text-white'; ?> ">
                <i class="fa-solid fa-user me-2"></i>
                Nhân viên
            </a>
        </li>
        <li>
            <a href="?act=ngayphep" class="nav-link <?php echo (isset($_GET['act']) && $_GET['act'] == 'ngayphep') ? 'active' : 'text-white'; ?> ">
                <i class="fa-duotone fa-calendar-days me-2"></i>
                Ngày phép
            </a>
        </li>
        <li>
            <a href="?act=phieunghiphep" class="nav-link <?php echo (isset($_GET['act']) && $_GET['act'] == 'phieunghiphep') ? 'active' : 'text-white'; ?> ">
                <i class="fa-regular fa-notes me-2"></i>
                Phiếu nghỉ phép
            </a>
        </li>
        <li>
            <a href="?act=thoat" class="nav-link text-white ">
                <i class="fa-solid fa-arrow-right-from-bracket me-2"></i>
                Thoát
            </a>
        </li>
    </ul>
    <hr>
    <a href="#" class="d-flex align-items-center text-white text-decoration-none" aria-expanded="false">
        <img src="../images/SGuraCheer.gif"
             alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>Huy Nèk</strong>
    </a>
</div>
