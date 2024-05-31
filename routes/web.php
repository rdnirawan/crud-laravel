<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;
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

Route::get('/karyawan',[KaryawanController::class, 'index'])->name('karyawan');
Route::get('/tambahkaryawan',[KaryawanController::class, 'tambahkaryawan'])->name('tambahkaryawan');
Route::post('/prosesdata',[KaryawanController::class, 'prosesdata'])->name('prosesdata');
