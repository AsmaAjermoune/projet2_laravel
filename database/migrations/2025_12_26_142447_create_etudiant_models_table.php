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
        Schema::create('etudiant_models', function (Blueprint $table) {
            $table->String('NumCINETU')->primary();
            $table->integer('codeForm');
            $table->foreign('codeForm')->references('codeForm')->on('formation_models')->onDelete('cascade');
            $table->String('nomEtu');
            $table->String('prenomEtu');
            $table->String('adresseEtu');
            $table->String('villeEtu');
            $table->String('niveauEtu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiant_models');
    }
};
