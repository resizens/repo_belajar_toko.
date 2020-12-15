<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('nama_barang');
            $table->enum('jenis_barang',['Alat_dapur','Mebel', 'Mainan', 'Perabotan', 'Alat_Tulis', 'Baju', 'dll']);
            $table->String('warna');
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
