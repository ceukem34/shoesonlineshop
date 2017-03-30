<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePelanggan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('t_pelanggan', function (Blueprint $table) {
	   $table->increments('id_pelanggan');
	   $table->string('nama_pelanggan', 100);
	   $table->string('alamat', 150);
	   $table->string('notelp', 15);
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
        Schema::dropIfExists('t_pelanggan');
    }
}
