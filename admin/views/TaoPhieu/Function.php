<?php

function getBuoi($buoi)
{
    return match ($buoi) {
        '1' => 'Trưa',
        '2' => 'Chiều',
        default => 'Sáng'
    };
}

function getLoaiPhep($phep)
{
    return match ($phep) {
        1 => 'Nghỉ bệnh',
        2 => 'Nghỉ thai sản',
        3 => 'Nghỉ việc riêng',
        4 => 'Nghỉ không lương',
        default => 'Phép năm'
    };
}

function getTrangThai($trangThai)
{
    return match ($trangThai) {
        1 => '<span class="text-success fw-semibold">Đã duyệt</span>',
        -1 => '<span class="text-danger fw-semibold">Từ chối</span>',
        default => 'Chờ duyệt'
    };
}

function formatDate($date)
{
    return Date('d-m-Y', strtotime($date));
}

function setConfirmID($maNV,$tenNV) {
    return "<a href='index.php?act=phieunghiphep&q=showConfirm&id=".$maNV."' class='text-decoration-none'>$tenNV</a>";
}