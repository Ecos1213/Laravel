<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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
            <a href="">
                {{ $post['title'] }}
            </a>
        </p>
    @endforeach
</body>
</html>
