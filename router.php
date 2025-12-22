<?php
// router.php — force routing for PHP built-in server

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

// If file exists, serve it
if ($path !== "/" && file_exists(__DIR__ . $path)) {
    return false;
}

// Default entry point
require __DIR__ . "/index.php";
