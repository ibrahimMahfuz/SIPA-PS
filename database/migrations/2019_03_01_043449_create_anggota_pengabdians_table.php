<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnggotaPengabdiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota_pengabdians', function (Blueprint $table) {
            $table->unsignedBigInteger('pengabdian_id');
            $table->unsignedBigInteger('user_id');
            $table->string('jabatan');
            $table->primary(array('pengabdian_id','user_id'));
            $table->foreign('pengabdian_id')
                ->references('penggunaan_dana_id')->on('pengabdians')
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
        Schema::dropIfExists('anggota_pengabdians');
    }
}
