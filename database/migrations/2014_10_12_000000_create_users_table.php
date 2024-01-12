<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
    // para configurar nuestra base de datos primero creamos la base de datos en mysql y despues lo configuramos en el .env
    /**
     *
     *en el .env colocamos
     * DB_DATABASE=proyectolaravel
     * DB_USERNAME=root
     * DB_PASSWORD=
     *
     * el password y usario correspondiente que tenemos configurado en mysql y el nombre de la base de datos
     *
     * con php artisan migrate se conecta a la base de datos y crea las tablas en la base de datos
     *
     * para crear una nueva tabla usamos php artisan make:migration create_nombre_table
     *  */
};
