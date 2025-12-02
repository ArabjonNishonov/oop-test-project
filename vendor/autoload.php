<?php


namespace Vendor\Autoload;

spl_autoload_register(function ($class) {
    include 'src/'. $class . '.php';
});