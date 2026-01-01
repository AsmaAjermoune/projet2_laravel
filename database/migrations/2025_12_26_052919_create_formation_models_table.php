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
        Schema::create('formation_models', function (Blueprint $table) {
            $table->integer('codeForm')->primary();
            $table->integer('codeSess');
            $table->foreign('codeSess')->references('codeSess')->on('session_models')->onDelete('cascade');
            $table->String('titreForm');
            $table->integer('dureeForm');
            $table->String('prixForm');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formation_models');
    }
};
