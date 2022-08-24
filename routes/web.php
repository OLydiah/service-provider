<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\pagesController;
use App\Http\Controllers\serviceRequestsController;

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::resource('service', serviceRequestsController::class);

//webapp
Route::get('/', [App\Http\Controllers\pagesController::class, 'homePage'])->name('homePage');
Route::get('/browse-talent', [App\Http\Controllers\serviceRequestsController::class, 'browse'])->name('browse');
Route::get('/cliLogin', [App\Http\Controllers\pagesController::class, 'cliLogin'])->name('cliLogin');
// add service to database
Route::post('/addService/{id}', [App\Http\Controllers\serviceRequestsController::class, 'addService']);
Route::post('/approveService/{id}', [App\Http\Controllers\serviceRequestsController::class, 'approveService']);

// admin
Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/pendingApproval', [App\Http\Controllers\pagesController::class, 'pendingApproval'])->name('pendingApproval');
Route::get('/approved', [App\Http\Controllers\pagesController::class, 'approved'])->name('approved');

Route::post('edit-service', [App\Http\Controllers\pagesController::class, 'store']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
