<?php
require __DIR__ . '/vendor/autoload.php';

use Klein\Klein;

$app = new Klein();

$app->respond('GET', '/dashboard', function () {
    include __DIR__ . '/views/dashboard.php';
});

// $app->respond('GET', '/xy', function () {
//     include __DIR__ . '/views/xy.php';
// });

$app->dispatch();
