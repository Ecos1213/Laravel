<?php

namespace App\Http\Controllers;

// los datos viven en el modelo por ende tenemos que traer el modelo para tomar los datos que necesitamos osea hacer consultas para traer datos
use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // con php artisan make:controller nombrecontroller creamos un controlador podemos colocar varias funciones publicas, pero para el ejemplo colocamos un controlador por cada ruta creada home de la ruta home, blog y post por la ruta blog y post
    public function home()
    {
        $posts = Post::latest()->paginate();
        return view("home", ['posts' => $posts]); // pasamos todo lo que habia en la ruta y lo usamos aca, en este caso para retornar a la vista
    }

    /*public function blog()
    {
        //$posts = Post::get(); // eloquent tiene una tecnologia llamada ORM, esto codigo Post::get() toma todos los datos del post de la base de datos
        /**
         *
         * Post::get();-> Trae todos los registros de la base de datos
         * Post::frist();-> Trae el primer registro de la base de datos
         * Post::find(id); -> Busca un registro en la base de datos por medio de su id
         * Post::latest(); -> Trae todos los registros de la base de datos, y los ordena de forma descendente
         * adicional, podemos utilizar el método paginate(), para realizar la paginación, solo no nos debemos de incluir en nuestras vistas la
         * propiedad links() para que podamos visualizar los controles de paginación
         *
         * */
        // $posts = Post::first();
        // $posts = Post::find(25);
        // dd($posts); // dd es como un print_r organiza los datos para que lo muestre de una manera mas legible humanamente
        /*$posts = Post::latest()->paginate();
        return view('blog', ['posts' => $posts]); // podemos pasar datos a una vista de esta manera, tenemos que pasar el array y la vista de php se encargara de tomar cada array internos del array con sus respetivos datos
    }*/

    public function post(Post $post)
    {
        return view('post', ['post' => $post]);
    }
}
