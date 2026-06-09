<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('holaht');
});

Route::get('/saludo', function () {
    return view('saludoht');
});

Route::get('/saludarc', function () {
    return app('App\\Http\\Controllers\\SaludosController')->Saludo();
});

Route::get('/holaht', function () {
    return view('holaht');
});

Route::get('/cuadratica/{a}/{b}/{c}', function ($a, $b, $c) {
    return app('App\\Http\\Controllers\\OperacionesController')->cuadratica($a, $b, $c);
});

Route::get('/triangulo/{base}/{altura}', function ($base, $altura) {
    return app('App\\Http\\Controllers\\OperacionesController')->triangulo($base, $altura);
});

Route::get('/circulo/{radio}', function ($radio) {
    return app('App\\Http\\Controllers\\OperacionesController')->circulo($radio);
});

Route::get('/factorial/{num}', function ($num) {
    return app('App\\Http\\Controllers\\OperacionesController')->factorial($num);
});

Route::get('/primo/{num}', function ($num) {
    return app('App\\Http\\Controllers\\OperacionesController')->primo($num);
});

Route::get('/amigos/{num1}/{num2}', function ($num1, $num2) {
    return app('App\\Http\\Controllers\\OperacionesController')->amigos($num1, $num2);
});
