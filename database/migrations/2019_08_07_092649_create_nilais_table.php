<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNilaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilais', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('siswa_nisn');
            $table->foreign('siswa_nisn')->references('id')->on('siswas')->onDelete('cascade');
            $table->unsignedBigInteger('guru_kode');
            $table->foreign('guru_kode')->references('id')->on('gurus')->onDelete('cascade');
            $table->unsignedBigInteger('sk_kode');
            $table->foreign('sk_kode')->references('id')->on('standar_kompetensis')->onDelete('cascade');
            $table->integer('nilai_angka');
            $table->text('nilai_huruf');
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
}
