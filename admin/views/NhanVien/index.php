<?php
if ($_GET['act'] == 'updatenv' && isset($_GET['id']) || $_GET['act'] == 'delnv' && isset($_GET['confirm'])) {
    include '_Form_Update_Delete.php';
} elseif ($_GET['act']=='addnvform') {
    include '_Form_Add.php';
} else {
    include '_Show.php';
}



