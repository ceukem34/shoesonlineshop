<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    public $primaryKey = "id_penjualan";
	
	protected $table = 't_penjualan';
	
	protected $fillable = [
		'id_pelanggan','id_sepatu','total_pembayaran','jenis_pembayaran','banyak_pembelian'];
	
	public function getJenisPembayaranDisplayAttribute()
	{
		if (@$this->attributes['jenis_pembayaran'] == 'T') return 'Tunai';
		if (@$this->attributes['jenis_pembayaran'] == 'K') return 'Kredit';
		return '-';
	}
	
	public function pelanggan()
	{
		return $this->hasOne('\App\Pelanggan', 'id_pelanggan', 'id_pelanggan');
	}
	
	public function sepatu()
	{
		return $this->hasOne('\App\Sepatu', 'id_sepatu', 'id_sepatu');
	}
	
}
