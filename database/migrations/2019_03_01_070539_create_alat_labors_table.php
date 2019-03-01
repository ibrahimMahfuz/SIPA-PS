<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlatLaborsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alat_labors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('labor_id');
            $table->string('nama');
            $table->string('kepemilikan');
            $table->string('kondisi');
            $table->string('utilasi');
            $table->foreign('labor_id')
                ->references('id')->on('labors')
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
        Schema::dropIfExists('alat_labors');
    }
}
