<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\DataPenggunaController;
use App\Http\Controllers\DataKabController;
use App\Http\Controllers\DataKecController;
use App\Http\Controllers\DataDesaController;

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

/* ojo lali nek setiap gawe route Controller e di import di dadi ke namespace
ex: use App\Http\Controllers\DataPenggunaController; di delehke neng paling duwur */

Route::get('/', function () {
    return view('dashboard');
});

/* Route Data Pengguna */
Route::get('/pengguna', [DataPenggunaController::class, 'index']);

/* Route Data Kabupaten */
Route::get('/datakab', [DataKabController::class, 'index']);
Route::get('/datakab/create', [DataKabController::class, 'create']);
Route::post('/datakab', [DataKabController::class, 'store']);

/* Route Data Kecamatan */
Route::get('/datakec', [DataKecController::class, 'index']);

/* Route Data Desa */
Route::get('/datadesa', [DataDesaController::class, 'index']);
