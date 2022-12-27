<?php

echo '<div class="col-2 fixed-top" style="margin-left: -12px">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark ms-0"
         style="height: 100vh">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <i class="fa-sharp fa-solid fa-code me-3"></i>
            <span class="fs-4">Quản Lý</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="index.php" class="nav-link active" aria-current="page">
                    <i class="fa-duotone fa-house me-2"></i>
                    Trang chủ
                </a>
            </li>
            <li>
                <a href="?act=phongban" class="nav-link text-white">
                    <i class="fa-regular fa-apartment me-2"></i>
                    Phòng ban
                </a>
            </li>
            <li>
                <a href="?act=chucvu" class="nav-link text-white">
                    <i class="fa-sharp fa-solid fa-badge-check me-2"></i>
                    Chức vụ
                </a>
            </li>
            <li>
                <a href="?act=nhanvien" class="nav-link text-white">
                    <i class="fa-solid fa-user me-2"></i>
                    Nhân viên
                </a>
            </li>
            <li>
                <a href="?act=ngayphep" class="nav-link text-white">
                    <i class="fa-duotone fa-calendar-days me-2"></i>
                    Ngày phép
                </a>
            </li>
            <li>
                <a href="?act=phieunghiphep" class="nav-link text-white">
                    <i class="fa-regular fa-notes me-2"></i>
                    Phiếu nghỉ phép
                </a>
            </li>
            <li>
                <a href="?act=thoat" class="nav-link text-white">
                    <i class="fa-solid fa-arrow-right-from-bracket me-2"></i>
                    Thoát
                </a>
            </li>
        </ul>

        <hr>
        <a href="#" class="d-flex align-items-center text-white text-decoration-none" aria-expanded="false">
            <img src="https://scontent.fsgn13-3.fna.fbcdn.net/v/t39.30808-6/317844858_6591322740915202_6414776757892983460_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=s1hSGJTBipcAX9QLyOV&_nc_ht=scontent.fsgn13-3.fna&oh=00_AfByNmYrJw5Zyiqhsa6UzP9MHgrS2B7qXuUmRxXgAvOGnw&oe=63AEE0CA"
                 alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>Huy Nèk</strong>
        </a>
    </div>
</div>';