<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePustakasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pustakas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jenis_pustaka');
            $table->string('nama_buku');
            $table->integer('jumlah_kopi');
            $table->string('nomor');
            $table->integer('tahun');
            $table->unsignedBigInteger('program_studi_id');
            $table->foreign('program_studi_id')
                ->references('id')->on('program_studis')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('pustakas');
    }
}
