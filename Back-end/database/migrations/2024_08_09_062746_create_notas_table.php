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
        Schema::create('notas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('Creacion')->nullable();
            $table->timestamp('Finalizacion')->nullable();
            $table->string('Nombre',45);
            $table->string('Descripcion',300);
            $table->string('Categoria',45);
            $table->boolean('Prioridad');
            $table->boolean('Asignacion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notas');
    }
};
