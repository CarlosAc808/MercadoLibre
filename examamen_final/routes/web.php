<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormularioController;

Route::get('/', function () {
    return view('welcome');
});

// Cambiamos a GET para mostrar el formulario
//Route::get('/Formulario', function () {
    //return view('Formulario');
//});

// POST para manejar el envío del formulario
//Route::post('/Formulario', [FormularioController::class, 'Formulario']);
