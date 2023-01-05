<?php
if ($_GET['act'] == 'updatenp' && isset($_GET['id']) || $_GET['act'] == 'delnp' && isset($_GET['confirm'])) {
    include '_Form_Update_Delete.php';
} elseif ($_GET['act']=='addnpform') {
    include '_Form_Add.php';
} else {
    include '_Show.php';
}



