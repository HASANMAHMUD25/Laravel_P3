<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
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

Route::get('/', function () {
    return view('welcome');
});

//Route Salah
Route::get('/salam', function () {
    return "Assalamu'alaikum Sobat, Selamat Belajar Laravel";
});

//Routing dengan parameter
Route::get('/pegawai/{nama}/{divisi}', function ($nama,$divisi){
return 'Nama Pegawai : '.$nama.'<br/>Departemen :'.$divisi;
}); 

//Menambahkan route /kabar
Route::get('/kabar', function () {
    return view('kondisi');
});

//Rote data mahasiswa
// Rote::get('mahasiswa','App\Http\Controllers\MahasiswaController@dataMahasiswa');

//Atau cara 2 (pilih salah satu saja)
Route::get(
'/mahasiswa',
[MahasiswaController::class, 'dataMahasiswa']
);

//Route Data Mahasiswa
//versi 1 
// Route::get('/mahasiswa')

//versi 2
Route::get('/masiswa',[MahasiswaController::class, 'dataMahasiswa']);

//Tambahkan route baru di routes/web.php
Route::get('/hello', function () {
    return view('p4/hello', ['name' => 'Inaya']);
});

//menambahkan nilai
Route::get('/nilai', function () {
    return view('p4/nilai');
});

//menambahkan Rote daftar nilai
Route::get('/daftar', function () {
    return view('p4/daftar');
});

//Route Dasar blade templeting
Route::get('/phpframework', function ()
{ return view('p4/layouts.index');
});