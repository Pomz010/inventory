<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HardwareController;
use App\Http\Controllers\MovementController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LoginController::class, 'index']);
Route::post('/', [LoginController::class, 'login']);
Route::get('/signout', [LoginController::class, 'signout']);

Route::get('/create-movement', [MovementController::class, 'create'])->name('asset-movement');
Route::get('/create-hardware', [HardwareController::class, 'create'])->name('hardware');
