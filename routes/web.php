<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

// Página de inicio
Route::get('/', function () {
    return view('home');
})->name('home');

// Noticias
Route::get('/noticias', [NewsController::class, 'index'])->name('news.index');