<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\CorsMiddleware;

require_once __DIR__.'/../vendor/autoload.php';

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // $middleware->validateCsrfTokens(except: [
        //     env('APP_URL') . '/researchjspost'
        // ]);
        $middleware->append(CorsMiddleware::class); // Register Cors middleware
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
