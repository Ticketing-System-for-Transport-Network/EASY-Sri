<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserPagesController;

Route::get('user/home', [UserPagesController::class, 'indexuserview'])->name('user.home');