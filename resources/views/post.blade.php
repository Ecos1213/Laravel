@extends('template')
    <!--
        // para traer el yield y decirle que contenido queremos en el template tenemos que primero usar extends y nombre de la vista que usamos el yield en este caso seria template
        // despues tenemos que decirle que parte de esta vista vamos a colocar en el template.blade.php y lo hacemos con section y como argumento lleva el nombre del argumento declarado en template.blade.php y lo que hara es tomar desde el inicio de section hasta endsection y lo pondra en la vista de template
    -->


@section('content')
    <div class="max-w-3xl mx-auto">
        <h1 class="text-5xl mb-8">{{ $post->title }}</h1>
        <p class="leading-loose text-lg text-gray-700">{{$post->body}}</p>

    </div>
@endsection
