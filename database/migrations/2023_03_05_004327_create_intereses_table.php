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
        Schema::create('intereses', function (Blueprint $table) {
            $table->bigIncrements('id_interes');
            $table->string("interes")->nullable();
            $table->unsignedBigInteger('id_involucrad')->nullable();
            $table->char('nombre_extraido',40)->nullable();
            /**se crea las llaves foraneas que hace referencia al id-involucrado de la tabla involucrado y 
             *  nombre_proyectos ede la table proyectos  */
            $table->foreign('id_involucrad')->references('id_involucrado')->on('involucrado');
            $table->foreign('nombre_extraido')->references('nombre_proyecto')->on('proyectos');
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('intereses');
    }
};
