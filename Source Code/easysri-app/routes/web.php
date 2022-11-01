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
use App\Http\Controllers\InvalidTicketController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\CardController;



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

//User Dashboard
Route::get('/', [Esay_SriHomeController::class, 'indexuserdashboard'])->name('userdashboard');

//User Purchase
Route::get('/userpurchase', [UserPagesController::class, 'indexuserpurchase'])->name('userpurchase');
Route::post('/savetopup', [UserPaymentsController::class, 'storetopup'])->name('storeusertopup');
Route::post('/updateUser/{userregid}', [UserRegandTopupController::class, 'updateUser'])->name('updateUser');
    
//User Reg and top-up
Route::get('/userRegandTopup', [UserPagesController::class, 'indexuserRegandTopup'])->name('userRegandTopup');
Route::post('/saveuser', [UserRegandTopupController::class, 'storeuser'])->name('storeuserreg');

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

//Overcrowd-Networks-View
Route::get('/crowdview', [OvercrowdNetworkController::class, 'networkview'])->name('crowdview');


//Invalid-Tickets-View
Route::get('/ticketview', [InvalidTicketController::class, 'checkvalid'])->name('ticketview');

//Finance-View
Route::get('/financeview', [FinanceController::class, 'calculate'])->name('financeview');

//Report-View
Route::get('/reportview', [ReportController::class, 'generate'])->name('reportview');

//Smart-Card-View
Route::get('/cardview', [CardController::class, 'view'])->name('cardview');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

