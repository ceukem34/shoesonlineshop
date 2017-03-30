<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class orderController extends Controller
{
  public function index()
	{
			$data['result'] = \App\Order::all();
			return view('order/index')->with($data);
	}
	
	public function create()
	{
			return view('order/form');
	}
	
	public function store(Request $request)
	{
		$rules= [
		'nama_pelanggan' => 'required|max:100',
		'alamat' => 'required|max:150',
		'notelp' => 'required|max:100',
		'id_sepatu' => 'required|exists:t_sepatu',
		'banyak_pembelian' => 'required',
		'bukti_transfer' => 'required||mimes:jpeg,png|max:512'
		];
	$this->validate($request, $rules);
	
	$input = $request->all();
	
	if ($request->hasFile('bukti_transfer') && $request->file('bukti_transfer')->isValid()) {
		$filename = $input['nama_pelanggan'] . "." . $request->file('bukti_transfer')->getClientOriginalExtension();
		$request->file('bukti_transfer')->move('uploads/bukti_transfer/', $filename);
		$input['bukti_transfer'] = $filename;
	}
	$status = \App\Order::create($input);
	
	if ($status) return redirect('/')->with('success', 'Data berhasil ditambahkan');
	else return redirect('/')->with('error', 'Data gagal ditambahkan');
	}
	
	public function edit ($id)
	{
		$data['result'] = \App\Order::where('id_order', $id)->first();
		return view('order/form1')->with($data);
	}
	
	public function update (Request $request, $id)
	{
		$rules= [
		'nama_pelanggan' => 'required|max:100',
		'alamat' => 'required|max:150',
		'notelp' => 'required|max:100',
		'id_sepatu' => 'required|exists:t_sepatu',
		'banyak_pembelian' => 'required',
		'bukti_transfer' => 'required||mimes:jpeg,png|max:512'
		];		
	$this->validate($request, $rules);
	
	$input = $request->all();
	$result = \App\Order::where('id_order', $id)->first();
		if ($request->hasFile('bukti_transfer') && $request->file('bukti_transfer')->isValid()) {
		$filename = $input['nama_pelanggan'] . "." . $request->file('bukti_transfer')->getClientOriginalExtension();
		$request->file('bukti_transfer')->move('uploads/bukti_transfer/', $filename);
		$input['bukti_transfer'] = $filename;
	}
	$status = $result->update($input);
	
	if ($status) return redirect('order')->with('success', 'Data berhasil ditambahkan');
	else return redirect('order')->with('error', 'Data gagal ditambahkan');
	}
	 public function destroy(Request $request, $id)
   {
	$result = \App\Order::where('id_order', $id)->first();
	$status = $result->delete();
	
	if ($status) return redirect('order')->with('success','Data Berhasil dihapus!');
	else return redirect('order')->with('error','Data Gagal dihapus!');
   }
}
