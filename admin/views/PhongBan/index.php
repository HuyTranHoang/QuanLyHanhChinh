<?php
if ($_SESSION['role'] != 1) {
    header('location: ../admin/index.php?');
}
if ($_GET['q'] == 'update' && isset($_GET['id']) || $_GET['q'] == 'delete' && isset($_GET['confirm'])) {
    include '_Form_Update_Delete.php';
} else {
    include '_Form_Add.php';
}

include '_Show.php';

