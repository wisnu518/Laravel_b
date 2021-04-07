<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\MahasiswaController;

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

Route::get('/user', [ UserController::class, 'index' ]);

Route::get('/user/{nama}', [ UserController::class, 'setName' ]);

Route::post('/user', [ UserController::class, 'setBio']);

Route::get('/list-stok', [ StokController::class, 'list' ]);

Route::get('/tambah', function() {
	return view('tambah');
});

Route::post('/tambah', [ StokController::class, 'tambah' ]);

Route::get('/hapus/{id}', [ StokController::class, 'hapus' ]);

Route::get('/ubah/{id}', [ StokController::class, 'ubah' ]);

Route::post('/ubah', [ StokController::class, 'simpan' ]);

Route::get('/list-mahasiswa', [
	MahasiswaController::class, 'home' ]);

Route::get('/form-tambah', function() {
	return view('form-tambah');
});

Route::post('/tambah', [ MahasiswaController::class, 
	'tambah' ]);

Route::get('/hapus-mhs/{id}', [ MahasiswaController::class, 'hapus' ]);

Route::get('/ubah-mhs/{id}', [ MahasiswaController::class, 'formUbah' ]);

Route::post('/ubah-mhs', [ MahasiswaController::class, 'ubah' ]);