<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory; //este use HasFactory nos permite usar el factory y el seeder que creamos que es el PostFactory y la configbuuracion en DatabaseSeeder.php
}

// con php artisan make:model nombre -fc creamos el modelo pero como tiene el flag -fc crea el factory y el controlador
//recuerda el modelo sirve para hacer consultas a la base de datos y las migraciones crea la estructuras de la base de datos
// el factory nos permite definir datos falsos, crear una estructura principal para crear datos de ejemplo, se encuentra en la carpeta database/factories
