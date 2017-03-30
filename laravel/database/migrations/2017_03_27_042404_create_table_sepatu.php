<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSepatu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('t_sepatu',function (Blueprint $table){
				   $table->increments('id_pelanggan');
				   $table->string('nama',100);
			$table->string('merek',100);
			$table->integer('harga');
			$table->integer('stock');
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
        Schema::dropIfExists('t_sepatu');
    }
}
