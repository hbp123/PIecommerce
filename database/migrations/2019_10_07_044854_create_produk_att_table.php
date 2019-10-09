<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdukAttTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk_att', function (Blueprint $table) {
            $table->bigIncrements('id_produk_att');
            $table->char('SKU');
            $table->string('warna_produk');
            $table->integer('jumlah_produk');
            $table->integer('stock_produk');
            $table->integer('size_produk');
            $table->integer('harga_produk');
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
        Schema::dropIfExists('produk_att');
    }
}
