<?php

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

Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('index');

Route::get('/faq', [App\Http\Controllers\FrontendController::class, 'faq'])->name('faq');
Route::get('/delivery', [App\Http\Controllers\FrontendController::class, 'delivery'])->name('delivery');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
