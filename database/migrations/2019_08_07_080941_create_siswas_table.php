<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('siswa_nisn')->unique();
            $table->unsignedBigInteger('kompetensi_kode');
            $table->foreign('kompetensi_kode')->references('id')->on('kompetensi_keahlians')->onDelete('cascade');
            $table->string('siswa_nama');
            $table->text('siswa_alamat');
            $table->date('siswa_tgl_lahir');
            $table->string('siswa_foto')->nullable();
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
        Schema::dropIfExists('siswas');
    }
}
