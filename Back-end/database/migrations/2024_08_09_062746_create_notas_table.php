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
            $table->id();
            $table->timestamp('creacion')->nullable();
            //$table->timestamps();
            $table->timestamp('finalizacion')->nullable();
            $table->string('nombre',45);
            $table->string('descripcion',300);
            $table->string('categoria',45);
            $table->boolean('prioridad');
            $table->boolean('asignacion');
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
