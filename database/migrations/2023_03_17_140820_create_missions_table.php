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
        Schema::create('missions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date_mission')->nullable();
            $table->string('destination')->nullbale();
            $table->time('heure_depart')->nullbale();
            $table->time('heure_retour')->nullbale();
            $table->integer('repas')->nullbale();
            $table->decimal('montant', 8, 2)->nullbale();
            $table->unsignedBigInteger('deplacement_id');
            $table->timestamps();
            $table->foreign('deplacement_id')->references('id')->on('deplacements')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('missions');
    }
};
