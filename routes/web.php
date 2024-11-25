<?php

use Illuminate\Support\Facades\Route;

/**
 * Route::get      | Consultar
 * Route::post     | Guardar
 * Route::delete   | Eliminar
 * Route::put      | Actualizar
 */
// Se hace llamado a la raiz, en forma directa al home del sitio
Route::get('/', function() {
    return 'Pagina Inicio';
});
// Se hace llamado a una página específica del sitio
Route::get('blog', function() {
    return 'Listado de publicaciones';
});
// Se hace una consulta a la base de datos para mostrar todos los registros
Route::get('blog/{slug}', function($slug) {
    return $slug;
});
