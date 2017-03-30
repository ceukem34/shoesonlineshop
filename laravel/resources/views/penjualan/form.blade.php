@extends('templates/header')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ empty($result) ? 'Tambah' : 'Edit'}} Data Penjualan
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Data Penjualan</li>
        <li class="active">{{ empty($result) ? 'Tambah' : 'Edit'}} Data Penjualan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	@include('templates/feedback')
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <a href="{{ url('penjualan') }}" class ="btn bg-purple"><i class="fa fa-chevron-left"></i>
			Kembali</a>
		</div>
        <div class="box-body">
			<form action="{{ empty($result) ? url('penjualan/add') : url("penjualan/$result->id_penjualan/edit") }}"
			class="form-horizontal" method="POST">
				{{ csrf_field() }}
				
				@if (!empty($result))
					{{ method_field('patch') }}
				@endif
			<div class="form-group">
				<label class="control-label col-sm-2">Nama Pembeli</label>
				<div class="col-sm-10">
					<select name="id_pelanggan" class="form-control">
						@foreach (\App\Pelanggan::all() as $pelanggan)
								<option value="{{ $pelanggan->id_pelanggan }}" {{@$result->id_pelanggan == 
							$pelanggan->id_pelanggan ? 'selected' : '' }}>{{ $pelanggan->nama_pelanggan}}</option>
						@endforeach
					</select>
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-sm-2">Nama Sepatu</label>
				<div class="col-sm-10">
					<select name="id_sepatu" class="form-control">
						@foreach (\App\Sepatu::all() as $sepatu)
								<option value="{{ $sepatu->id_sepatu }}" {{@$result->id_sepatu == 
							$sepatu->id_sepatu ? 'selected' : '' }}>{{ $sepatu->nama}}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Total Pembelian</label>
				<div class="col-sm-10">
					<input type="text" name="banyak_pembelian" class="form-control" placeholder="Masukan Total Pembelian" 
					value="{{ @$result->banyak_pembelian }}" />
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-sm-2">Jenis Pembayaran</label>
				<div class="col-sm-10">
				<div class="checkbox">
				<label><input type="radio" name="jenis_pembayaran" value="T" {{ (@$result->
				jenis_pembayaran == 'T' ? 'checked' : '')}}/> Tunai </label>
				<label><input type="radio" name="jenis_pembayaran" value="K" {{ (@$result->
				jenis_pembayaran == 'K' ? 'checked' : '')}}/> Kredit </label>
				</div>
			</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10 col-sm-offset-2">
					<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>
					Simpan</button>
				</div>
			</div>
			</form>
        </div>  
        
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
	@endsection
    <!-- /.content -->
  </div>
 