<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory; //este use HasFactory nos permite usar el factory y el seeder que creamos que es el PostFactory y la configbuuracion en DatabaseSeeder.php

    public function user() { // una publicacion (post) pertenece a un unico usuario por eso se coloca user de en vez de users en el nombre del metodo
        return $this->belongsTo(User::class); // este metodo hace referencia a que pertenece a un usuario por eso pasamos como parametro Users::class que hace referencia a la clase usuario y pertence a un usuario en la siguientes clases tenemos que configurar que un usuario tiene muchas publicaciones
    }

}

// con php artisan make:model nombre -fc creamos el modelo pero como tiene el flag -fc crea el factory y el controlador
//recuerda el modelo sirve para hacer consultas a la base de datos y las migraciones crea la estructuras de la base de datos
// el factory nos permite definir datos falsos, crear una estructura principal para crear datos de ejemplo, se encuentra en la carpeta database/factories
