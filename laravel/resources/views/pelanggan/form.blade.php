@extends('templates/header')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ empty($result) ? 'Tambah' : 'Edit'}} Data Pelanggan
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Data Pelanggan</li>
        <li class="active">{{ empty($result) ? 'Tambah' : 'Edit'}} Data Pelanggan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	@include('templates/feedback')
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <a href="{{ url('pelanggan') }}" class ="btn bg-purple"><i class="fa fa-chevron-left"></i>
			Kembali</a>
		</div>
        <div class="box-body">
			<form action="{{ empty($result) ? url('pelanggan/add') : url("pelanggan/$result->id_pelanggan/edit") }}"
			class="form-horizontal" method="POST">
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
					<input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat Pelanggan" 
					value="{{ @$result->alamat }}" />
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Nomor Telepon</label>
				<div class="col-sm-10">
					<input type="text" name="notelp" class="form-control" placeholder="Masukan Nomor Telepon Pelanggan"
					value="{{ @$result->notelp }}"	/>
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
 