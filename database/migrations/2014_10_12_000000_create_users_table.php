<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique(); // unique() es una función de Laravel que añade una clave única a una columna.
            $table->timestamp('email_verified_at')->nullable(); // nullable() es para que no sea obligatorio.
            $table->string('password');
            $table->rememberToken(); // rememberToken() es para que almacene un token de sesión porque un token es una clave de sesión.
            $table->timestamps();
            $table->boolean('active')->default(false);
            $table->boolean('hidden')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
