<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedagangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pedagang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_lokasi');
            $table->timestamps();

            $table->foreign('id_lokasi')
                ->references('id')
                ->on('tb_lokasi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_pedagang');
    }
}
