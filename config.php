<?php

if (!defined('ACCESS_ALLOWED')) {
    die('Direct access not allowed');
}

function getDatabaseInfo() {
    return [
        'host' => 'localhost',
        'username' => 'root',
        'password' => '',
        'dbName' => 'quanlyhanhchinh',
    ];
}