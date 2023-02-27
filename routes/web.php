<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\TanggapanController;
use App\Http\Controllers\PetugasController;

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

Route::get('/dashboard', function () {
    return view('index');
});

Route::controller(PetugasController::class)->group(function() {
    Route::get('/petugas', 'index');
    Route::get('/petugas/add', 'getAddPetugas');
    Route::post('/petugas/store', 'postAddPetugas');
    Route::get('/petugas/edit/{id}', 'getEditPetugas');
    Route::post('/petugas/update', 'postEditPetugas');
    Route::get('/petugas/delete/{id}', 'deletePetugas');
});
