<?php

use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
			"nama_pelanggan"=> "Maksum",
			"alamat"=> "Jl Balaendah",
			"notelp"=> "097679022"
		];
		DB::table('t_pelanggan')->insert($data);
		
		$data = [
			"nama_pelanggan"=> "Ukin",
			"alamat"=> "Jl Batujajar",
			"notelp"=> "0976794232"
		];
		DB::table('t_pelanggan')->insert($data);
    }
}
