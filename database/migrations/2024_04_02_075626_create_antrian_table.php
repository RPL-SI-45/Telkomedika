<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\antrian;
use Carbon\Carbon;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up():void
    {
        Schema::create('antrian', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('no_antrian') ->unique() ->nullable();
            $table->string('nama_pasien');
            $table->string('jenis_kelamin');
            $table->string('no_telp');
            $table->string('alamat');
            $table->string('poli');
            $table->string('keluhan');
            $table->string('tanggal_reservasi');
            $table->string('status_pelayanan')->nullable();
            $table->string('nama_pasien');
            $table->string('tanggal_pelayanan');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('antrian');
    }
};
