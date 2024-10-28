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
        Schema::create('jadwal_keberangkatan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('paket_id')->constrained('paket_umroh')->onDelete('cascade');
            $table->date('tanggal_keberangkatan');
            $table->date('tanggal_kepulangan');
            $table->integer('kuota');
            $table->enum('status', ['Tersedia', 'Penuh', 'Ditutup'])->default('Tersedia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal__keberangkatans');
    }
};
