<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gurus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('guru_kode')->unique();
            $table->unsignedBigInteger('kompetensi_kode');
            $table->foreign('kompetensi_kode')->references('id')->on('kompetensi_keahlians')->onDelete('cascade');
            $table->string('guru_nip');
            $table->string('guru_nama');
            $table->text('guru_alamat');
            $table->integer('guru_telepon');
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
        Schema::dropIfExists('gurus');
    }
}
