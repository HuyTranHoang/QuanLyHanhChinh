<?php

include '../../models/DB.class.php';
include '../../models/NhanVien.class.php';

if ($_POST['maPhong']){
    $nv = new NhanVien();
    $kqnv = $nv->getAll_NV_from_PB($_POST['maPhong']);
    foreach ($kqnv as $item) {
        echo '<option value="' . $item['maNV'] . '">' . $item['tenNV'] . '</option>';
    }
}


