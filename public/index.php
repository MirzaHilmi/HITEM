<?php

use Saphpi\Core\Application;

require_once __DIR__ . '/../psr4_autoloader.php';

$env = parse_ini_file('../.env');
if ($env === false) {
    die('Failed to load .env file');
}

$app = new Application();

$app->router()->get('/admin/login', 'layouts/app>admin/login');
$app->router()->get('/admin/reports', 'layouts/app>admin/reports');
$app->router()->get('/admin/items', 'layouts/app>admin/items');
$app->router()->get('/admin/founds', 'layouts/app>admin/founds');
$app->router()->delete('/admin/founds', 'layouts/app>admin/founds');

$app->router()->get('/', 'layouts/app>index');
$app->router()->get('/contact', 'layouts/app>contact');
$app->router()->get('/about', 'layouts/app>about');
$app->router()->get('/items', 'layouts/app>items');
$app->router()->get('/form', 'layouts/app>form');

$app->run();
