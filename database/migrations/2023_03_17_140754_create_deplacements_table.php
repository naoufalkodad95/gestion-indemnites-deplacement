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
        Schema::create('deplacements', function (Blueprint $table) {
            $table->id();
            $table->integer('n_ordre');
            $table->integer('matricule');
            $table->string('grade');
            $table->string('nom');
            $table->string('prenom');
            $table->integer('exercice');
            $table->string('residence');
            $table->string('service');
            $table->date('periode_debut');
            $table->date('periode_fin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deplacements');
    }
};
