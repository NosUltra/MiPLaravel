<?php

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

Route::get('/suma/{num1}/{num2}', function ($num1, $num2) {
    $resultado = $num1 + $num2;
    return "$resultado";
});

Route::get('/resta/{num1}/{num2}', function ($num1, $num2) {
    $resultado = $num1 - $num2;
    return "$resultado";
});

Route::get('/multiplicacion/{num1}/{num2}', function ($num1, $num2) {
    $resultado = $num1 * $num2;
    return "$resultado";
});


    Route::get('/division/{num1}/{num2}', function ($num1, $num2) {
        if ($num2 == 0) {
            return "No se puede dividir por cero.";
        }
        $resultado = $num1 / $num2;
        return "$resultado";
    });

//nombre y saludo

Route::get('/saludo/{nombre}/{apellido}', function ($nombre, $apellido) {
    return "Hola, $nombre $apellido. ¡Bienvenido!";
});

