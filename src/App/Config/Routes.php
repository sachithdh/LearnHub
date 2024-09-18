<?php


declare(strict_types=1);


namespace App\Config;

use App\Controllers\{HomeController, AboutController, AuthController};
use App\Middleware\AuthRequiredMiddleware;
use App\Middleware\GuestOnlyMiddleware;
use Framework\App;

function registerRoutes(App $app)
{
    $app->get('/', [HomeController::class, 'home'], [AuthRequiredMiddleware::class]);
    $app->get('/about', [AboutController::class, 'about']);
    $app->get('/register', [AuthController::class, 'registerView'], [GuestOnlyMiddleware::class]);
    $app->post('/register', [AuthController::class, 'register']);
    $app->get('/login', [AuthController::class, 'loginView'], [GuestOnlyMiddleware::class]);
    $app->post('/login', [AuthController::class, 'login']);
    $app->get('/logout', [AuthController::class, 'logout']);
    // This is how paths with router params are added
    $app->get('/auth/{param1}/something/{param2}', [AuthController::class, 'testParamRoute']);
}
