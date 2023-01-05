<?php
if ($_GET['act'] == 'updatepb' && isset($_GET['id']) || $_GET['act'] == 'delpb' && isset($_GET['confirm'])) {
    include '_Form_Update_Delete.php';
} else {
    include '_Form_Add.php';
}

include '_Show.php';


