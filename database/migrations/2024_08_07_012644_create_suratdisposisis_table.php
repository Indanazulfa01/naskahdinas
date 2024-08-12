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
        Schema::create('suratdisposisis', function (Blueprint $table) {
            $table->id();
            $table->string('disposisi_id');
            $table->date('tanggal_disposisi');
            $table->string('perihal');
            $table->string('status_disposisi');
            $table->string('file');
            $table->string('suratmasuk_id');
            $table->foreignId('balasan_id')->constrain();
            $table->foreignId('masuk_id')->constrain();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suratdisposisis');
    }
};
