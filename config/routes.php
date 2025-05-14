<?php

use Core\Route;

use App\Controllers\IndexController;
use App\Controllers\LoginController;
use App\Controllers\DashboardController;
use App\Controllers\LogoutController;
use App\Controllers\RegisterController;
use App\Controllers\Contatos\CriarController;

(new Route())
    ->get('/', IndexController::class)

    ->get('/login', [ LoginController::class, 'index' ])
    ->post('/login', [ LoginController::class, 'login' ])

    ->get('/dashboard', DashboardController::class)
    ->get('/contatos/criar', [CriarController::class, 'index'])
    ->post('/contatos/criar', [CriarController::class, 'store'])

    ->get('/logout', LogoutController::class)

    ->get('/registrar', [ RegisterController::class, 'index' ])
    ->post('/registrar', [ RegisterController::class, 'register' ])

    ->run();
