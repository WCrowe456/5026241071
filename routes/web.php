<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('intro', function () {
	return view('intro');
});

Route::get('news', function () {
	return view('news');
});

Route::get('news1', function () {
	return view('news1');
});

Route::get('template', function () {
	return view('template');
});

Route::get('response', function () {
	return view('responsive');
});

Route::get('tpert3', function () {
	return view('contoh');
});

Route::get('pert4', function () {
	return view('5026241071');
});

Route::get('pert5', function () {
	return view('pertemuan5');
});

Route::get('git', function () {
	return view('index');
});

Route::get('linktree', function () {
	return view('linktree');
});

Route::get('dosen', [DosenController::class, 'index']);

Route::get('bio', [DosenController::class, 'biodata']);

Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiController::class, 'cari']);
