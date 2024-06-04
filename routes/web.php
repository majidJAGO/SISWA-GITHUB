<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JurusanpplgController;
use App\Http\Controllers\AutocompleteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DaftarPelanggaranController;

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

// Route::view('/coba', 'coba');

Route::view('/login',[LoginController::class, 'buttonlogin'])->name('login');
Route::post('/login-proses',[LoginController::class, 'login_proses'])->name('login-proses');

Route::view('/biodata', 'biodata');
Route::get('/aplikasi',[JurusanpplgController::class, 'aplikasi'])->name('aplikasi');
Route::get('/biodata/{id}',[JurusanpplgController::class, 'biodata']);
Route::get('/biodata2',[JurusanpplgController::class, 'biodata2']);


Route::get('/jurusanpplg',[JurusanpplgController::class, 'index']);
Route::get('/siswapplg/create',[JurusanpplgController::class, 'create']);
Route::post('/siswapplg/store',[JurusanpplgController::class, 'store']);
Route::get('/siswapplg/{id}/edit',[JurusanpplgController::class, 'edit']);
Route::put('/siswapplg/{id}',[JurusanpplgController::class, 'update']);
Route::delete('/siswapplg/{id}',[JurusanpplgController::class, 'destroy']);
Route::get('/coba',[JurusanpplgController::class, 'coba']);
Route::post('/coba',[JurusanpplgController::class, 'doPoint']);
Route::get('/biodata/{id}',[JurusanpplgController::class, 'biodata']);
Route::get('/coba/{id}',[JurusanpplgController::class, 'cobaweb']);
Route::get('/autocomplete', [JurusanpplgController::class, 'cari']);
// Route::get('/autocomplete-search', [JurusanpplgController::class, 'autocompleteSearch']);


// Searching
// Route::get('/home', [AutocompleteController::class, 'index']);
// Route::get('autocomplete-search', [AutocompleteController::class, 'autocompleteSearch']);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/testcopy', function () {
    return view('testcopy');
});
Route::get('/testmain', function () {
    return view('testmain');
});
Route::get('/testmain2', function () {
    return view('testmain2');
});


Route::get('/daftarpelanggaran', [DaftarPelanggaranController::class, 'index']);
