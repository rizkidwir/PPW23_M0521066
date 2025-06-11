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
        Schema::create('suites', function (Blueprint $table) {
            $table->id();
            $table->string('no_kamar',10)->unique();
            $table->enum('type', ['platinum', 'gold']);
            $table->string('nama_tamu',100);
            $table->string('id_number',100);
            $table->string('id_card')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suites');
    }
};
