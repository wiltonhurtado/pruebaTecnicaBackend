<?php

use App\Http\Controllers\RegistroController;
use App\Http\Controllers\SesionController;
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

Route::get('/',RegistroController::class);
Route::get('index',[RegistroController::class,'home'])->name('index.home');
Route::get('loguin',[RegistroController::class,'create'])->name('loguin.create');
Route::get('registration',[RegistroController::class,'store'])->name('registration.store');
Route::post('registration',[RegistroController::class,'store'])->name('registration.store');
Route::post('welcome',[SesionController::class,'authenticate'])->name('welcome.authenticate');
Route::get('welcome',[SesionController::class,'authenticate'])->name('welcome.authenticate');
Route::get('logout',[SesionController::class,'destroy'])->name('logout.destroy');
