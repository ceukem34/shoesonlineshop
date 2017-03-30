<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
   public $primaryKey = "id_order";
	
	protected $table = 't_order';
	
	protected $fillable = [
		'nama_pelanggan','alamat','notelp','id_sepatu','banyak_pembelian','bukti_transfer'];
	
	public function sepatu()
	{
		return $this->hasOne('\App\Sepatu', 'id_sepatu', 'id_sepatu');
	}
}
