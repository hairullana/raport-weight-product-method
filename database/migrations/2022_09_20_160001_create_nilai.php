<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('siswa_id');
            $table->float('pabd')->default(0);
            $table->float('ppkn')->default(0);
            $table->float('bahasa_indonesia')->default(0);
            $table->float('matematika')->default(0);
            $table->float('ipa')->default(0);
            $table->float('ips')->default(0);
            $table->float('sbdb')->default(0);
            $table->float('pjok')->default(0);
            $table->float('bahasa_jawa')->default(0);
            $table->float('pendidikan_batik')->default(0);
            $table->float('kehadiran')->default(0);
            $table->float('sikap')->default(0);
            $table->float('vector_s')->nullable()->default(0);
            $table->float('vector_v')->nullable()->default(0);
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
        Schema::dropIfExists('nilai');
    }
};
