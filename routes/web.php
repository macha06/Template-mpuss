<?php

use App\Http\Controllers\AdminBerandaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PeminjamBerandaController;
use App\Http\Controllers\PetugasBerandaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
#Auth
Route::get('/', function () {
    return view('landing-page');
});
#Route::get('/login', function () {
   # return view('auth.login');
#});
#Route::get('/register', function () {
    #return view('auth.register');
#});

#admin
#

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth', 'auth.admin'])->group(function () {
    Route::get('beranda', [AdminBerandaController::class, 'index'])->name('admin.beranda');
    Route::resource('kategori', KategoriController::class);
    Route::resource('user', UserController::class);
    Route::resource('buku', BukuController::class);
});


Route::prefix('petugas')->middleware(['auth', 'auth.petugas'])->group(function () {
    Route::get('beranda', [PetugasBerandaController::class, 'index'])->name('petugas.beranda');
    Route::resource('kategori', KategoriController::class);
    Route::resource('buku', BukuController::class);
});
Route::prefix('peminjam')->middleware(['auth', 'auth.peminjam'])->group(function () {
    Route::get('beranda', [PeminjamBerandaController::class, 'index'])->name('peminjam.beranda');
});
Route::get('logout', function () {
    Auth::logout();
    return redirect('/login');
});
