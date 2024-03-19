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
        Schema::create('avaliacao', function (Blueprint $table) {
            $table->id();
            $table->integer('avaliacaoAparencia');
            $table->integer('avaliacaoSabor');
            $table->integer('avaliacaoTextura');
            $table->integer('avaliacaoGeral');
            $table->string('observacao');
            $table->timestamps();

            $table->unsignedBigInteger('memoria_id');
            $table->foreign('memoria_id')
                ->references('id')
                ->on('memoria')
                ->onDelete('cascade'); // Adiciona a opção ON DELETE CASCADE
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avaliacao');
    }
};
