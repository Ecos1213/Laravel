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
        <!--
            // con el metodo name del objeto route en las rutas podemos colocarle un nombre a cada ruta, en este caso seria la ruta home y asi en la etiquetas a podemos usar en hretf con doble llaves usar el metodo route y ponemos como argumento el nombre que le colocamos a la ruta con el metodo name en routes
        -->
        <a href="{{route('home')}}">Home</a>
        <a href="{{route('blog')}}">Blog</a>
    </p>
    <hr>
    @yield('content')
    <!--
        // si queremo susar un template en otros contenidos de blade usamos yield una nomenclatura de blade que lo que hace es coger la parte de un blade y poncharla aqui recuerda que lleva como argumento una palabra que vamos a usar en otros blade
    -->
</body>
</html>
