<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSembakoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_sembako', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama')->unique();
            $table->unsignedBigInteger('id_jenis_sembako');
            $table->unsignedBigInteger('id_satuan')->nullable();
            $table->timestamps();

            $table->foreign('id_jenis_sembako')
                ->references('id')
                ->on('tb_jenis_sembako');
            $table->foreign('id_satuan')
                ->references('id')
                ->on('tb_satuan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_sembako');
    }
}
