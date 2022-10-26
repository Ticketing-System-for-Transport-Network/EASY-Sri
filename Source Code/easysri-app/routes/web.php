<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;

//Admin-Dashboard
Route::get('/admindashboard', [AdminDashboardController::class, 'dashboardview'])->name('admindashboard');