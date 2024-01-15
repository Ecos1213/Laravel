<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // index es para mostrar informacion
    public function index() {
        return view('posts.index',
            [
                'posts' => Post::latest()->paginate()
            ]
        );

    }

    //destroy es para eliminar informacion
    public function destroy(Post $post) {
        $post->delete(); // el metodo delete del respectivo objeto sirve para eliminar, ya que el metodo destroy tiene que esperar un argumento que es el objeto especifico de post, esto quiere decir que enviara un objeto ya isntanciado o con datos especificos
        return back(); // el metodo back retorna a la vista anterior
    }
}
