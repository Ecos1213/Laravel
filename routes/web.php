<?php


use Illuminate\Http\Request; // tambien podemos controlar y manejar lo enviado por un usuario, para eso usamos la librearia request de laravel
use Illuminate\Support\Facades\Route;

/**
* Route::get    | Consultar
* Route::post   | Guardar
* Route::delete | Eliminar
* Route::put    | Actualizar
*/

Route::get('/', function () {
    return "ruta home";
});

Route::get('blog', function () {
    return "Listado de publicaciones";
});

Route::get('blog/{slug}', function ($slug) { // resivimos un parametro llamado slug, este parametro tiene que definirse en el metodo como se escribe en la ruta
    // consulta a base de datos
    return $slug;
});

Route::get('buscar', function (Request $request) { // despues de llamar la libreria con use colocamos un argumento tipo objeto request para tomar los metodos que vienen definidas en laravel
    return $request->all(); // usamos el metodo all del objeto request para tomar todas las peticiones enviadas por el usuario, esto quiere decir que si escribimos http://127.0.0.1:8000/buscar?query=php tomara como parametro query y el valor php para eso sirve en este caso el request
});

