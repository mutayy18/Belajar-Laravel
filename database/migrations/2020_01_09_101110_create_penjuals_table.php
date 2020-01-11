<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Penjuals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('barang')->unique();
            $table->string('barang_terjual')->nullable();
            $table->text('tanggal_terjual')->nullable();
            $table->string('harga_terjual')->nullable();
            $table->integer('synopsis')->nullable();
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
        Schema::dropIfExists('penjuals');
    }
}
