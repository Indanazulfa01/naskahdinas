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
        Schema::create('rekapitulasis', function (Blueprint $table) {
            $table->id();
            $table->string('rekap_id');
            $table->string('jenis_surat');
            $table->string('total_surat');
            $table->string('filter');
            $table->foreignId('masuk_id')->constrain();
            $table->foreignId('keluar_id')->constrain();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekapitulasis');
    }
};
