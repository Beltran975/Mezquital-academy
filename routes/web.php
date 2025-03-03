<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToolController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CasoController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/herramientas', [ToolController::class, 'index'])->name('tools.index');
Route::get('/noticias', [NewsController::class, 'index'])->name('news.index');
Route::get('/casos-practicos', [CasoController::class, 'index'])->name('casos.index');