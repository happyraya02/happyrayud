<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stoks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_coffee');
            $table->foreign('id_coffee')->references('id')->on('coffees')->onDelete('cascade');
            $table->string('jumlah_barang');
            $table->string('barang_masuk');
            $table->string('barang_keluar');
            $table->string('sisa_barang');
            $table->timestamps();
        });
    }

    /**m
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stoks');
    }
}
