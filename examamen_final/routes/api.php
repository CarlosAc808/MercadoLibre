<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\ComprasController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Ruta para obtener el listado de formularios
Route::get(
    "/formularios",
    [
        FormularioController::class,
        "getApiListado"
    ]
);

// Ruta para obtener un formulario por su ID
Route::get(
    "/get_formulario/{id}",
    [
        FormularioController::class,
        "getApiGetFormularioByID"
    ]
);

// Ruta para eliminar un formulario por su ID
Route::delete(
    "/delete_formulario/{id}",
    [
        FormularioController::class,
        "deleteApiEliminar"
    ]
);

Route::post(
    "/submit_formulario",
    [
        FormularioController::class,
        "postApiAddFormulario"
    ]
);

Route::put(
    "update_formulario/{id}",
    [
        FormularioController::class,
    "putApiUpdateFormulario"
    ]
);


Route::post(
    "search_producto",
[
    FormularioController::class,
    "getApiFiltro"
]);




//---------------listado_compras--------
Route::get(
    "/compras",
    [
        ComprasController::class,
        "getApiListado_Compras"
    ]
);

Route::get(
    "/get_compra/{id}",
    [
        ComprasController::class,
        "getApiGetComprasByID"
    ]
);

Route::delete(
    "/delete_compra/{id}",
    [
        ComprasController::class,
        "deleteApiEliminar_Compras"
    ]
);


Route::post(
    "/comprass",
   [
    ComprasController::class,
       "postApiAddCompras"
    ]);


    Route::put(
        "update_compra/{id}",
        [
            ComprasController::class,
        "putApiUpdateCompras"
        ]
    );

