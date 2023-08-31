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
        Schema::create('cesta', function (Blueprint $table) {
            $table->id();
            $table->foreignId('familia_id')->references('id')->on('familias')->onDelete('cascade');
            $table->string('tipo_cesta');
            $table->date('data_entrega');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cesta');
    }
};
