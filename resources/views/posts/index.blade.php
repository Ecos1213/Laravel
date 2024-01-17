<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight flex items-center justify-between">
            {{ __('Posts') }}
            <a href="{{route('posts.create')}}" class="bg-gray-800 text-white rounded px-2 py-1 text-xs">Crear</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="mb-4 w-full">
                        @foreach ($posts as $post)
                            <tr class="border-b border-gray-200 text-sm">
                                <td class="px-6 py-4">
                                    {{$post->title}}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{route('posts.edit', $post)}}" class="text-indigo-600">Editar</a>
                                </td>
                                <td class="px-6 py-4">
                                    <form action="{{ route('posts.destroy', $post)}}" method="POST">
                                        <!--
                                            como vamos a eliminar el valor necesitamos colocar un form y el action tiene que ser la ruta por eso usamos el metodo route
                                            para apuntra a la ruta creada que es posts.destroy ya que asi en las rutas #osea resources crea la ruta de esta manera y como es un delete enviamos el valor que es un objeto a borrar
                                            el metodo tiene que ser post pero laravel tiene una anotacion que es method('DELETE') para que entienda que es un http delete ademas de eso necesitamos enviarle un token de seguridad para eso esta
                                            el csrf
                                        -->
                                        @csrf
                                        @method('DELETE')
                                        <input
                                            type="submit"
                                            value="Eliminar"
                                            class="bg-gray-800 text-white rounded px-4 py-2"
                                            onclick = "return confirm('Desea eliminar?')"
                                        />
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>

                    {{$posts->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
