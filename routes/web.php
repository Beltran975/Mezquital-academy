<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToolController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CasoController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\PracticasController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SimulacionController;
use App\Http\Controllers\ResourceController;

    // Rutas públicas
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.post');

    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');

    // Rutas protegidas
    Route::middleware('auth')->group(function () {

    Route::get('/', function () {
        return view('home');
    })->name('home');

    Route::get('/perfil/editar', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/perfil/actualizar', [ProfileController::class, 'update'])->name('profile.update');

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

    Route::get('/practicas/generar-contraseña', [PracticasController::class, 'verificarContrasenaForm'])->name('verificarContrasenaForm');
    Route::post('/practicas/generar-contraseña', [PracticasController::class, 'verificarContrasena'])->name('verificarContrasena');

    Route::get('/practicas/archivos', [PracticasController::class, 'mostrarArchivos'])->name('mostrarArchivos');
    Route::post('/practicas/archivos', [PracticasController::class, 'procesarArchivos'])->name('procesarArchivos');

    Route::get('/casos-practicos', [CasoController::class, 'index'])->name('casos.index');

    Route::get('/recuros-educativos', [ResourceController::class, 'index'])->name('resources.index');
    Route::get('/recursos/principiante',[ResourceController::class, 'getPrincipiante'])->name('resources.principiante');
    Route::get('/recursos/intermedio',[ResourceController::class, 'getIntermedio'])->name('resources.intermedio');
    Route::get('/recursos/avanzado',[ResourceController::class, 'getAvanzado']) ->name('resources.avanzado');

    // Cerrar sesión
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


    Route::get('/simulaciones/ataques', [SimulacionController::class, 'mostrarAtaques'])->name('mostrarAtaques');
    Route::post('/chat', [ChatController::class, 'chat'])->name('chat');

});
