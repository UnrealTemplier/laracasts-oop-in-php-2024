<?php

require 'vendor/autoload.php';

use App\Storage;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

try {
    Storage::resolve()->put('hello.txt', 'Hello, storage!');
} catch (Exception $e) {
    echo 'File upload failed.' . PHP_EOL;
}
