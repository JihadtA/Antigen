<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DataTesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DataPesertaController;

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
    return view('welcome2');
});

Route::get('/cek', function () {
    return view('cek',[
        "title" => "cek",
        "judultabel" => "cek"

    ]);
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/datates', [DataTesController::class, 'index']);
Route::get('/datapeserta', [DataPesertaController::class, 'index']);

Route::resource('pasien', PasienController::class);
Route::get('get-pasien', [PasienController::class, 'getPasien'])->name('get-pasien');

