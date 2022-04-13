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
            $table->foreignId('biodata_siswa_id');
            $table->foreign('biodata_siswa_id')->references('id')->on('biodata_siswas')->onUpdate('cascade');
            $table->string('bermain');
            $table->string('ikrar_bersama');
            $table->string('senam_irama');
            $table->string('bernyanyi');
            $table->string('berdoa');
            $table->string('pijakan_sebelum_bermain');
            $table->string('pijakan_setelah_bermain');
            $table->string('tanggal');
            $table->string('komentar');
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
        Schema::dropIfExists('nilais');
    }
};