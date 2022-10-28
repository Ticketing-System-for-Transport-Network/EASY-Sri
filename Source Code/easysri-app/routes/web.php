<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\BusTimeInsertController;
use App\Http\Controllers\BusTimeViewController;

//Admin-Dashboard
Route::get('/admindashboard', [AdminDashboardController::class, 'dashboardview'])->name('admindashboard');

Route::prefix('/bustimeinsert')->group(function () {
    Route::get('/', [BusTimeInsertController::class, "bustimeinsertview"])->name('bustimeinsert');
    Route::post('/store', [BusTimeInsertController::class, "store"])->name('bustimeinsert.store');
});

Route::get('/bustimeview', [BusTimeViewController::class, 'busview'])->name('bustimeview');
