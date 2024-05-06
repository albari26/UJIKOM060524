<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahaSantriController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BukuController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('master.dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
// kalo pake pake url pake ini                                 ini pake route(alias)
Route::get('/mahasantri_petik', [MahaSantriController::class, 'index'])->name('santri');
Route::get('/mahasantri/{id}', [MahaSantriController::class, 'getid']); # buat bikin id
Route::get('/mahasantri_cari', [MahaSantriController::class, 'cari']);

// format query string adalah (id?=1) dan query get pakai method GET



// hal. table
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');

// hal. form tambah data
Route::get('/kategori/create', [KategoriController::class, 'create']);
Route::post('/kategori/store', [KategoriController::class, 'store'])->name('kategori.store');

// hal. show
Route::get('/kategori/show/{id}', [KategoriController::class, 'show'])->name('kategori.show');

// update
Route::get('/kategori/update/{id}', [KategoriController::class, 'edit'])->name('kategori.update');
Route::put('/kategori/update/{id}', [KategoriController::class, 'update'])->name('kategori.edit');

// hapus
Route::get('/kategori/hapus/{id}', [KategoriController::class, 'destroy'])->name('kategori.hapus');





// ---- Halaman Buku ----

// hal. buku
Route::get('/books', [BukuController::class, 'index'])->name('books');

// hal. tambah buku
Route::get('/buku/create', [BukuController::class, 'create'])->name('books.create');
Route::post('/buku/store', [BukuController::class, 'store'])->name('books.store');

// hal. show
Route::get('/buku/show/{id}', [BukuController::class, 'show'])->name('books.show');

// hal. edit

// hal. hapus

// php artisan route:list

Route::resource('buku', BukuController::class);

