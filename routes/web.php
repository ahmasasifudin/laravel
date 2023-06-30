<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\QcinController;
use App\Http\Controllers\QclaneController;

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

Route::resource('/dashboard/qc-lane', QclaneController::class)->middleware('auth');
Route::get('kodeVin', [QclaneController::class, 'vin'])->name('vin.index');

Route::get('/dashboard/rtrw', function() {
    return view('dashboard.rtrw.index');
})->middleware('auth');

Route::get('/dashboard/loading-zone', function() {
    return view('dashboard.loading-zone.index');
})->middleware('auth');

Route::get('/dashboard/laporan-divisi', function() {
    return view('dashboard.laporan.laporan-divisi.index');
})->middleware('auth');

Route::post('/', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);