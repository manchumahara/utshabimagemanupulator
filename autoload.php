<?php

spl_autoload_register(function ($class){

    $parts = explode('\\', $class);
    $filename =  end($parts) . '.php';
//    $filename = $class.'.php';

    if (! file_exists($filename)){
        echo 'file not exists';
    }else{
        include $filename;
    }
});