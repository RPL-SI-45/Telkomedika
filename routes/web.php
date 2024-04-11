<?php

use App\Http\Controllers\informasidokterController;
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

Route::get('/informasidokter',[informasidokterController::class,'index']);
Route::get('/informasidokter/create',[informasidokterController::class,'create']);
Route::post('/informasidokter/store',[informasidokterController::class,'store']);
Route::get('/informasidokter/{id}/edit',[informasidokterController::class,'edit']);
Route::put('/informasidokter/{id}',[informasidokterController::class,'update']);
Route::delete('/informasidokter/{id}',[informasidokterController::class,'destroy']);


