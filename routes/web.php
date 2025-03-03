<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToolController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CasoController;

use App\Http\Controllers\PracticasController;
use App\Http\Controllers\QuizController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/herramientas', [ToolController::class, 'index'])->name('tools.index');
Route::get('/noticias', [NewsController::class, 'index'])->name('news.index');

Route::get('/inicio-simulaciones', function () {
    return view('simulaciones');
})->name('inicioSimulaciones');

Route::get('/quiz', [QuizController::class, 'mostrarQuiz'])->name('mostrarQuiz');

Route::post('/quiz', [QuizController::class, 'procesarRespuestas'])->name('procesar-respuestas');
Route::get('/practicas', function() {
    return view('generarContraseña');
})->name('mostrarPracticas');

// Ruta para la práctica de generar contraseña
Route::get('/practicas/generar-contraseña', [PracticasController::class, 'verificarContrasenaForm'])->name('verificarContrasenaForm');
Route::post('/practicas/generar-contraseña', [PracticasController::class, 'verificarContrasena'])->name('verificarContrasena');

// Ruta para la práctica de reconocimiento de archivos
Route::get('/practicas/archivos', [PracticasController::class, 'mostrarArchivos'])->name('mostrarArchivos');
Route::post('/practicas/archivos', [PracticasController::class, 'procesarArchivos'])->name('procesarArchivos');

Route::post('/verificar-contrasena', [PracticasController::class, 'verificarContrasena'])->name('verificarContrasena');

Route::get('/practicas/archivos', [PracticasController::class, 'mostrarArchivos']);
Route::post('/practicas/archivos', [PracticasController::class, 'procesarArchivos'])->name('procesarArchivos');

Route::get('/casos-practicos', [CasoController::class, 'index'])->name('casos.index');

Route::get('/herramientas', [ToolController::class, 'index'])->name('tools.index');

Route::get('/recuros-educativos', [ResourceController::class, 'index'])->name('resources.index');

