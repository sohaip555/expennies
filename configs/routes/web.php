<?php

declare(strict_types = 1);

use App\Controllers\HomeController;
use App\Controllers\AuthController;
use App\Middleware\AuthMiddleware;
use App\Middleware\GustMiddleware;
use Slim\App;

return function (App $app) {
    $app->get('/', [HomeController::class, 'index'])->add(AuthMiddleware::class);

    $app->get('/login', [AuthController::class, 'loginView'])->add(GustMiddleware::class);
    $app->get('/register', [AuthController::class, 'registerView'])->add(GustMiddleware::class);
    $app->post('/login', [AuthController::class, 'logIn'])->add(GustMiddleware::class);
    $app->post('/register', [AuthController::class, 'register'])->add(GustMiddleware::class);
    $app->get('/logout', [AuthController::class, 'logOut'])->add(AuthMiddleware::class);

};