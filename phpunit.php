<?php

error_reporting(E_ALL);
$autoloader = __DIR__ . '/vendor/autoload.php';
if (! file_exists($autoloader)) {
    echo "Composer autoloader not found: $autoloader" . PHP_EOL;
    echo "Please issue 'composer install' and try again." . PHP_EOL;
    exit(1);
}
require $autoloader;
if (! class_exists('PHPUnit_Framework_TestCase')) {
    require __DIR__ . '/tests/polyfill/TestCace.php';
}else {
    require __DIR__ . '/tests/polyfill/PHPUnit_Framework_TestCase.php';
}
