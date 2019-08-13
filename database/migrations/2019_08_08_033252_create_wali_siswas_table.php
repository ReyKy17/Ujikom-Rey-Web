<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWaliSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wali_siswas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('wali_id')->unique();
            $table->unsignedBigInteger('siswa_nisn');
            $table->foreign('siswa_nisn')->references('id')->on('siswas')->onDelete('cascade');
            $table->string('wali_nama_ayah');
            $table->string('wali_pekerjaan_ayah');
            $table->string('wali_nama_ibu');
            $table->string('wali_pekerjaan_ibu');
            $table->text('wali_alamat');
            $table->integer('wali_telepon');
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
        Schema::dropIfExists('wali_siswas');
    }
}
