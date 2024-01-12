<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto web</title>
</head>
<body>

    <p>
        <a href="{{route('home')}}">Home</a>
        <a href="{{route('blog')}}">Blog</a>
        @auth
            <a href="{{route('dashboard')}}">Dashboard</a>
        @else
            <a href="{{route('login')}}">Login</a>
        @endauth
    </p>
    <hr>
    @yield('content')
    <!--
        // si queremo susar un template en otros contenidos de blade usamos yield una nomenclatura de blade que lo que hace es coger la parte de un blade y poncharla aqui recuerda que lleva como argumento una palabra que vamos a usar en otros blade
    -->
</body>
</html>
