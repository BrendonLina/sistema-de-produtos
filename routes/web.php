<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/sair', [HomeController::class, 'sair'])->name('sair');

//DASHBOARD
Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware('autorizacao')->name('dashboard');
Route::post('/dashboard', [HomeController::class, 'dashboard'])->middleware('acessodash')->name('dashboard');