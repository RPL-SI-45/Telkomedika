<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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

