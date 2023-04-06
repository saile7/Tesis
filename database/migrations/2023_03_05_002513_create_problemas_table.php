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
        Schema::create('problemas', function (Blueprint $table) {
            /**bigIncrements crea una llave primaria incremental con un campo personalizado */
            $table->bigIncrements('id_problema');
            $table->string("problema")->nullable();
            $table->unsignedBigInteger('id_involucrado')->nullable();
            $table->char('nombre_extraido',20)->nullable();
            $table->foreign('id_involucrado')->references('id_involucrado')->on('involucrado');
            $table->foreign('nombre_extraido')->references('nombre_proyecto')->on('proyectos');
        });
    } 

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('problemas');
    }
};
