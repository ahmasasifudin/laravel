<?php

use App\Http\Controllers\GenerateController;
use App\Http\Controllers\LaporanDivisiController;
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

Route::get('/', [LoginController::class, 'dashboard'])->middleware('auth');

Route::get('/dashboard/qc-in', [QcinController::class, 'index'])->middleware('auth');
Route::post('/dashboard/qc-in', [QcinController::class, 'store'])->middleware('auth');

Route::get('/dashboard/qc-in/image', [GenerateController::class, 'tampilProcessImage'])->middleware('auth');
Route::post('/dashboard/qc-in/image', [GenerateController::class, 'processImage'])->middleware('auth');

Route::get('/dashboard/qc-lane', [QclaneController::class, 'index'])->middleware('auth');
Route::get('/dashboard/qc-lane/model/{id}', [QclaneController::class, 'getData'])->middleware('auth');
Route::post('/dashboard/qc-lane/simpan', [QclaneController::class, 'tambah'])->middleware('auth');

Route::get('/dashboard/rtrw', [RtRwController::class, 'index'])->middleware('auth');
Route::get('/dashboard/rtrw/model/{id}', [RtRwController::class, 'getData'])->middleware('auth');
Route::post('/dashboard/rtrw', [RtRwController::class, 'tambah'])->middleware('auth');

Route::get('/dashboard/laporan-divisi', [LaporanDivisiController::class, 'index'])->middleware('auth');
Route::get('/dashboard/laporan-divisi/qc-in', [LaporanDivisiController::class, 'indexQcIn'])->middleware('auth');
Route::get('/dashboard/laporan-divisi/qc-lane', [LaporanDivisiController::class, 'indexQcLane'])->middleware('auth');
Route::get('/dashboard/laporan-divisi/rtrw', [LaporanDivisiController::class, 'indexRtRw'])->middleware('auth');

Route::get('/dashboard/laporan-keseluruhan/', [LaporanDivisiController::class, 'indexAll'])->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);