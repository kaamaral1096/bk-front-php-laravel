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
        Schema::create('caminhaos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('modelo',50);
            $table->integer('eixos');
            $table->date('dataFabricacao');
            $table->integer('passageiros');
            $table->string('cor',10);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caminhaos');
    }
};
