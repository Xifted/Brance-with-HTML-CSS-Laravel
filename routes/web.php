<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
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
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');
Route::get('', [HomeController::class, 'index']);
// Route::get('products', [ProductController::class, 'index']);
// Route::get('products/create', [ProductController::class, 'create']);
// Route::get('products/show/{id}', [ProductController::class, 'show']);
// Route::get('products/delete/{id}', [ProductController::class, 'destroy']);
// Route::get('products/edit/{id}', [ProductController::class, 'edit']);
// Route::put('products/{id}', [ProductController::class, 'update']);
// Route::post('products', [ProductController::class, 'store']);
Route::get('portofolio', [PortofolioController::class, 'index']);
Route::get('portofolio-admin', [PortofolioController::class, 'admin'])->middleware('auth');
Route::get('portofolio/show/{id}', [PortofolioController::class, 'show']);
Route::get('portofolio/create', [PortofolioController::class, 'create'])->middleware('auth');
Route::post('portofolio', [PortofolioController::class, 'store'])->middleware('auth');
Route::get('portofolio/delete/{id}', [PortofolioController::class, 'destroy'])->middleware('auth');
Route::get('portofolio/edit/{id}', [PortofolioController::class, 'edit'])->middleware('auth');
Route::put('portofolio/{id}', [PortofolioController::class, 'update'])->middleware('auth');
Route::get('portofolio/cari', [PortofolioController::class, 'cari']);