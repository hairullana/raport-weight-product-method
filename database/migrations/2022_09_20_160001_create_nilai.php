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
            $table->float('pabd');
            $table->float('ppkn');
            $table->float('bahasa_indonesia');
            $table->float('matematika');
            $table->float('ipa');
            $table->float('ips');
            $table->float('sbdb');
            $table->float('pjok');
            $table->float('bahasa_jawa');
            $table->float('pendidikan_batik');
            $table->float('kehadiran');
            $table->float('sikap');
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
