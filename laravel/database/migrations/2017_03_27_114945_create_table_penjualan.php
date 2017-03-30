<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePenjualan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('t_penjualan', function (Blueprint $table) {
			$table->increments('id_penjualan');
			$table->integer('id_pelanggan');
			$table->integer('id_sepatu');
			$table->integer('total_pembayaran');
			$table->string('jenis_pembayaran',1);
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
		Schema::dropIfExists('t_penjualan');
    }
}
