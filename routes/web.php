<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('notification')->group(function() {
    Route::get('/', [NotificationController::class, 'index'])->name('notification');
    Route::get('/show/{id}', [NotificationController::class, 'show'])->name('notification.show');

    Route::get('/create', [NotificationController::class, 'create'])->name('notification.create');
    Route::post('/store', [NotificationController::class, 'store'])->name('notification.store');

    Route::get('/edit/{id}', [NotificationController::class, 'edit'])->name('notification.edit');
    Route::put('/update/{id}', [NotificationController::class, 'update'])->name('notification.update');
});