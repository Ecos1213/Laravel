<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // con php artisan make:controller nombrecontroller creamos un controlador podemos colocar varias funciones publicas, pero para el ejemplo colocamos un controlador por cada ruta creada home de la ruta home, blog y post por la ruta blog y post
    public function home()
    {
        return view("home"); // pasamos todo lo que habia en la ruta y lo usamos aca, en este caso para retornar a la vista
    }

    public function blog()
    {
        $posts = [
            ['id' => 1, 'title' => 'PHP', 'slug' => 'php'],
            ['id' => 2, 'title' => 'Laravel', 'slug' => 'Laravel'],
        ];
        return view('blog', ['posts' => $posts]); // podemos pasar datos a una vista de esta manera, tenemos que pasar el array y la vista de php se encargara de tomar cada array internos del array con sus respetivos datos
    }

    public function post($slug)
    {
        $post = $slug;
        return view('post', ['post' => $post]);
    }
}
