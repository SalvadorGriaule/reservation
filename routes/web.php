<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\TrajetController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(UserController::class)->group(function () {
    Route::get('/subscribe', 'subPage');
    Route::post('/subscribe', 'subscribe');
    Route::get('/login', 'authPage')->name('login');
    Route::post('/login', 'auth');
});

Route::controller(AdminController::class)->prefix('Admin')->group(function () {
    Route::get('/login', 'login');
    Route::post('/login', 'authAdmin');
});

Route::controller(TrajetController::class)->prefix('Trajet')->group(function () {
    Route::get('/', 'index');
    Route::middleware(['auth:admin'])->group(function () {
        Route::get('/create', 'create');
        Route::post('/create', 'store');
    });
});

Route::controller(ReservationController::class)->middleware('auth')->prefix('Reservation')->group(function () {
    Route::get('/', "index");
    Route::get('/create', "create");
    Route::post('/create', "store");
});
