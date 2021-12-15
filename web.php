
<?php

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
    return view('welcome');
});

Route::get('praktikum1', function () {
    return view('prak1eb');
});

Route::get('showcalculator', 'ViewController@showCalForm');

Route::post('result', 'ViewController@showResultPHP');

Route::get('/pegawai', 'PegawaiController@index');

Route::get('/pegawai/tambah','PegawaiController@tambah');

Route::post('/pegawai/store','PegawaiController@store');

Route::get('/pegawai/edit/{id}','PegawaiController@edit');

Route::post('/pegawai/update','PegawaiController@update');

Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');

Route::get('/mutasi','MutasiController@index');

Route::get('/mutasi/tambah','MutasiController@tambah');

Route::post('/mutasi/store','MutasiController@store');

Route::get('/mutasi/edit/{ID}','MutasiController@edit');

Route::post('/mutasi/update','MutasiController@update');

Route::get('/mutasi/hapus/{ID}','MutasiController@hapus');

Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');

//CRUD Nilai Kuliah
Route::get('/nilaikuliah','NilaiController@index');
Route::get('/nilaikuliah/tambah','NilaiController@tambah');
Route::post('/nilaikuliah/store','NilaiController@store');

Route::get('home', function () {
    return view('layout.ceria');
});

Route::get('home', function () {
    return view('absen.index');
});

Route::get('home', function () {
    return view('mutasi.index');
});

Route::get('home', function () {
    return view('pegawai.index');
});
