<?php
include_once 'Function.php';

if ($_GET['q'] == 'showConfirm' && isset($_GET['id'])) {
    include '_Form_Confirm.php';
} elseif ($_GET['q']=='create') {
    include '_Form_Add.php';
} else {
    include '_Show.php';
}

