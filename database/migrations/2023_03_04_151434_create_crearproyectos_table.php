<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * se crea los campos y las llaves primaria y foranea 
     */
    public function up(): void
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->char('nombre_proyecto', 40)->primary();
            /**se crea la llave foranea que hace referencia al id de la table users  */
            $table->unsignedBigInteger('users_id')->nullable();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crearproyectos');
    }
};
