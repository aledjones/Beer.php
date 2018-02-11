<?php

$file = __DIR__ . '/../vendor/autoload.php';
if (!file_exists($file)) {
    throw new RuntimeException('Missing dependencies');
}
$autoload = require_once $file;