<?php

namespace Database\Factories;

use Illuminate\Support\Str; // con esta libreria podemos hacer que tengamos una url amigable para el slug
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            // recuerda que dentro de este return tiene que ir el valor del nombre del campo de la tabla y el dato que se crea con el faker, por cierto laravel sabe que los datos van en la tabla Post por el nombre del factory
            'title' => $title = $this->faker->sentence(), // con el $this->faker->sentence() creamos un dato falso y el metodo sentence crea una sentencia de texto aleatoria para crear un dato falso y conciso
            'slug' => Str::slug($title),// con el metodo slug de la clase Str nos permite crear una url amigable Str::slug($title)
            'body' => $this->faker->text(2200), // con $this->faker->text(2200) creamos otro texto pero aca le decimos que va a tener como maximo 2200 caracteres
            //ademas de modificar este factory tenemos que modificar el seeder que esta en seeders->DatabaseSeeder.php ahi habilitamos que factory va a crear y cuantos registros se van a crear
        ];
    }
}
