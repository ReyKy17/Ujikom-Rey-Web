<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStandarKompetensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('standar_kompetensis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sk_kode')->unique();
            $table->unsignedBigInteger('kompetensi_kode');
            $table->foreign('kompetensi_kode')->references('id')->on('kompetensi_keahlians')->onDelete('cascade');
            $table->string('sk_nama');
            $table->text('sk_kelas');
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
        Schema::dropIfExists('standar_kompetensis');
    }
}
