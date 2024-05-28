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
        Schema::create('memoria_like', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('compartilhamentos_id');
            $table->timestamps();
            $table->unsignedBigInteger('user_id');

            // Se necessário, adicione chaves estrangeiras
            $table->foreign('compartilhamentos_id')->references('id')->on('compartilhamentos')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('memoria_like');
    }
};