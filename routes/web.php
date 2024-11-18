<?php

use App\Http\Controllers\TestUsersController;
use App\Http\Controllers\TestDataController;
use App\Http\Controllers\ValidationTestController;
use App\Http\Controllers\DataStoreController;
use App\Http\Controllers\SuccessController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('toets');
// });

// Route::get('/',[InvoiceController::class, 'index'] );
// Route::get('/',[InvoiceController::class, 'index'] );
Route::get('/',[TestUsersController::class, 'index'] );
Route::get('/',[TestDataController::class, 'index'] );
Route::get('/',[ValidationTestController::class, 'index'] );
Route::get('/',[DataStoreController::class, 'index'] );
Route::get('/',[SuccessController::class, 'index'] );

