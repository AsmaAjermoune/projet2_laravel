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
        Schema::create('specialite_models', function (Blueprint $table) {
            $table->integer('codeSpec')->primary();
            $table->integer('codeForm');
            $table->foreign('codeForm')->references('codeForm')->on('formation_models')->onDelete('cascade');
            $table->String('nomSpec');
            $table->String('descSpec');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specialite_models');
    }
};
