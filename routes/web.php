<?php

use App\Http\Controllers\KategoriController2;
use Illuminate\Support\Facades\Route;
use App\Models\table_mahasiswa;

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

use App\Http\Controllers\KategoriController;

Route::resource('kategori',KategoriController2::class);

/*
//latihan menggunakan model
Route::get('kategori/semua', [KategoriController::class,'semua']);
    
 Route::get('kategori/tambah', function () {
    kategori::create([
         'nama_kategori'=> "Pakaian Baru",
         'deskripsi'=> "Semua jenis pakaian baru "
     ]);   
 });

 Route::get('kategori/update/{id}', function ($id) {
    kategori::find($id)->update([
         'nama_kategori'=> "Pakaian Baru",
         'deskripsi'=> "Semua jenis pakaian anak "
     ]);   
 });

 Route::get('/kategori/hapus/{id}', function ($id) {
    kategori::find($id)->delete();   
 });

 /*
 //table mahasiswa
 //tambah mahasiswa
 Route::get('/tambah_mhs', function () {
    table_mahasiswa::create([
        'nim'=>'f1e122112',
        'nama'=>'Stevano',
        'kelas'=>'r005',
        'des'=>'peserta 4'
     ]);   
 });

 Route::get('update/{id}', function ($id) {
    table_mahasiswa::find($id)->update([
         'nama_kategori'=> "Pakaian Baru",
         'deskripsi'=> "Semua jenis pakaian anak "
     ]);   
 });

 Route::get('/kategori/hapus/{id}', function ($id) {
    kategori::find($id)->delete();   
 });
 */
