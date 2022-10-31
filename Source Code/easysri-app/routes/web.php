<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;


use App\Http\Controllers\UserPagesController;
use App\Http\Controllers\UserRegandTopupController;
use App\Http\Controllers\UserPaymentsController;
use App\Http\Controllers\Esay_SriHomeController;



use App\Http\Controllers\BusTimeInsertController;
use App\Http\Controllers\BusTimeViewController;
use App\Http\Controllers\OvercrowdNetworkController;


//Admin-Dashboard
Route::get('/admindashboard', [AdminDashboardController::class, 'dashboardview'])->name('admindashboard');




//Bus-Time-Insert

Route::prefix('/bustimeinsert')->group(function () {
    Route::get('/', [BusTimeInsertController::class, "bustimeinsertview"])->name('bustimeinsert');
    Route::post('/store', [BusTimeInsertController::class, "store"])->name('bustimeinsert.store');
});


Route::get('/bustimeview', [BusTimeViewController::class, 'busview'])->name('bustimeview');




Auth::routes();
Route::get('/dashboard', [UserPagesController::class, 'indexdashboard'])->name('dashboard'); 


//User Dashboard
Route::get('/', [Esay_SriHomeController::class, 'indexuserdashboard'])->name('userdashboard');

//User Purchase
Route::get('/userpurchase', [UserPagesController::class, 'indexuserpurchase'])->name('userpurchase');
//save top-up purchase
Route::post('/savetopup', [UserPaymentsController::class, 'storetopup'])->name('storeusertopup');

//User Reg and top-up
Route::get('/userRegandTopup', [UserPagesController::class, 'indexuserRegandTopup'])->name('userRegandTopup');
//user reg and top up store
Route::post('/saveuser', [UserRegandTopupController::class, 'storeuser'])->name('storeuserreg');





//Bus-Time-View
Route::prefix('/bustimeview')->group(function () {
    Route::get('/', [BusTimeViewController::class, "bustimetableview"])->name('bustimeview');
    Route::get('/edit', [BusTimeViewController::class, "edit"])->name('bustimeview.edit');
    Route::post('/{bus_id}/update', [BusTimeViewController::class, "update"])->name('bustimeview.update');
    Route::get('/{bus_id}/delete', [BusTimeViewController::class, "delete"])->name('bustimeview.delete');
    Route::get('/{bus_id}/done', [BusTimeViewController::class, "done"])->name('bustimeview.done');
});

//Overcrowd-Networks-View
Route::get('/crowdview', [OvercrowdNetworkController::class, 'networkview'])->name('crowdview');


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
