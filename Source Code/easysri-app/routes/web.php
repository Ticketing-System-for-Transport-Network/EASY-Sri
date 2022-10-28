<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;

use App\Http\Controllers\UserPagesController;

use App\Http\Controllers\BusTimeInsertController;
use App\Http\Controllers\BusTimeViewController;


//Admin-Dashboard
Route::get('/admindashboard', [AdminDashboardController::class, 'dashboardview'])->name('admindashboard');








//User Dashboard
Route::get('/userdashboard', [UserPagesController::class, 'indexuserdashboard'])->name('userdashboard');
//User Purchase
Route::get('/userpurchase', [UserPagesController::class, 'indexuserpurchase'])->name('userpurchase');
//User Reg and top-up
Route::get('/userRegandTopup', [UserPagesController::class, 'indexuserRegandTopup'])->name('userRegandTopup');

Route::prefix('/bustimeinsert')->group(function () {
    Route::get('/', [BusTimeInsertController::class, "bustimeinsertview"])->name('bustimeinsert');
    Route::post('/store', [BusTimeInsertController::class, "store"])->name('bustimeinsert.store');
});

Route::get('/bustimeview', [BusTimeViewController::class, 'busview'])->name('bustimeview');

