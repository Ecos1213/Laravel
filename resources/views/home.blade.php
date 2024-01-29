@extends('template')
    <!--
        // para traer el yield y decirle que contenido queremos en el template tenemos que primero usar extends y nombre de la vista que usamos el yield en este caso seria template
        // despues tenemos que decirle que parte de esta vista vamos a colocar en el template.blade.php y lo hacemos con section y como argumento lleva el nombre del argumento declarado en template.blade.php y lo que hara es tomar desde el inicio de section hasta endsection y lo pondra en la vista de template
    -->


@section('content')
<!--<h1>Home</h1>-->
    <div>


    </div>

    <div class="px-4">
        <h1 class="text-2xl mb-8 text-gray-900">Contenido tecnico</h1>

        <div class="grid grid-cols-1 gap-4 mb-4">
            @foreach($posts as $post)

                <a href="{{route('post', $post->slug )}}" class="bg-gray-100 rounded-lg px-6 py-4">
                    <p class="text-xs flex items-center gap-2">
                        <span class="uppercase text-gray-700 bg-gray-200 rounded-full px-2 py-1">Tutorial</span>
                        <span class="">{{$post->created_at->format('d/m/Y')}}</span>
                    </p>
                    <h2 class="text-lg text-gray-900 mt-2">{{$post->title}}</h2>
                </a>

            @endforeach
        </div>

        {{$posts->links()}}

    </div>

@endsection
