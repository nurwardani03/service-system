<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TamanController;
use App\Http\Controllers\PemeliharaanController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\KarierController;
use App\Http\Controllers\PermintaanLayananController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/tentang-kami', function () {
    return view('pages.tentang-kami');
})->name('tentang-kami');


Route::get('/taman', [TamanController::class, 'index'])->name('taman');
Route::get('/taman/perawatan', function () {
    return view('pages.taman.perawatan');
});
Route::get('/taman/instalasi', function () {
    return view('pages.taman.instalasi');
});
Route::get('/taman/topiari', function () {
    return view('pages.taman.topiari');
});

Route::get('/pemeliharaan', [PemeliharaanController::class, 'index'])
    ->name('pemeliharaan');
Route::get('/pemeliharaan/hvac', function () {
    return view('pages.pemeliharaan.hvac');
});
Route::get('/pemeliharaan/lampu', function () {
    return view('pages.pemeliharaan.lampu');
});
Route::get('/pemeliharaan/elektrikal', function () {
    return view('pages.pemeliharaan.elektrikal');
});

Route::get('/driver', [DriverController::class, 'index'])->name('driver');
Route::get('/driver/antar-jemput', function () {
    return view('pages.driver.antar-jemput');
});
Route::get('/driver/supir-pribadi', function () {
    return view('pages.driver.supir-pribadi');
});

Route::get('/karier', [KarierController::class, 'index'])->name('karier');
Route::post('/karier/kirim', [KarierController::class, 'kirim'])->name('karier.kirim');
Route::get('/karier/posisi', [KarierController::class, 'posisi'])
    ->name('karier.posisi');
Route::get('/karier/posisi/{slug}', [KarierController::class, 'detail'])
    ->name('karier.detail');
// halaman form lamar dari posisi
Route::get('/karier/posisi/lamar/{req}', [KarierController::class, 'lamarPosisi'])
    ->name('karier.posisi.lamar');
// kirim lamaran posisi
Route::post('/karier/posisi/lamar/kirim', [KarierController::class, 'kirimPosisi'])
    ->name('karier.posisi.kirim');

Route::get('/permintaan-layanan', [PermintaanLayananController::class, 'index'])
    ->name('permintaan-layanan');

Route::post('/permintaan-layanan/kirim', [PermintaanLayananController::class, 'kirim'])
    ->name('permintaan-layanan.kirim');