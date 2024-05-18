<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;



use App\Http\Controllers\informasidokterController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\antrianController;

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
    return view('login');
})->name('login');

Route::get('/about', [UserController::class, 'about'])->name('about');


Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
    

});

Route::get('/informasi',[informasidokterController::class,'informasi']);

Route::get('/informasidokter',[informasidokterController::class,'index']);
Route::get('/informasidokter/create',[informasidokterController::class,'create']);
Route::post('/informasidokter/store',[informasidokterController::class,'store']);
Route::get('/informasidokter/{id}/edit',[informasidokterController::class,'edit']);
Route::put('/informasidokter/{id}',[informasidokterController::class,'update']);
Route::delete('/informasidokter/{id}',[informasidokterController::class,'destroy']);



//Normal Users Routes List
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/profile', [UserController::class, 'userprofile'])->name('profile');
});

//Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin/home');

    Route::get('/admin/profile', [AdminController::class, 'profilepage'])->name('admin/profile');
});


Route::get('/polipasien', [PolipasienController::class, 'index']);
Route::get('/poli', [PoliController::class, 'index']);
Route::get('/poli/create', [PoliController::class, 'create']);
Route::post('/poli/store', [PoliController::class, 'store']);
Route::get('/poli/{id}/edit', [PoliController::class, 'edit']);
Route::put('/poli/{id}', [PoliController::class, 'update']);
Route::delete('/poli/{id}', [PoliController::class, 'destroy']);


Route::get('/', function() {
    return view('welcome');
});
Route::get('/antrian',  [antrianController::class, 'informasi']);
Route::post('/antrian/store', [antrianController::class, 'store']);


Route::get('/daftarreservasi', [antrianController::class, 'index']);
Route::get('/reservasi/create', [antrianController::class, 'create']);
Route::post('/reservasi/create', [antrianController::class, 'store']);
Route::post('/reservasi/store', [antrianController::class, 'store']);
Route::post('/antrian/create', [antrianController::class, 'store']);
Route::post('/antrian', [antrianController::class, 'store'])->name("antrian.store");

Route::put('/antrian/{id}', [antrianController::class, 'update']);
Route::get('/antrian/{id}/edit',[antrianController::class, 'edit']);
Route::delete('/antrian/{id}',[antrianController::class, 'destroy']);

Route::get('/antrian/{id}/show',[antrianController::class, 'informasi']);
Route::get('/antrian/{id}/card',[antrianController::class, 'card']);
Route::get('/antrian/{id}', [antrianController::class, 'informasi']);
Route::get('/antrian/show', [antrianController::class,'informasi'])->name("informasi");

