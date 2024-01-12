<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view("home"); // para que la ruta tome una vista de tipo blade tenemos que usar el metodo view y el nombre del blade esto quiere decir que si se llama home.blade.php la vista como argumento tendriamos que colocar home para leer la vista
})->name('home'); // con el metodo name del objeto route podemos colocarle un nombre a cada ruta, en este caso seria la ruta home y asi en la etiquetas a podemos usar en hretf con doble llaves usar el metodo route y ponemos como argumento el nombre que le colocamos a la ruta con el metodo name en routes

Route::get('blog', function () {
    $posts = [
        ['id' => 1, 'title' => 'PHP', 'slug' => 'php'],
        ['id' => 2, 'title' => 'Laravel', 'slug' => 'Laravel'],
    ];
    return view('blog', ['posts' => $posts]); // podemos pasar datos a una vista de esta manera, tenemos que pasar el array y la vista de php se encargara de tomar cada array internos del array con sus respetivos datos
})->name('blog');

Route::get('blog/{slug}', function ($slug) {
    $post = $slug;
    return view('post', ['post' => $post]);
})->name('post');

