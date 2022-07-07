<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;

Route::group(['middleware' => 'auth'], function(){
    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Staffs
    Route::get('/staffs',[StaffController::class, 'index'])->name('staffs');

    //Departments
    Route::get('/departments', [DepartmentController::class, 'index'])->name('departments');

    //Admin
    Route::get('/admins', [AdminController::class, 'index'])->name('admins');

});

require __DIR__.'/auth.php';
