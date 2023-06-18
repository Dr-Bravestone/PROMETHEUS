<?php
use App\Http\Controllers\testController;
use App\Http\Controllers\userController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::post('/login', 'App\Http\Controllers\LoginController@login');

route::resource('test', testController::class);

route::resource('Register', RegisterController::class);

route::resource('user', userController::class);

route::resource('Kategori', KategoriController::class);

route::resource('pegawai', PegawaiController::class);