<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_customers');
            $table->string('nama_barang');
            $table->string('jenis_barang');
            $table->string('warna');
            $table->date('tanggal_pesan');
            $table->date('tanggal_datang');
            $table->enum('pembayaran', ['Tunai', 'Non_Tunai']);
            $table->string('alamat');
            $table->unsignedBigInteger('id_customers');

            $table->foreign('id_customers')->refernces('id_customers')->on('customers');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
