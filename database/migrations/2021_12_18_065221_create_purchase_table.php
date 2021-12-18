<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pembeli');
            $table->string('email');
            $table->string('alamat1');
            $table->string('negara');
            $table->string('kota');
            $table->integer('kode_pos');
            $table->string('nama_produk');
            $table->integer('harga_produk');
            $table->integer('jumlah_beli');
            $table->integer('total_harga');
            $table->unsignedBigInteger('id_produk'); // FK inisialize
            $table->unsignedBigInteger('id_user'); // FK inisialize
            $table->unsignedBigInteger('card_id'); // FK inisialize
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
        Schema::dropIfExists('purchase');
    }
}
