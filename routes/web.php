<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\EskulController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\StrukturalController;


use App\Models\Eskul;

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function() {
   $eskul = Eskul::all();
   
   return view('welcome', compact('eskul'));
});

Route::resource('guru', GuruController::class);
Route::resource('mapel', MapelController::class);
Route::resource('jurusan', JurusanController::class);
Route::resource('eskul', EskulController::class);
Route::resource('artikel', ArtikelController::class);
Route::resource('jabatan', JabatanController::class);
Route::resource('struktural', StrukturalController::class);
