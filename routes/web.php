<?php

use App\Models\Department;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HardwareController;
use App\Http\Controllers\MovementController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\BusinessUnitController;
use App\Http\Controllers\PreviousPageController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
// Accessing Homepage after loging in
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/signout', [DashboardController::class, 'signout']);
Route::post('/', [DashboardController::class, 'login']);

Route::get('/assets', [HardwareController::class, 'index'])->name('assets.index');
// Route::get('/assets/create', [HardwareController::class, 'create'])->name('assets.create');
Route::get('/assets/{asset}/create', [HardwareController::class, 'create'])->name('assets.create');
Route::post('/assets/store', [HardwareController::class, 'store'])->name('assets.store');
Route::get('/assets/{asset}/edit', [HardwareController::class, 'edit'])->name('assets.edit');
Route::put('/assets/{asset}', [HardwareController::class, 'update'])->name('assets.update');
Route::delete('/assets/{asset}', [HardwareController::class, 'destroy'])->name('assets.destroy');

Route::get('/redirect', [PreviousPageController::class, 'returnToPreviousPage'])->name('redirect');

// Route::get('/', [LoginController::class, 'index'])->name('dashboard');
// Route::post('/', [LoginController::class, 'login']);
// Route::get('/signout', [LoginController::class, 'signout']);

// Route::get('/assets', [AssetController::class, 'index'])->name('assets.index');
// Route::get('/create-asset/{asset}', [AssetController::class, 'create'])->name('create-asset');
// Route::post('/create-asset/laptop', [AssetController::class, 'store'])->name('create-asset.store');

// Route::get('/create-hardware', [HardwareController::class, 'create'])->name('hardware');
// Route::get('/department', [DepartmentController::class, 'index'])->name('department.index');

// Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
// Route::get('/create-employee', [EmployeeController::class, 'create'])->name('create-employee');
// Route::post('/create-employee', [EmployeeController::class, 'store'])->name('create-employee.store');
// Route::get('/users', [UserController::class, 'index'])->name('users.index');
// Route::get('/create-user', [UserController::class, 'create'])->name('user.create');
// Route::post('/create-user', [UserController::class, 'store'])->name('user.store');

// Route::get('/vendors', [VendorController::class, 'index'])->name('vendors.index');
// Route::post('/create-vendor', [VendorController::class, 'store'])->name('vendors.store');
// Route::get('/create-vendor', [VendorController::class, 'create'])->name('create-vendor');

// Route::get('/create-department/{department}', [DepartmentController::class, 'create'])->name('create-department');
// Route::post('/create-department/business-unit', [BusinessUnitController::class, 'store'])->name('business-unit.store');
// Route::post('/create-department/department', [DepartmentController::class, 'store'])->name('department.store');
// Route::post('/create-department/section', [SectionController::class, 'store'])->name('section.store');
