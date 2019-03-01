<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRuangDosensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruang_dosens', function (Blueprint $table) {
            $table->unsignedBigInteger('dosen_id');
            $table->unsignedBigInteger('sarana_prasarana_id');
            $table->primary(array('dosen_id','sarana_prasarana_id'));
            $table->foreign('dosen_id')
                ->references('user_id')->on('dosens')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('sarana_prasarana_id')
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
        Schema::dropIfExists('ruang_dosens');
    }
}
