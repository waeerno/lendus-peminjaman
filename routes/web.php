<?php

use App\Http\Controllers\AssetController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\UnitController;
use App\Models\Asset;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::get('/test', LandingController::class)->name('landing');

Route::get('/', DashboardController::class)->name('dashboard');

Route::middleware('auth')->name('master.')->group(function () {
    Route::resource('unit', UnitController::class)->except('show');
    Route::resource('kategori', KategoriController::class)->except('show');
    Route::resource('asset', AssetController::class);
});
Route::resource('peminjaman', PeminjamanController::class)->middleware('auth');

// Route::get('getJumlah/{id}', function ($id) {
//     $course = Asset::where('id', $id)->get();
//     return response()->json($course);
// });
// Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');
//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
