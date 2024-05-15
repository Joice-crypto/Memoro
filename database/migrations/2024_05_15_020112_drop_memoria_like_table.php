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
        Schema::dropIfExists('memoria_like');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('memoria_like', function (Blueprint $table) {
            //
        });
    }
};
