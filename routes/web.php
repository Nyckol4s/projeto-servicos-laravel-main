<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NotificationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/notify', [NotificationController::class, 'notify']);
Route::get('/dashboard', [DashboardController::class, 'index']);