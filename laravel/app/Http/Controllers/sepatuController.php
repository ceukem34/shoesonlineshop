<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sepatuController extends Controller
{
    public function index(){
   $data['result'] = \App\Sepatu::all();
   return view('sepatu/index')->with($data);
   }
   public function create(){
	return view('sepatu/form');
   }
   public function store(Request $request){
	$rules = [
		'nama' => 'required|max:100',
		'merek' => 'required|max:100',
		'harga' => 'required',
		'stock' => 'required',
		'foto'  => 'required|mimes:jpeg,png|max:512'
	];
	$this->validate($request, $rules);
   
	$input = $request->all();
	
	if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
		$filename = $input['nama'] . "." . $request->file('foto')->getClientOriginalExtension();
		$request->file('foto')->move('uploads/', $filename);
		$input['foto'] = $filename;
	}
	
	$status = \App\Sepatu::create($input);
	
	if ($status) return redirect('sepatu')->with('success','Data Berhasil ditambahkan!');
	else return redirect('sepatu')->with('error','Data Gagal ditambahkan!');
	
   }
   
   public function edit($id){
	$data['result'] = \App\Sepatu::where('id_sepatu', $id)->first();
	return view('sepatu/form')->with($data);
   }
   
   public function update(Request $request ,$id){
	$rules = [
		'nama' => 'required|max:100',
		'merek' => 'required|max:100',
		'harga' => 'required',
		'stock' => 'required',
		
		'foto'  => 'required|mimes:jpeg,png|max:512'
	];
	$this->validate($request, $rules);
	
	$input = $request->all();
	$result = \App\Sepatu::where('id_sepatu', $id)->first();
	if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
		$filename = $input['nama'] . "." . $request->file('foto')->getClientOriginalExtension();
		$request->file('foto')->move('uploads/', $filename);
		$input['foto'] = $filename;
	}
	$status = $result->update($input);
	
	if ($status) return redirect('sepatu')->with('success','Data Berhasil diubah!');
	else return redirect('sepatu')->with('error','Data Gagal diubah!');
   }
   public function destroy(Request $request, $id)
   {
	$result = \App\Sepatu::where('id_sepatu', $id)->first();
	$status = $result->delete();
	
	if ($status) return redirect('sepatu')->with('success','Data Berhasil dihapus!');
	else return redirect('sepatu')->with('error','Data Gagal dihapus!');
   }
}
