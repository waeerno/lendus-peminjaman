<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EksploreController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\RoleController;
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
Route::get('/test', LandingController::class)->name('landing');
Route::get('/eksplore', EksploreController::class)->name('eksplore');
Route::resource('peminjaman-client', PeminjamanClientController::class);

Route::get('/', DashboardController::class)->name('dashboard');

Route::middleware('auth')->name('master.')->group(function () {
    Route::resource('unit', UnitController::class)->except('show');
    Route::resource('kategori', KategoriController::class)->except('show');
    Route::resource('asset', AssetController::class);
});

Route::resource('peminjaman', PeminjamanController::class);
Route::middleware('auth')->group(function () {
    Route::get('permission', PermissionController::class)->name('permission');
    Route::get('riwayat', RiwayatController::class)->name('riwayat.index');
    Route::resource('role', RoleController::class)->except('show');
    Route::resource('profile', ProfileController::class)->except('show', 'create', 'strore', 'edit', 'destroy');
    Route::resource('sandi', PasswordController::class)->only('update');
});

Route::middleware('auth')->name('pengguna.')->group(function () {
    Route::resource('operator', OperatorController::class)->except('show');
    Route::get('operator-password/{$id}', [OperatorController::class, 'password'])->name('operator.password');
    Route::resource('admin', AdminController::class)->except('show');
    Route::get('admin/{admin}/password', [AdminController::class, 'password'])->name('admin.password');
    Route::resource('client', ClientController::class)->except('show');
});
