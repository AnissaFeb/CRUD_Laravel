<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Contoh rute untuk mendapatkan semua mahasiswa
Route::middleware('auth:sanctum')->get('/mahasiswa', 'App\Http\Controllers\MahasiswaController@index');

// Contoh rute untuk menampilkan detail mahasiswa berdasarkan ID
Route::middleware('auth:sanctum')->get('/mahasiswa/{id}', 'App\Http\Controllers\MahasiswaController@show');

// Contoh rute untuk membuat mahasiswa baru
Route::middleware('auth:sanctum')->post('/mahasiswa', 'App\Http\Controllers\MahasiswaController@store');

// Contoh rute untuk mengupdate data mahasiswa
Route::middleware('auth:sanctum')->put('/mahasiswa/{id}', 'App\Http\Controllers\MahasiswaController@update');

// Contoh rute untuk menghapus mahasiswa
Route::middleware('auth:sanctum')->delete('/mahasiswa/{id}', 'App\Http\Controllers\MahasiswaController@destroy');

// Rute untuk mendapatkan data user yang sedang login
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

