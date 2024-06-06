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
use App\Http\Controllers\ResumeLayananController;

// Halaman Awal
Route::get('/', function() {
    return view('welcome');
});

// Register
Route::get('/register', function () {
    return view('Register');
})->name('register');

// Login
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::controller(AuthController::class)->group(function () {
    Route::post('register', 'registerSave')->name('register.save');
    Route::post('login', 'loginAction')->name('login.action');
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

// Profil Pasien
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/profile', [UserController::class, 'userprofile'])->name('profile');
    Route::post('/profile/edit/{id}', [UserController::class, 'update'])->name('update-profile');
});

// Profil Admin
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin/home');
    Route::get('/profiladmin', [AdminController::class, 'profilepage']);
    Route::post('/profiladmin/edit/{id}', [AdminController::class, 'update'])->name('update-profiladmin');
    Route::get('/admin/profile', [AdminController::class, 'profilepage'])->name('admin/profile');
    Route::post('/admin/profile/edit/{id}', [AdminController::class, 'update'])->name('admin/profile/edit');
});

// Artikel Dashboard
Route::get('/infotelkomedikapasien', function () {
    return view('infotelkomedika.pasien');
});

Route::get('/infotelkomedikaadmin', function () {
    return view('infotelkomedika.admin');
});

// Lihat Rumah Sakit (Pasien)
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/lihatrumahsakit', [LihatrumahsakitController::class, 'indexlihatrs']);
});

// Kelola Rumah Sakit (Admin)
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/rumahsakit', [RumahsakitController::class, 'index']);
    Route::get('/rumahsakit/createrumahsakit', [RumahsakitController::class, 'createrumahsakit']);
    Route::post('/rumahsakit/store', [RumahsakitController::class, 'store']);
    Route::get('/rumahsakit/{id}/edit', [RumahsakitController::class, 'edit']);
    Route::put('/rumahsakit/{id}', [RumahsakitController::class, 'update']);
    Route::delete('/rumahsakit/{id}', [RumahsakitController::class, 'destroy']);
});

// Lihat Informasi Dokter (Pasien)
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/informasi', [informasidokterController::class, 'informasi']);
});

// Kelola Informasi Dokter (Admin)
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/informasidokter', [informasidokterController::class, 'index']);
    Route::get('/informasidokter/create', [informasidokterController::class, 'create']);
    Route::post('/informasidokter/store', [informasidokterController::class, 'store']);
    Route::get('/informasidokter/{id}/edit', [informasidokterController::class, 'edit']);
    Route::put('/informasidokter/{id}', [informasidokterController::class, 'update']);
    Route::delete('/informasidokter/{id}', [informasidokterController::class, 'destroy']);
});

// Lihat Informasi Poli (Pasien)
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/polipasien', [PolipasienController::class, 'index']);
});

// Kelola Informasi Poli (Admin)
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/poli', [PoliController::class, 'index']);
    Route::get('/poli/create', [PoliController::class, 'create']);
    Route::post('/poli/store', [PoliController::class, 'store']);
    Route::get('/poli/{id}/edit', [PoliController::class, 'edit']);
    Route::put('/poli/{id}', [PoliController::class, 'update']);
    Route::delete('/poli/{id}', [PoliController::class, 'destroy']);
});

// Antrian Pasien
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/antrian', [antrianController::class, 'informasi']);
    Route::post('/antrian', [antrianController::class, 'store'])->name("antrian.store");
    Route::post('/antrian/store', [antrianController::class, 'store']);
    Route::get('/reservasi/create', [antrianController::class, 'create']);
    Route::post('/reservasi/create', [antrianController::class, 'store']);
    Route::get('/antrian/{id}/show', [antrianController::class, 'informasi']);
    Route::get('/antrian/{id}/card', [antrianController::class, 'card']);
    Route::get('/antrian/{id}', [antrianController::class, 'informasi']);
    Route::get('/antrian/show', [antrianController::class, 'informasi'])->name("informasi");
});

// Antrian Admin
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/daftarreservasi', [antrianController::class, 'index']);
    Route::get('/createadmin', [antrianController::class, 'createadmin']);
    Route::post('/reservasi/store', [antrianController::class, 'storeadmin'])->name("reservasi.store");
    Route::post('/antrian/create', [antrianController::class, 'store']);
    Route::put('/antrian/{id}', [antrianController::class, 'update']);
    Route::get('/antrian/{id}/edit', [antrianController::class, 'edit']);
    Route::delete('/antrian/{id}', [antrianController::class, 'destroy']);
    Route::get('/antrian/{id}/showadmin', [antrianController::class, 'informasiadmin']);
    Route::get('/antrian/{id}/cardadmin', [antrianController::class, 'cardadmin']);
});

// Lihat Rekam Medis (Pasien)
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('medicalrecords/{id}/view', [MedicalRecordController::class, 'index'])->name('record.index');
    Route::get('/medicalrecords', [MedicalRecordController::class, 'view'])->name('record.view');
});

// Kelola Rekam Medis (Admin)
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/rekammedis', [RekammedisController::class, 'index']);
    Route::get('/rekammedis/{id}/view', [RekammedisController::class, 'view']);
    Route::delete('/rekammedis/{id}', [RekammedisController::class, 'destroy']);
    Route::put('/rekammedis/{id}/perform', [RekammedisController::class, 'update'])->name('edit-rekammedis.perform');
    Route::get('/rekammedis/{id}/view/edit', [RekammedisController::class, 'edit']);
});

// Rekam Medis Search
Route::get('/rekammedis/search', [RekammedisController::class, 'search'])->name('rekammedis.search');

// Notifikasi
Route::get('/notify', function() {
    notify()->success('Login Berhasil');
    return view('notify');
});

// Notifikasi (Admin)
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/notifadmin', [antrianController::class, 'notifadmin']);
});

// Notifikasi (Pasien)
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/notifikasi', [antrianController::class, 'notifikasi']);
    Route::get('/notifikasibaru', [antrianController::class, 'notifikasibaru']);
});

// Lihat Rating (Admin)
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/ratingadmin', [RatingController::class, 'indexratingadmin']);
});

// Rating (Pasien)
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/rating', [RatingController::class, 'indexrating']);
    Route::get('/rating/createrating', [RatingController::class, 'create']);
    Route::post('/rating/store', [RatingController::class, 'store'])->name('store-rating');
    Route::get('/rating/{id}/edit', [RatingController::class, 'edit']);
    Route::put('/rating/{id}', [RatingController::class, 'update']);
    Route::delete('/rating/{id}', [RatingController::class, 'destroy']);
    Route::get('/ratingedit', [RatingController::class, 'indexedit']);
});

// Resume Layanan (Admin)
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/resumelayanan', [ResumeLayananController::class, 'index']);
    Route::get('/resumelayanan/create', [ResumeLayananController::class, 'create']);
    Route::post('/resumelayanan/store', [ResumeLayananController::class, 'store'])->name('resume.store');
    Route::get('/resumelayanan/{id}/edit', [ResumeLayananController::class, 'edit']);
    Route::put('/resumelayanan/{id}', [ResumeLayananController::class, 'update']);
    Route::delete('/resumelayanan/{id}', [ResumeLayananController::class, 'destroy']);
    Route::get('/resumelayanan/viewresume/{id}', [ResumeLayananController::class, 'viewresume']);
});
