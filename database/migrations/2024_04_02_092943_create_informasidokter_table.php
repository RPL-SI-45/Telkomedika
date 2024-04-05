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
        Schema::create('informasidokter', function (Blueprint $table) {
            $table->id();
            $table->string('Nama Dokter');
            $table->string('Nama Poli');
            $table->string('Senin');
            $table->string('Selasa');
            $table->string('Rabu');
            $table->string('Kamis');
            $table->string('Jumat');
            $table->string('Sabtu');
            $table->string('Status Kehadiran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasidokter');
    }
};
