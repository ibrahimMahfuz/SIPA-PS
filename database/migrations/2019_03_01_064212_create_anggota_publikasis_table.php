<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnggotaPublikasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota_publikasis', function (Blueprint $table) {
            $table->unsignedBigInteger('publikasi_id');
            $table->unsignedBigInteger('user_id');
            $table->string('jabatan');
            $table->primary(array('publikasi_id','user_id'));
            $table->foreign('publikasi_id')
                ->references('id')->on('publikasis')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('user_id')
                ->references('id')->on('users')
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
        Schema::dropIfExists('anggota_publikasis');
    }
}
