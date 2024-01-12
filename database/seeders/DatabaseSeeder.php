<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Post::factory(80)->create(); // con esto \App\Models\Post::factory(80)->create() se creara los datos y se creara en total 80 registros, con el siguiente comando creamos los registros php artisan migrate:refresh --seed, esto hace que primero ejecutara las migraciones osea refrescara las migraciones y despues al pasarle el flag --seed ejecutara las semillas donde ejecutara el factory

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
