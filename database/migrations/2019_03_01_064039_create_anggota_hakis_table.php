<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnggotaHakisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota_hakis', function (Blueprint $table) {
            $table->unsignedBigInteger('haki_id');
            $table->unsignedBigInteger('user_id');
            $table->string('jabatan');
            $table->primary(array('haki_id','user_id'));
            $table->foreign('haki_id')
                ->references('id')->on('hakis')
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
        Schema::dropIfExists('anggota_hakis');
    }
}
