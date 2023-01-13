<?php

header('content-type:application/json');
include_once '../models/DB.class.php';
include_once '../models/PhongBan.class.php';
include_once '../models/NhanVien.class.php';
include_once ('controller/NhanVienController.class.php');
$id = $_GET['id'];

$nv = new NhanVienController();
$ds = $nv->getAll_FromID_PB($id);

echo json_encode($ds);
