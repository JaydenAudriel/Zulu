<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\IPNController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\LogsController;
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

/**
 * NORMAL APP ROUTES
 */
Route::get('/', [HomeController::class, 'index'])->name('app.home');
Route::get('/failure', [HomeController::class, 'failure'])->name('app.failure');
Route::get('/success', [HomeController::class, 'success'])->name('app.success');

/**
 * IPN ROUTES
 */
Route::post('/app/buy', [FormController::class, 'handleForm'])->name('app.buy')->middleware('throttle:40,1');
Route::post('/app/ipn', [IPNController::class, 'ipn'])->name('app.ipn');

/**
 * ADMIN ZONE
 */
Route::get('/admin', [AdminController::class, 'loginForm'])->name('admin.login');
Route::post('/admin', [AdminController::class, 'login'])->name('admin.login')->middleware('throttle:40,1');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::group(['middleware' => 'isAdmin'], function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    
    Route::resource('/admin/payments', PaymentsController::class)->only([
        'create', 'destroy', 'store'
    ]);
    Route::resource('/admin/logs', LogsController::class)->only([
        'index'
    ]);
});
