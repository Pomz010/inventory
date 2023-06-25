<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HardwareController;
use App\Http\Controllers\MovementController;
use App\Http\Controllers\DepartmentController;


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

Route::get('/', [LoginController::class, 'index'])->name('dashboard');
Route::post('/', [LoginController::class, 'login']);
Route::get('/signout', [LoginController::class, 'signout']);

Route::get('/assets', [AssetController::class, 'show'])->name('show-assets');
Route::get('/create-asset/{asset}', [AssetController::class, 'create'])->name('create-asset');
Route::get('/create-hardware', [HardwareController::class, 'create'])->name('hardware');
Route::get('/department', [DepartmentController::class, 'show'])->name('department');
