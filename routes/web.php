<?php

use App\Http\Controllers\ReservasiController;
use Illuminate\Support\Facades\Route;

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
