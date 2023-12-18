<?php

use Saphpi\Core\Application;

require_once __DIR__ . '/../psr4_autoloader.php';

$env = parse_ini_file('../.env');
if ($env === false) {
    die('Failed to load .env file');
}

$app = new Application();

$app->router()->get('/admin/login', 'admin/login');
$app->router()->get('/admin/reports', 'admin/reports');
$app->router()->get('/admin/items', 'admin/items');

$app->router()->get('/', 'index');
$app->router()->get('/contact', 'contact');
$app->router()->get('/about', 'about');
$app->router()->get('/items', 'items');
$app->router()->get('/form', 'form');

$app->run();
