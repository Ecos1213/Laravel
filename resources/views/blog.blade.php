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
            <strong>{{ $post['id'] }}</strong>
            <!--

                // con el metodo name del objeto route en las rutas podemos colocarle un nombre a cada ruta, en este caso seria la ruta home y asi en la etiquetas a podemos usar en hretf con doble llaves usar el metodo route y ponemos como argumento el nombre que le colocamos a la ruta con el metodo name en routes
                // pero ademas como esta ruta necesita un parametro en la url podemos psarle a este metodo otro parametro que sea el valor del parametro que necesitamos

            -->
            <a href="{{route('post', $post['slug'] )}}">
                {{ $post['title'] }}
            </a>
        </p>
    @endforeach
@endsection


