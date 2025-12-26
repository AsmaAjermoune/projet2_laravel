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
        Schema::create('session_models', function (Blueprint $table) {
            $table->integer('codeSess')->primary();
            $table->String('nomSess');
            $table->date('dateDebutSess');
            $table->date('dateFinSess');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('session_models');
    }
};
