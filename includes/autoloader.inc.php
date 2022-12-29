<?php
spl_autoload_register('myAutoLoader');

function myAutoLoader($className) {
    $path = "../models/";
    $extension = ".class.php";
    $fullpath = $path . $className . $extension;

    if (!file_exists($fullpath)) {
        return false;
    }
    include_once $fullpath;
}