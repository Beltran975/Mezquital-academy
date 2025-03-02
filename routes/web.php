<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ToolController; // Ensure this controller exists in the specified namespace


// Página de inicio
Route::get('/', function () {
    return view('home');
})->name('home');

// Noticias
Route::get('/noticias', [NewsController::class, 'index'])->name('news.index');

Route::get('/herramientas', [ToolController::class, 'index'])->name('tools.index');