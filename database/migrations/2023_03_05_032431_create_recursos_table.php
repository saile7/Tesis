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
        Schema::create('recursos', function (Blueprint $table) {
            $table->bigIncrements('id_recurso');
            $table->string("recurso")->nullable();
            $table->unsignedBigInteger('id_involucra')->nullable();
            $table->char('nombre_extraido',40)->nullable();
            $table->foreign('id_involucra')->references('id_involucrado')->on('involucrado');
            $table->foreign('nombre_extraido')->references('nombre_proyecto')->on('proyectos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recursos');
    }
};
