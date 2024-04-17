<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;


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

//Normal Users Routes List
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/profile', [UserController::class, 'userprofile'])->name('profile');
});
 
//Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin/home');
 
    Route::get('/admin/profile', [AdminController::class, 'profilepage'])->name('admin/profile');
 
    Route::get('/admin/products', [ProductController::class, 'index'])->name('admin/products');
    Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin/products/create');
    Route::post('/admin/products/store', [ProductController::class, 'store'])->name('admin/products/store');
    Route::get('/admin/products/show/{id}', [ProductController::class, 'show'])->name('admin/products/show');
    Route::get('/admin/products/edit/{id}', [ProductController::class, 'edit'])->name('admin/products/edit');
    Route::put('/admin/products/edit/{id}', [ProductController::class, 'update'])->name('admin/products/update');
    Route::delete('/admin/products/destroy/{id}', [ProductController::class, 'destroy'])->name('admin/products/destroy');
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
