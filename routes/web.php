<?php

use App\Http\Controllers\PageController; // llamamos el controlador por que vamos a usar los metodos de cada controlador con su respectiva ruta, la ruta App es por que en composer.json esta "App\\": "app/", hace referencia de que App es la carpeta app
use Illuminate\Support\Facades\Route;

// para tomar los controladores con sus respetivos metodos podemos pasarlo de la siguiente manera [PageController::class, 'nombre metodo dentro del controlador']
// Route::get('/', [PageController::class, 'home'])->name('home'); // con el metodo name del objeto route podemos colocarle un nombre a cada ruta, en este caso seria la ruta home y asi en la etiquetas a podemos usar en hretf con doble llaves usar el metodo route y ponemos como argumento el nombre que le colocamos a la ruta con el metodo name en routes

// Route::get('blog', [PageController::class, 'blog'])->name('blog');

// Route::get('blog/{slug}', [PageController::class, 'post'])->name('post');

// esto es una mejor manera de escribir el codigo anterior en rutas

Route::controller(PageController::class)->group(function() {
    //dejamos la ruta y el nombre del metodo
    Route::get('/', 'home')->name('home');

    Route::get('blog', 'blog')->name('blog');

    Route::get('blog/{post:slug}', 'post')->name('post'); // como el slug es un dato del modelo tenemos que colocar post:variable para que laravel entienda que estos datos son registros de base de datos de la tabla post
});


