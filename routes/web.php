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

use App\Http\Controllers\LihatrumahsakitController;
use App\Http\Controllers\RumahsakitController;
use App\Http\Controllers\FrontAntrianController;

use App\Http\Controllers\RekammedisController;
use App\Http\Controllers\MedicalRecordController;

use App\Http\Controllers\RatingController;


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

Route::get('/lihatrumahsakit', [LihatrumahsakitController::class, 'indexlihatrs']);

Route::get('/rumahsakit', [RumahsakitController::class, 'index']);
Route::get('/rumahsakit/createrumahsakit', [RumahsakitController::class, 'createrumahsakit']);
Route::post('/rumahsakit/store', [RumahsakitController::class, 'store']);
Route::get('/rumahsakit/{id}/edit', [RumahsakitController::class, 'edit']);
Route::put('/rumahsakit/{id}', [RumahsakitController::class, 'update']);
Route::delete('/rumahsakit/{id}', [RumahsakitController::class, 'destroy']);

Route::get('/login', function () {
     return view('login');
})->name('login');

Route::get('/register', function () {
    return view('Register');
})->name('register');


Route::get('/infotelkomedikapasien', function () {
    return view('infotelkomedika.pasien');
});
Route::get('/infotelkomedikaadmin', function () {
    return view('infotelkomedika.admin');
});


Route::controller(AuthController::class)->group(function () {
    // Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    // Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
    Route::get('logout', 'logout')->middleware('auth')->name('logout');


});

Route::get('/informasi',[informasidokterController::class,'informasi']);

Route::get('/informasidokter',[informasidokterController::class,'index']);
Route::get('/informasidokter/create',[informasidokterController::class,'create']);
Route::post('/informasidokter/store',[informasidokterController::class,'store']);



//Normal Users Routes List
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/profile', [UserController::class, 'userprofile'])->name('profile');
    Route::post('/profile/edit/{id}', [UserController::class, 'update'])->name('update-profile');
});

//Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin/home');
    Route::get('/profiladmin',[AdminController::class,'profilepage']);
    Route::post('/profiladmin/edit/{id}', [AdminController::class, 'update'])->name('update-profiladmin');
    Route::get('/admin/profile', [AdminController::class, 'profilepage'])->name('admin/profile');
    Route::post('/admin/profile/edit/{id}', [AdminController::class, 'update'])->name('admin/profile/edit');
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
Route::get('/createadmin', [antrianController::class, 'createadmin']);
Route::post('/reservasi/create', [antrianController::class, 'store']);
Route::post('/reservasi/store', [antrianController::class, 'storeadmin'])->name("reservasi.store");
Route::post('/antrian/create', [antrianController::class, 'store']);
Route::post('/antrian', [antrianController::class, 'store'])->name("antrian.store");

Route::put('/antrian/{id}', [antrianController::class, 'update']);
Route::get('/antrian/{id}/edit',[antrianController::class, 'edit']);
Route::delete('/antrian/{id}',[antrianController::class, 'destroy']);

Route::get('/antrian/{id}/show',[antrianController::class, 'informasi']);
Route::get('/antrian/{id}/card',[antrianController::class, 'card']);
Route::get('/antrian/{id}', [antrianController::class, 'informasi']);
Route::get('/antrian/show', [antrianController::class,'informasi'])->name("informasi");


Route::get('/rekammedis',[RekammedisController::class, 'index']);
Route::get('/rekammedis/{id}/view',[RekammedisController::class, 'view']);
Route::delete('/rekammedis{id}',[RekammedisController::class, 'destroy']);
Route::put('/rekammedis/{id}/perform', [RekammedisController::class, 'update'])->name('edit-rekammedis.perform');
Route::get('/rekammedis/{id}/view/edit',[RekammedisController::class, 'edit']);

Route::get('medicalrecords/{id}/view', [MedicalRecordController::class, 'index'])->name('record.index');
Route::get('/medicalrecords', [MedicalRecordController::class, 'view'])->name('record.view');

// Route::middleware(['auth'])->group(function () {
//     Route::get('medicalrecords/index', [MedicalRecordController::class, 'index'])->name('record.index');
//     Route::get('medicalrecords/view', [MedicalRecordController::class, 'view'])->name('record.view');
// });


Route::get('/rekammedis/search', [RekammedisController::class, 'search'])->name('rekammedis.search');



Route::get('/rating', [RatingController::class, 'indexrating']);
Route::get('/rating/createrating', [RatingController::class, 'create']);
Route::post('/rating/store', [RatingController::class, 'store'])->name('store-rating')->middleware('auth');
Route::get('/rating/{id}/edit', [RatingController::class, 'edit']);
Route::put('/rating/{id}', [RatingController::class, 'update']);
Route::delete('/rating/{id}', [RatingController::class, 'destroy']);
Route::get('/ratingedit', [RatingController::class, 'indexedit'])->middleware('auth');

Route::get('/resumelayanan', [App\Http\Controllers\ResumeLayananController::class, 'create'])->name('resume.index');
Route::post('/resumelayanan', [App\Http\Controllers\ResumeLayananController::class, 'store'])->name('resume.store');

