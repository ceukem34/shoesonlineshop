<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class penjualanController extends Controller
{
    public function index()
	{
			$data['result'] = \App\Penjualan::all();
			return view('penjualan/index')->with($data);
	}
	
	public function create()
	{
			return view('penjualan/form');
	}
	
	public function store(Request $request)
	{
		$rules= [
		'id_pelanggan'	=> 'required|exists:t_pelanggan',
		'id_sepatu'		=> 'required|exists:t_sepatu',
		'jenis_pembayaran' =>	'required',
		'banyak_pembelian' =>	'required'
		];
	$this->validate($request, $rules);
	
	$input = $request->all();
	$status = \App\Penjualan::create($input);
	
	if ($status) return redirect('penjualan')->with('success', 'Data berhasil ditambahkan');
	else return redirect('penjualan')->with('error', 'Data gagal ditambahkan');
	}
	
	public function edit ($id)
	{
		$data['result'] = \App\Penjualan::where('id_penjualan', $id)->first();
		return view('penjualan/form')->with($data);
	}
	
	public function update (Request $request, $id)
	{
		$rules= [
		'id_pelanggan'	=> 'required|exists:t_pelanggan',
		'id_sepatu'		=> 'required|exists:t_sepatu',
		'jenis_pembayaran' =>	'required',
		'banyak_pembelian' =>	'required'
		];
		
	$this->validate($request, $rules);
	
	$input = $request->all();
	$result = \App\Penjualan::where('id_penjualan', $id)->first();
	$status = $result->update($input);
	
	if ($status) return redirect('penjualan')->with('success', 'Data berhasil ditambahkan');
	else return redirect('penjualan')->with('error', 'Data gagal ditambahkan');
	}
	 public function destroy(Request $request, $id)
   {
	$result = \App\Penjualan::where('id_penjualan', $id)->first();
	$status = $result->delete();
	
	if ($status) return redirect('penjualan')->with('success','Data Berhasil dihapus!');
	else return redirect('penjualan')->with('error','Data Gagal dihapus!');
   }
}