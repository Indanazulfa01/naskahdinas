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
        Schema::create('suratkeluars', function (Blueprint $table) {
            $table->id();
            $table->string('keluar_id');
            $table->string('nomor_surat');
            $table->date('tanggal_surat');
            $table->text('pengirim');
            $table->string('perihal');
            $table->string('perlu_balasan');
            $table->string('file');
            $table->string('ket/status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suratkeluars');
    }
};
