<?php

namespace App\Http\Controllers;

use App\Models\Post;


use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    // index es para mostrar informacion
    public function index() { // este es para mostrar informacion par listar
        return view('posts.index',
            [
                'posts' => Post::latest()->paginate()
            ]
        );

    }

    public function create(Post $post) { // este es formulario de crear solo para enviar la informacion no mas
        return view('posts.create',[ 'post' => $post ]);

    }

    public function store(Request $request) { // esto es crear finalmente
        $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]); // creamos la validacion a traves del objeto request que nos trae la informacion
        $post = $request->user()->posts()->create([ // esta forma sirve para crear un post si ves esta apuntando a user despues a posts por que un usuario le pertenece a varios posts y el metodo create sirve para insertarlo
            'title' => $title = $request->title,
            'slug' => Str::slug($title),
            'body' => $request->body,
        ]);
        return redirect()->route('posts.edit', $post); // el metodo redirect sirve para redireccionarlo a una vista, usamos el metodo route para dirigirlo a una vista especifica y tenemos que pasarle el mismo registro que guardamos para que muestre el registro creado

    }

    public function edit(Post $post) { // formulario de editar para enviar la informacion no mas
        return view('posts.edit',[ 'post' => $post ]);

    }

    public function update(Request $request, Post $post) { // esto es actualizar finalmente
        $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $post->update([ // este metodo update sirve para actualizar los datos
            'title' => $title = $request->title,
            'slug' => Str::slug($title),
            'body' => $request->body,
        ]);
        return redirect()->route('posts.edit', $post); // el metodo redirect sirve para redireccionarlo a una vista, usamos el metodo route para dirigirlo a una vista especifica y tenemos que pasarle el mismo registro que guardamos para que muestre el registro creado

    }

    //destroy es para eliminar informacion
    public function destroy(Post $post) {
        $post->delete(); // el metodo delete del respectivo objeto sirve para eliminar, ya que el metodo destroy tiene que esperar un argumento que es el objeto especifico de post, esto quiere decir que enviara un objeto ya isntanciado o con datos especificos
        return back(); // el metodo back retorna a la vista anterior
    }
}
