<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    public $primaryKey = 'id_pelanggan';
	
	protected $table = 't_pelanggan';
	
	protected $fillable = [
		'nama_pelanggan','alamat','notelp'
	];
}
