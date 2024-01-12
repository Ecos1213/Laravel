@extends('template')
    <!--
        // para traer el yield y decirle que contenido queremos en el template tenemos que primero usar extends y nombre de la vista que usamos el yield en este caso seria template
        // despues tenemos que decirle que parte de esta vista vamos a colocar en el template.blade.php y lo hacemos con section y como argumento lleva el nombre del argumento declarado en template.blade.php y lo que hara es tomar desde el inicio de section hasta endsection y lo pondra en la vista de template
    -->


@section('content')
    <h1>Listado</h1>
    <!--
        // tomamos el parametro que enviamos de la ruta a la vista, recuerda que la variable tiene que llamarse igual que como definimos en el primer argumento de la funcion view
        // tambien podemos usar en blade foreach para que recorra cada valor de la variable, en este caso como es un array recorrera cada valor, y este foreach tiene que ir endforeach y blade lo que hara es interpretar esto y transformarlo a php
    -->
    @foreach($posts as $post)
        <!--
            // podemos usar {} doble llaves dos veces para colocar codigo php
        -->
        <p>
            <strong>{{ $post->id }}</strong>
            <!--

                //como ya usamos el ORM de laravel que es eloquent y ORM es object relational model lo que hace es de en ver de ser un array tenemos que tomar los datos como un objeto usando ->
            -->
            <a href="{{route('post', $post->slug )}}">
                {{ $post->title }}
            </a>
            <br>
            <span>{{$post->user->name}}</span> <!-- para esto sirve las relaciones para que sea mas corto conocer un valor de otro campo de la relacion de la tabla para que esto funcione necesitamos primero crear en la estructura un campo que se relacione con el campo de otra tabla y tenemos que decirle al modelo el tipo de relacion de estas dos tablas -->
        </p>
    @endforeach
    <!--
        // el metodo links sirve para mostrar la paginacion de cada dato que hicimos en el pagecontroller
    -->
    {{
        $posts->links()

    }}
@endsection


