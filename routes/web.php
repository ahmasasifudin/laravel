<?php

use App\Http\Controllers\LoadingZoneController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\QcinController;
use App\Http\Controllers\QclaneController;
use App\Http\Controllers\RtRwController;

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

Route::get('/', function () {
    return view('login', [
        'title' => 'Login'
    ]);
})->name('login')->middleware('guest');

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/qc-in', QcinController::class)->middleware('auth');

Route::get('/dashboard/qc-lane', [QclaneController::class, 'index'])->middleware('auth');
Route::get('/dashboard/qc-lane/model/{id}', [QclaneController::class, 'getData'])->middleware('auth');
Route::post('/dashboard/qc-lane', [QclaneController::class, 'tambah'])->middleware('auth');

Route::get('/dashboard/rtrw', [RtRwController::class, 'index'])->middleware('auth');
Route::get('/dashboard/rtrw/model/{id}', [RtRwController::class, 'getData'])->middleware('auth');
Route::post('/dashboard/rtrw', [RtRwController::class, 'tambah'])->middleware('auth');

Route::get('/dashboard/loading-zone', [LoadingZoneController::class, 'index'])->middleware('auth');
Route::get('/dashboard/loading-zone/model/{id}', [LoadingZoneController::class, 'getData'])->middleware('auth');
Route::post('/dashboard/loading-zone', [LoadingZoneController::class, 'tambah'])->middleware('auth');

Route::get('/dashboard/laporan-divisi', function() {
    return view('dashboard.laporan.laporan-divisi.index');
})->middleware('auth');

Route::post('/', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);