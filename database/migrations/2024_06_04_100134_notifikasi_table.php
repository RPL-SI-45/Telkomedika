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
        Schema::create('notifikasi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pasien')->nullable();
            $table->integer('user_id')->nullable();
            $table->bigInteger('no_antrian') ->nullable();
            $table->string('status_pelayanan')->nullable();



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
