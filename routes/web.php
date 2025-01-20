<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});




Route::get('admin/dashboard',[DashboardController::class,'dashboardPage'])->name('dashboard');