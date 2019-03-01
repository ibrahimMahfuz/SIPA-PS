<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenelitiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penelitians', function (Blueprint $table) {
            $table->unsignedBigInteger('penggunaan_dana_id');
            $table->primary('penggunaan_dana_id');
            $table->unsignedBigInteger('jenis_dana_id');
            $table->unsignedBigInteger('sumber_dana_id');
            $table->string('judul_penelitian');
            $table->string('kontrak_penelitian');
            $table->string('laporan_penelitian');
            $table->foreign('penggunaan_dana_id')
                ->references('id')->on('penggunaan_danas')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('jenis_dana_id')
                ->references('id')->on('jenis_danas')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('sumber_dana_id')
                ->references('id')->on('sumber_danas')
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
        Schema::dropIfExists('penelitians');
    }
}
