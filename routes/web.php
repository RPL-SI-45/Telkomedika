<?php


use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\antrianController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PoliController;
use App\Http\Controllers\PolipasienController;
use App\Http\Controllers\FrontAntrianController;

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

Route::get('/reservasi/create', [ReservasiController::class, "create"]);
Route::post('/reservasi/store', [ReservasiController::class, "store"]);
Route::put('/reservasi/{id}', [ReservasiController::class, "update"]);
Route::delete('/reservasi/{id}', [ReservasiController::class, "destroy"]);
Route::get('/polipasien', [PolipasienController::class, 'index']);

Route::get('/poli', [PoliController::class, 'index']);
Route::get('/poli/create', [PoliController::class, 'create']);
Route::post('/poli/store', [PoliController::class, 'store']);
Route::get('/poli/{id}/edit', [PoliController::class, 'edit']);
Route::put('/poli/{id}', [PoliController::class, 'update']);
Route::delete('/poli/{id}', [PoliController::class, 'destroy']);

Route::get('/', [antrianController::class, 'welcome'])->name("antrian.home");
Route::get('/antrian', [antrianController::class, 'index'])->name("antrian.home");

Route::get('/antrian/create', function () {
    return view('layouts.create'); })->name("antrian.create");

Route::post('/antrian/create', [antrianController::class, 'store'])->name("antrian.home");
Route::get('/antrian/{id}/edit',[antrianController::class, 'edit']);
Route::put('/antrian/{id}',[antrianController::class, 'update']);
Route::delete('/antrian/{id}',[antrianController::class, 'destroy']);

Route::get('/antrian/{id}/show',[antrianController::class, 'informasi']);
Route::get('/antrian/{id}/card',[antrianController::class, 'card']);
Route::get('/antrian/{id}', [antrianController::class, 'informasi']);


Route::get('/antrian/show', [antrianController::class,'informasi'])->name("informasi");
