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
        Schema::create('polipasien', function (Blueprint $table) {
            $table->id();
            $table->string('Nama_Poli');
            $table->string('Deskripsi_Poli');
            $table->string('Nama_Dokter');
            $table->string('Jadwal_Dokter');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('polipasien');
    }
};
