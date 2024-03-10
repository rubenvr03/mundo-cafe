<?php

use App\Http\Controllers\CafeteriasController;
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

Route::get('/', function () {
    return view('layout.home');
})->name('home');

Route::resource('cafeterias', CafeteriasController::class);

Route::get('/contacto', function(){
    return view('contact');
})->name('contact');

Route::get('/buscar', function(){
    return view('buscar');
})->name('buscar');


