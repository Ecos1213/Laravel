<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto web</title>

    <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])  <!-- // como tengo diferente vesion de laravel a el de la clase por que este usa vite asi es la manera de llamar un css de esta version usando arroba vite
    -->
</head>
<body>
    <div class="container px-4 mx-auto">
        <header class="flex justify-between items-center py-4">
            <div class="flex items-center flex-grow gap-4">
                <a href="{{route('home')}}">
                    <img src="{{asset('images/logo.png')}}" class="h-12">
                </a>
                <form action="">
                    <input type="text" placeholder="Buscar">
                </form>
            </div>

            @auth
                <a href="{{route('dashboard')}}">Dashboard</a>
            @else
                <a href="{{route('login')}}">Login</a>
            @endauth
        </header>

        <div class="opacity-60 h-px mb-8" style="
            background: linear-gradient(to right,
                rgba(200, 200, 200, 0) 0%,
                rgba(200, 200, 200, 1) 30%,
                rgba(200, 200, 200, 1) 70%,
                rgba(200, 200, 200, 0) 100%
            );
        ">

        </div>
        @yield('content')

        <p class="py-16">
            <img src="{{asset('images/logo.png')}}" class="h-12 mx-auto">
        </p>

    </div>


    <!--
        // si queremo susar un template en otros contenidos de blade usamos yield una nomenclatura de blade que lo que hace es coger la parte de un blade y poncharla aqui recuerda que lleva como argumento una palabra que vamos a usar en otros blade
    -->
</body>
</html>
