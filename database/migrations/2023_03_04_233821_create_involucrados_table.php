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
        Schema::create('involucrado', function (Blueprint $table) {
            /**bigIncrements crea una llave primaria incremental con un campo personalizado */
            $table->bigIncrements('id_involucrado');
            $table->char('nombre',40);
            $table->char('nombre_extraido', 40)->nullable();
            /** una llave foránea de tipo "char" llamada "nombre_extraido" a la tabla "proyectos" que se relaciona con la columna "nombre_proyecto" de la tabla "proyectos*/
            $table->foreign('nombre_extraido')->references('nombre_proyecto')->on('proyectos');;
            
        });
    } 

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('involucrados');
    }
};
