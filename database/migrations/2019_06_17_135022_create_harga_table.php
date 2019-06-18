<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_harga', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_sembako');
            $table->unsignedBigInteger('id_pedagang');
            $table->unsignedBigInteger('id_user');
            $table->date('tanggal');
            $table->timestamps();

            $table->foreign('id_sembako')
                ->references('id')
                ->on('tb_sembako');

            $table->foreign('id_pedagang')
                ->references('id')
                ->on('tb_pedagang');

            $table->foreign('id_user')
                ->references('id')
                ->on('tb_user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_harga');
    }
}
