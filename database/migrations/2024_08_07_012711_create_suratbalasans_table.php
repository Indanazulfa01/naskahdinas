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
        Schema::create('suratbalasans', function (Blueprint $table) {
            $table->id();
            $table->string('suratbalasan_id');
            $table->string('tanggal_balasan');
            $table->string('isi_balasan');
            $table->string('file');
            $table->string('suratmasuk_id');
            $table->foreignId('masuk_id')->constrain();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suratbalasans');
    }
};
