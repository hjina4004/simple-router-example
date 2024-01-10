<?php

use App\Exceptions\Handler;
use App\Http\Controllers\HomeController;
use Pecee\SimpleRouter\SimpleRouter;

$settings = ['prefix' => '/cafe24-apps/ex-simple-router/public', 'exceptionHandler' => Handler::class];
SimpleRouter::group($settings, function () {
  SimpleRouter::get('/', [HomeController::class, 'index'])->name('home');

  SimpleRouter::get('/home', function () {
    return 'home';
  });
});

// echo '<pre>';
// var_dump(SimpleRouter::router()->getRoutes());
// echo '</pre>';
SimpleRouter::start();
