<?php

use Illuminate\Support\Facades\Route;

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
});

Route::get('/dashboard', function() {
    return view('dashboard.index');
});

Route::get('/dashboard/qc-in', function() {
    return view('dashboard.qc-in.index');
});

Route::get('/dashboard/qc-lane', function() {
    return view('dashboard.qc-lane.index');
});

Route::get('/dashboard/rtrw', function() {
    return view('dashboard.rtrw.index');
});

Route::get('/dashboard/loading-zone', function() {
    return view('dashboard.loading-zone.index');
});

Route::get('/dashboard/laporan-divisi', function() {
    return view('dashboard.laporan.laporan-divisi.index');
});