@csrf

<label for="" class="uppercase text-gray-700 text-xs"> Titulo </label>
<span class="text-xs text-red-600">@error('title') {{$message}} @enderror</span> <!-- en este caso el tag error title lo que significa es que si se encuentra un error en el input title imprime el mensaje de error y colocamos un enderror para que cierre el tag -->
<input type="text" name="title" class="rounded border-gray-200 w-full mb-4" value="{{ old('title',$post->title) }}"> <!-- el metodo old lo que hace es que si escribimos title pero no escribimos body nos dara el error de requerido en el body y se pierde el input de title para que esto no suceda usamos el metodo old diciendole que conserve los datos anteriores de title y si no tiene datos anteriores que muestre los datos recuperados de la base de datos-->

<label for="" class="uppercase text-gray-700 text-xs"> Contenido </label>
<span class="text-xs text-red-600">@error('body') {{$message}} @enderror</span>
<textarea name="body" rows="5" class="rounded border-gray-200 w-full mb-4">{{ old('body', $post->body ) }}</textarea>

<div class="flex justify-between items-center">

    <a href="{{route('posts.index')}}" class="text-indigo-600"> Volver </a>
    <input type="submit" value="Enviar" class="bg-gray-800 text-white rounded px-4 py-2">

</div>
