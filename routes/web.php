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
    return view('auth.login');
});

// Route::get('/cek', function () {
//     return view('cek',[
//         "title" => "cek",
//         "judultabel" => "cek"

//     ]);
// });

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
Route::get('/datates', [DataTesController::class, 'index'])->name('datates.index');

//Route Pasien
Route::resource('pasien', PasienController::class);
Route::get('get-pasien', [PasienController::class, 'getPasien'])->name('get-pasien');
Route::get('/pasien/{id?}', [PasienController::class, 'show']);


//Route Data Peserta
Route::get('/datapeserta', [DataPesertaController::class, 'index'])->name('datapeserta.index');
Route::get('/datapeserta/detail/{id}', [DataPesertaController::class, 'detail'] );
Route::get('/datapeserta/add', [DataPesertaController::class, 'add'] );
Route::post('/datapeserta/insert', [DataPesertaController::class, 'insert'] );
Route::get('/datapeserta/edit/{id}', [DataPesertaController::class, 'edit'] );
Route::post('/datapeserta/update/{id}', [DataPesertaController::class, 'update'] );
Route::get('/datapeserta/delete/{id}', [DataPesertaController::class, 'delete'] );
