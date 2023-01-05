<?php
spl_autoload_register('myAutoLoader');
spl_autoload_register('myCtrAutoLoader');


function myAutoLoader($className) {
    $url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

    if (str_contains($url, 'admin')) {
        $path = "../models/";
    }else {
        $path = "models/";
    }

    $extension = ".class.php";
    $fullpath = $path . $className . $extension;

    if (!file_exists($fullpath)) {
        return false;
    }
    include_once $fullpath;
    return true;
}

function myCtrAutoLoader($className) {
    $url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

    $path = 'Controller/';

    $extension = ".class.php";
    $fullpath = $path . $className . $extension;

    if (!file_exists($fullpath)) {
        return false;
    }
    include_once $fullpath;
    return true;
}