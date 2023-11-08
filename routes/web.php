<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\CabangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProfilEtawaController;
use App\Http\Controllers\KontakEtawaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;
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

// Route::get('/admin', function () {
//     return view(' backend/pages.home');
// });

Route::get('/admin', [DashboardController::class, 'index'] )->middleware('auth');
 
// ketika pengguna mengakses /produk maka akan menjalankan file ProdukController dengan function index 
Route::get('/produk', [ProdukController::class, 'index'] )->middleware('auth');
Route::get('/produk/tambah', [ProdukController::class, 'tambahProduk'] )->middleware('auth');
Route::post('/produk', [ProdukController::class, 'store'] )->middleware('auth');
Route::get('/detailproduk/{id}',[ProdukController::class,'detailproduk'])->name('detailproduk');
Route::get('/edit/{id}', [ProdukController::class, 'editdata'] )->middleware('auth');
Route::post('/produk/{id}',[ProdukController::class, 'update'])->middleware('auth');
Route::resource('/produk',ProdukController::class)->middleware('auth');
Route::delete('/update-destroy/{id}',[ProdukController::class, 'destroy'])->middleware('auth');

//route kategori
Route::get('/kategori', [KategoriController::class, 'index'] )->middleware('auth');
Route::post('/kategori', [KategoriController::class, 'store'] )->middleware('auth');
Route::get('/editkategori/{id}', [KategoriController::class, 'editkategori'] )->middleware('auth');
Route::post('/kategori/{id}',[KategoriController::class, 'update'])->middleware('auth');
Route::resource('/kategori',KategoriController::class)->middleware('auth');
Route::delete('/updatekategori-destroy/{id}',[KategoriController::class, 'destroy'])->middleware('auth');


//Route Profil
Route::get('/dataprofil', [ProfilController::class,'index'])->name('dataprofil')->middleware('auth');
Route::post('/dataprofil/{id}', [ProfilController::class, 'update'])->name('dataprofil.update')->middleware('auth');

Route::get('/datakontak', [KontakController::class, 'index'] )->name('datakontak')->middleware('auth');
Route::post('/datakontak/{id}', [KontakController::class, 'update'])->name('datakontak.update')->middleware('auth');

Route::get('/cabang', [CabangController::class, 'index'] )->middleware('auth');
Route::get('/tambah/cabang', [CabangController::class, 'tambahcabang'] )->middleware('auth');
Route::post('/cabang', [CabangController::class, 'store'] )->middleware('auth');
Route::get('/detailcabang/{id}',[CabangController::class,'detailcabang'])->name('detailcabang');
Route::get('/editcabang/{id}', [CabangController::class, 'editcabang'] )->name('editcabang')->middleware('auth');
Route::post('/update/{id}',[CabangController::class, 'update'])->middleware('auth');
Route::resource('/cabang',CabangController::class)->middleware('auth');
Route::delete('/updatecabang-destroy/{id}',[CabangController::class, 'destroy'])->middleware('auth');



// Route::get('/frontend', function () {

Route::get('/',[FrontendController::class,'index']);
Route::get('/menu',[FrontendController::class,'menu']);
Route::get('/show_menu/{id}',[FrontendController::class,'show_menu'])->name('show_menu');
Route::get('/profil',[FrontendController::class,'profil']);
Route::get('/kontak',[FrontendController::class,'kontak']);
Route::get('/cabangfrontend',[FrontendController::class,'cabang']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
