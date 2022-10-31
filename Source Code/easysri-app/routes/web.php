<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;


use App\Http\Controllers\UserPagesController;
use App\Http\Controllers\UserRegandTopupController;
use App\Http\Controllers\UserPaymentsController;
use App\Http\Controllers\Esay_SriHomeController;



use App\Http\Controllers\BusTimeInsertController;
use App\Http\Controllers\BusTimeViewController;


//home dashboard
Auth::routes();
Route::get('/dashboard', [UserPagesController::class, 'indexdashboard'])->name('dashboard'); 


//Admin-Dashboard
Route::get('/admindashboard', [AdminDashboardController::class, 'dashboardview'])->name('admindashboard');




//Bus-Time-Insert

Route::prefix('/bustimeinsert')->group(function () {
    Route::get('/', [BusTimeInsertController::class, "bustimeinsertview"])->name('bustimeinsert');
    Route::post('/store', [BusTimeInsertController::class, "store"])->name('bustimeinsert.store');
});


Route::get('/bustimeview', [BusTimeViewController::class, 'busview'])->name('bustimeview');






//User Dashboard
Route::get('/', [Esay_SriHomeController::class, 'indexuserdashboard'])->name('userdashboard');

//User Purchase
Route::prefix('/payments')->group(function () {
    Route::get('/userpurchase', [UserPagesController::class, 'indexuserpurchase'])->name('userpurchase');
    Route::post('/savetopup', [UserPaymentsController::class, 'storetopup'])->name('storeusertopup');
});

//User Reg and top-up
Route::prefix('/register')->group(function () {
    Route::get('/userRegandTopup', [UserPagesController::class, 'indexuserRegandTopup'])->name('userRegandTopup');
    Route::post('/saveuser', [UserRegandTopupController::class, 'storeuser'])->name('storeuserreg');
});

//User timetable
Route::get('/userschedule', [UserPagesController::class, 'indexuseruserschedule'])->name('useruserschedule');

//userfare display
Route::get('/userfare', [UserPagesController::class, 'indexuserfare'])->name('userfare');





//Bus-Time-View
Route::prefix('/bustimeview')->group(function () {
    Route::get('/', [BusTimeViewController::class, "bustimetableview"])->name('bustimeview');
    Route::get('/edit', [BusTimeViewController::class, "edit"])->name('bustimeview.edit');
    Route::post('/{bus_id}/update', [BusTimeViewController::class, "update"])->name('bustimeview.update');
    Route::get('/{bus_id}/delete', [BusTimeViewController::class, "delete"])->name('bustimeview.delete');
    Route::get('/{bus_id}/done', [BusTimeViewController::class, "done"])->name('bustimeview.done');
}); 

