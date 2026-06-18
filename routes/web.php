<?php

use App\Http\Controllers\OperacionesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [OperacionesController::class, 'index']);

Route::get('/operaciones', [OperacionesController::class, 'index'])->name('operaciones.index');
Route::get('/operaciones/sumar', [OperacionesController::class, 'sumarForm'])->name('operaciones.sumar.form');
Route::get('/operaciones/restar', [OperacionesController::class, 'restarForm'])->name('operaciones.restar.form');
Route::get('/operaciones/triangulo', [OperacionesController::class, 'trianguloForm'])->name('operaciones.triangulo.form');
Route::get('/operaciones/circulo', [OperacionesController::class, 'circuloForm'])->name('operaciones.circulo.form');
Route::get('/operaciones/factorial', [OperacionesController::class, 'factorialForm'])->name('operaciones.factorial.form');
Route::get('/operaciones/primo', [OperacionesController::class, 'primoForm'])->name('operaciones.primo.form');
Route::get('/operaciones/amigos', [OperacionesController::class, 'amigosForm'])->name('operaciones.amigos.form');

Route::get('/saludo', function () {
    return view('saludoht');
});

Route::get('/saludarc', function () {
    return app('App\\Http\\Controllers\\SaludosController')->Saludo();
});

Route::get('/holaht', function () {
    return view('holaht');
});

Route::post('/operaciones/sumar', [OperacionesController::class, 'sumar'])->name('operaciones.sumar');
Route::post('/operaciones/restar', [OperacionesController::class, 'restar'])->name('operaciones.restar');
Route::post('/operaciones/triangulo', [OperacionesController::class, 'triangulo'])->name('operaciones.triangulo');
Route::post('/operaciones/circulo', [OperacionesController::class, 'circulo'])->name('operaciones.circulo');
Route::post('/operaciones/factorial', [OperacionesController::class, 'factorial'])->name('operaciones.factorial');
Route::post('/operaciones/primo', [OperacionesController::class, 'primo'])->name('operaciones.primo');
Route::post('/operaciones/amigos', [OperacionesController::class, 'amigos'])->name('operaciones.amigos');
