<?php

spl_autoload_register('autoLoad');

function autoLoad($class) {
    $path = "model/";
    $extension = ".class.php";
    $fullPath = $path . $class . $extension;

    include_once $fullPath;
}


?>