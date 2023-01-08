<?php

include '../../models/DB.class.php';
include '../../models/NhanVien.class.php';
include '../../models/PhongBan.class.php';
include '../controller/PhongBanController.class.php';

$pb = new PhongBanController();

if (!empty($_POST['maPhong'])){
    if ($_POST['maPhong']){
        $nv = new NhanVien();
        $kqnv = $nv->getAll_FromID_PB($_POST['maPhong']);
        foreach ($kqnv as $item) {
            echo '<option value="' . $item['maNV'] . '">' . $item['tenNV'] . '</option>';
        }
    }
}

if (isset($_POST['confirm'])) {
    $maPhong = $_POST['maPhongPB'];
    $kqOne = $pb->getOne($maPhong);
    echo '<h6>Bạn có chắc chắn muốn xóa phòng <strong class="text-danger">'.$kqOne['tenPhong'].'</strong> ?</h6>';
    echo '<div class="row">';
    echo '<div class="col">';
//    echo '<a class="btn btn-sakura text-white" href="index.php?act=phongban&q=delete&id=' . $maPhong . '">Xác nhận</a>';
    echo '<btn class="btn btn-sakura text-white" id="btnConfirm" data-act="phongban" data-id="'.$maPhong.'">Xác nhận</a>';
    echo '</div>';
    echo '<div class="col">';
    echo '<a class="btn btn-sakura text-white" href="index.php?act=phongban&q=index">Quay lại</a>';
    echo '</div></div>';
}

if (isset($_POST['delete'])) {
    $pb->delete();
}

if ((isset($_POST['addpb'])) && ($_POST['addpb'])) {
    $tenPhong = $_POST['tenPhong'];
    $vietTat = $_POST['vietTat'];
    $ghiChu = $_POST['ghiChu'];
    $pb->create();
    $kq = $pb->getAll();
    $index = count($kq);
    $maPhong = $pb->getMaxID();

    echo '<tr>';
    echo '<td>' . $index . '</td>';
    echo '<td><a href="index.php?act=phongban&q=update&id=' . $maPhong['CurrentId'] . '" class="text-decoration-none" >' . $tenPhong . '</a></td>';
    echo '<td>' . $vietTat . '</td>';
//                echo '<td><a href="index.php?act=phongban&q=delete&confirm&id=' . $item['maPhong'] . '"><i class="fa-duotone fa-x"></a></i></td>';
    echo '<td><span class="btnXoa text-danger" data-act="phongban" data-id="' . $maPhong['CurrentId'] . '"><i style="cursor:pointer;" class="fa-duotone fa-x"></span></td>';
    echo '</tr>';
}



