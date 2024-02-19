<?php

use App\Http\Controllers\PeminjamBerandaController;
use App\Http\Controllers\PetugasBerandaController;
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
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/admin/user', function () {
    return view('admin.user-index');
});
Route::get('/admin/user/create', function () {
    return view('admin.user-create');
});
Route::get('/admin/user/update', function () {
    return view('admin.user-update');
});

Route::get('/admin/buku', function () {
    return view('admin.buku-index');
});
Route::get('/admin/buku/create', function () {
    return view('admin.buku-create');
});
Route::get('/admin/buku/update', function () {
    return view('admin.buku-update');
});

Route::get('/admin/kategori', function () {
    return view('admin.kategori-index');
});
Route::get('/admin/kategori/create', function () {
    return view('admin.kategori-create');
});
Route::get('/admin/kategori/update', function () {
    return view('admin.kategori-update');
});
Route::get('/admin/peminjam', function () {
    return view('admin.peminjam-index');
});





Route::get('/peminjam/dashboard', function () {
    return view('peminjam.dashboard');
});
Route::get('/peminjam/buku', function () {
    return view('peminjam.daftar-buku');
});
Route::get('/peminjam/buku/detail', function () {
    return view('peminjam.detail-buku');
});
Route::get('/peminjam/buku/ulasan', function () {
    return view('peminjam.ulasan-create');
});
Route::get('/peminjam/buku/pinjaman', function () {
    return view('peminjam.buku-pinjaman');
});
Route::get('/peminjam/koleksi', function () {
    return view('peminjam.koleksi-buku');
});
Route::get('/search-book', function () {
    return view('cari-buku');
});
Route::get('/detail-book ', function () {
    return view('detail-buku');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth', 'auth.admin'])->group(function () {

});
Route::prefix('petugas')->middleware(['auth', 'auth.petugas'])->group(function () {
    Route::get('beranda', [PetugasBerandaController::class, 'index'])->name('petugas.beranda');
});
Route::prefix('peminjam')->middleware(['auth', 'auth.peminjam'])->group(function () {
    Route::get('beranda', [PeminjamBerandaController::class, 'index'])->name('peminjam.beranda');
});
Route::get('logout', function () {
    Auth::logout();
});
