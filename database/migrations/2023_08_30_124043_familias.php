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
        Schema::create('familias', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('parentesco');
            $table->integer('idade');
            $table->string('rua');
            $table->integer('numero');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
            $table->string('telefone');
            $table->string('email');
            $table->boolean('status')->default(true);
            $table->timestamps();
        });

        Schema::create('cesta_familia', function(Blueprint $table){
            $table->foreignId('familia_id')->constrained('familias');
            $table->foreignId('cesta_id')->constrained('cestas');
            $table->timestamps();
         });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cesta_familia');
        Schema::dropIfExists('familias');
    }
};
