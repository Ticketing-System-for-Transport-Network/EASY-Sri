<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\UserPagesController;

//Admin-Dashboard
Route::get('/admindashboard', [AdminDashboardController::class, 'dashboardview'])->name('admindashboard');








//User Dashboard
Route::get('/userdashboard', [UserPagesController::class, 'indexuserdashboard'])->name('userdashboard');