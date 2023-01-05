<?php
if ($_GET['q'] == 'update' && isset($_GET['id']) || $_GET['q'] == 'delete' && isset($_GET['confirm'])) {
    include '_Form_Update_Delete.php';
} elseif ($_GET['q']=='create') {
    include '_Form_Add.php';
} else {
    include '_Show.php';
}



