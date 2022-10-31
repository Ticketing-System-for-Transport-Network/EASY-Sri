<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\BusTimeInsertController;
use App\Http\Controllers\BusTimeViewController;
use App\Http\Controllers\OvercrowdNetworkController;
use App\Http\Controllers\InvalidTicketController;


//Admin-Dashboard
Route::get('/admindashboard', [AdminDashboardController::class, 'dashboardview'])->name('admindashboard');

//Bus-Time-Insert
Route::prefix('/bustimeinsert')->group(function () {
    Route::get('/', [BusTimeInsertController::class, "bustimeinsertview"])->name('bustimeinsert');
    Route::post('/store', [BusTimeInsertController::class, "store"])->name('bustimeinsert.store');
});

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

