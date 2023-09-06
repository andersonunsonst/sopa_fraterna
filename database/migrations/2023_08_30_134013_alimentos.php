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
        Schema::create('alimentos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->decimal('quantidade');
            $table->string('tipo_quantidade');
            $table->date('validade');
            $table->timestamps();
        });

        Schema::create('alimento_cesta', function(Blueprint $table){
            $table->foreignId('alimento_id')->constrained('alimentos');
            $table->foreignId('cesta_id')->constrained('cestas');
            $table->timestamps();
         });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alimentos');
    }
};
