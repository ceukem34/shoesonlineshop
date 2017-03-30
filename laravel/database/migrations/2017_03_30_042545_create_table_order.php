<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
       Schema::create('t_order', function (Blueprint $table) {
	   $table->increments('id_order');
	   $table->string('nama_pelanggan', 100);
	   $table->string('alamat', 150);
	   $table->string('notelp', 15);
	   $table->integer('id_sepatu');
	   $table->string('bukti_transfer', 150);
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
        Schema::dropIfExists('t_order');
    }
}
