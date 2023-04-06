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
        Schema::create('arboldeproblemas', function (Blueprint $table) {
            $table->bigIncrements('id_arbol');
            $table->string('problema')->nullable();
            $table->unsignedBigInteger('id_problem')->nullable();
            $table->char('nombre_extraido',40)->nullable();
            $table->foreign('id_problem')->references('id_problema')->on('problemas');
            $table->foreign('nombre_extraido')->references('nombre_proyecto')->on('proyectos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arboldeproblemas');
    }
};
