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
        Schema::create('memoria', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('descricao');
            $table->string('imagem' , 255);
            $table->timestamps();

            $table->unsignedBigInteger('alimento_id');
            $table->foreign('alimento_id')->references('id')->on('alimento');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('memoria');
    }
};
