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
        Schema::create('user_grupos', function (Blueprint $table) {
            $table->integer('idusuario');
            $table->integer('idgrupos');

            $table->foreign('idusuario')->references('id')->on('users');
            $table->foreign('idgrupos')->references('id')->on('grupos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_grupos');
    }
};
