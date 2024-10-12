<?php
use Opt\RedmineReports\Controllers\DashboardController;
use Klein\Klein;

$app = new Klein();

$app->respond('/dashboard', function ($req, $res, $service) {
    $data = DashboardController::index($req->params());
    $service->render(__DIR__ . '/views/dashboard.php', $data);
});

// $app->respond('GET', '/xy', function () {
//     include __DIR__ . '/views/xy.php';
// });

$app->dispatch();
