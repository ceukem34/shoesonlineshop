@extends('templates/header')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ empty($result) ? 'Tambah' : 'Edit'}} Data Order
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Data Order</li>
        <li class="active">{{ empty($result) ? 'Tambah' : 'Edit'}} Data Order</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	@include('templates/feedback')
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <a href="{{ url('sepatu') }}" class ="btn bg-purple"><i class="fa fa-chevron-left"></i>
			Kembali</a>
		</div>
        <div class="box-body">
			<form action="{{ empty($result) ? url('penjualan/add') : url("penjualan/$result->id_penjualan/edit") }}" class="form-horizontal" method="POST" enctype="multipart/form-data">
				{{ csrf_field() }}
				
				@if (!empty($result))
					{{ method_field('patch') }}
				@endif
			<div class="form-group">
				<label class="control-label col-sm-2">Nama Pelanggan</label>
				<div class="col-sm-10">
					<input type="text" name="nama_pelanggan" class="form-control" placeholder="Masukan Nama Pelanggan" 
					value="{{ @$result->nama_pelanggan }}" />
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Alamat</label>
				<div class="col-sm-10">
					<input type="text" name="alamat" class="form-c	ontrol" placeholder="Masukan Alamat" 
					value="{{ @$result->alamat }}" />
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Nomor Telepon</label>
				<div class="col-sm-5">
					<input type="text" name="notelp" class="form-control" placeholder="Masukan No Telepon"
					value="{{ @$result->notelp }}"	/>
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
				<label class="control-label col-sm-2">Banyak Pembelian</label>
				<div class="col-sm-10">
					<input type="text" name="banyak_pembelian" class="form-control" placeholder="Masukan Banyak Pembelian" 
					value="{{ @$result->banyak_pembelian }}" />
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
 