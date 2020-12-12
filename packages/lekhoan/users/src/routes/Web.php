<?php

use Illuminate\Support\Facades\Route;
use lekhoan\users\Controller\userController;
Route::get('/test', function () {
    return view('users::xinchao');
});

Route::get('/demo-packages-private', [userController::class, 'index']);
