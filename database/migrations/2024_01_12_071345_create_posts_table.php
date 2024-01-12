<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void //las migraciones funciona como un control de versiones, primero cada vez que migramos migra lo nuevo que creamos o agregamos y vemos dos metodos el up y el down, el metodo up es para actualizar o acceder a una nueva version y el down es para regresar de version
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            //tenemos que crear una relacion de tablas, basicamente para poder identificar que usuario a desarrollado que publicacion, un usuario tiene muchas publicaciones(posts) y un post pertenece a un usuario
            $table->unsignedBigInteger('user_id'); // el metodo unsignedBigInteger es un tipo de dato de valores enteros sin signo lo que significa que solo permite valores positivos o cero, este metodo o tipo de dato se suele usar mucho en claves primarias o identificadores que deben ser siempre valores positivos
            $table->foreign('user_id')->references('id')->on('users'); // el metodo foreing decimos que es un campo foraneo el metodo references hace referencia a un campo que se relaciona con el foreign y el on es que se encuentra en esa tabla


            $table->string('title');
            $table->string('slug')->unique();
            $table->text('body');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
