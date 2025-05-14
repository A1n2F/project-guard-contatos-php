<?php

use Core\Route;

use App\Controllers\IndexController;
use App\Controllers\LoginController;
use App\Controllers\Contatos;
use App\Controllers\LogoutController;
use App\Controllers\RegisterController;
use App\Controllers\Contatos\CriarController;

use App\Middlewares\AuthMiddleware;
use App\Middlewares\GuestMiddleware;

(new Route())
    ->get('/', IndexController::class, GuestMiddleware::class)

    ->get('/login', [ LoginController::class, 'index' ], GuestMiddleware::class)
    ->post('/login', [ LoginController::class, 'login' ], GuestMiddleware::class)

    
    ->get('/registrar', [ RegisterController::class, 'index' ], GuestMiddleware::class)
    ->post('/registrar', [ RegisterController::class, 'register' ], GuestMiddleware::class)
    
    ->get('/logout', LogoutController::class, AuthMiddleware::class)
    ->get('/contatos', Contatos\IndexController::class, AuthMiddleware::class)
    ->get('/contatos/criar', [CriarController::class, 'index'], AuthMiddleware::class)
    ->post('/contatos/criar', [CriarController::class, 'store'], AuthMiddleware::class)

    ->run();
