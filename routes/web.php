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
    return view('welcome');
});

Route::view('/dashboard', 'layout.dashboard');
Route::view('/masteruser-web', 'layout.masteruser_web');
Route::view('/masteruser-mbl', 'layout.masteruser_mbl');
Route::view('/proses-klaim-garansi', 'layout.proses_klaimgaransi');
