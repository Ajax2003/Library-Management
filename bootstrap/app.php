<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->redirectTo(
            guests:'/account/login',    //Whenever a person is not logged in, they can not access user dashboard through URL
            users: '/account/dashboard' //Users can go in the dashboard when they type it in the URL
        );

    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
