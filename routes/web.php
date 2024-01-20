<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
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

Route::middleware('auth')->group(function () {
    Route::get('/', [BarangController::class, 'index']);
    Route::get('/create', [BarangController::class, 'create']);
    Route::post('/store', [BarangController::class, 'store']);
    Route::get('/delete/{barang}', [BarangController::class, 'delete']);
    Route::get('/edit/{barang}', [BarangController::class, 'edit']);
    Route::post('/update/{barang}', [BarangController::class, 'update']);
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
});
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
