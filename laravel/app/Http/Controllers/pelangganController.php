<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pelangganController extends Controller
{
   public function index(){
   $data['result'] = \App\Pelanggan::all();
   return view('pelanggan/index')->with($data);
   }
   public function create(){
	return view('pelanggan/form');
   }
   public function store(Request $request){
	$rules = [
		'nama_pelanggan' => 'required|max:100',
		'notelp' => 'required|max:100'
	];
	$this->validate($request, $rules);
   
	$input = $request->all();
	$status = \App\Pelanggan::create($input);
	
	if ($status) return redirect('pelanggan')->with('success','Data Berhasil ditambahkan!');
	else return redirect('pelanggan')->with('error','Data Gagal ditambahkan!');
	
   }
   
   public function edit($id){
	$data['result'] = \App\Pelanggan::where('id_pelanggan', $id)->first();
	return view('pelanggan/form')->with($data);
   }
   
   public function update(Request $request ,$id){
	$rules = [
		'nama_pelanggan' => 'required|max:100',
		'notelp' => 'required|max:100'
	];
	$this->validate($request, $rules);
	
	$input = $request->all();
	$result = \App\Pelanggan::where('id_pelanggan', $id)->first();
	$status = $result->update($input);
	
	if ($status) return redirect('pelanggan')->with('success','Data Berhasil diubah!');
	else return redirect('pelanggan')->with('error','Data Gagal diubah!');
   }
   public function destroy(Request $request, $id)
   {
	$result = \App\Pelanggan::where('id_pelanggan', $id)->first();
	$status = $result->delete();
	
	if ($status) return redirect('pelanggan')->with('success','Data Berhasil dihapus!');
	else return redirect('pelanggan')->with('error','Data Gagal dihapus!');
   }
}
