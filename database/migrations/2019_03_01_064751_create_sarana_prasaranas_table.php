<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaranaPrasaranasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sarana_prasaranas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('jenis');
            $table->string('kepemilikan');
            $table->string('kondisi');
            $table->integer('nilai');
            $table->string('satuan');
            $table->string('tipe_prasarana');
            $table->string('utilasi');
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
        Schema::dropIfExists('sarana_prasaranas');
    }
}
