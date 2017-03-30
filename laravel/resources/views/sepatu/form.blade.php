@extends('templates/header')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ empty($result) ? 'Tambah' : 'Edit'}} Data Sepatu
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('sepatu') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Data Sepatu</li>
        <li class="active">{{ empty($result) ? 'Tambah' : 'Edit'}} Data Sepatu</li>
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
			<form action="{{ empty($result) ? url('sepatu/add') : url("sepatu/$result->id_sepatu/edit") }}"
			class="form-horizontal" method="POST" enctype="multipart/form-data">
				{{ csrf_field() }}
				
				@if (!empty($result))
					{{ method_field('patch') }}
				@endif
			<div class="form-group">
				<label class="control-label col-sm-2">Nama Sepatu</label>
				<div class="col-sm-10">
					<input type="text" name="nama" class="form-control" placeholder="Masukan Nama Sepatu" 
					value="{{ @$result->nama }}" />
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Merek Sepatu</label>
				<div class="col-sm-10">
					<input type="text" name="merek" class="form-control" placeholder="Masukan Merek Sepatu" 
					value="{{ @$result->merek }}" />
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Harga Sepatu</label>
				<div class="col-sm-5">
					<input type="text" name="harga" class="form-control" placeholder="Masukan Harga Sepatu"
					value="{{ @$result->harga }}"	/>
				</div>
			</div>
			<div class="form-group">
			<label class="control-label col-sm-2">Stock sepatu</label>
				<div class="col-sm-3">
					<input type="text" name="stock" class="form-control" placeholder="Masukan Stock Sepatu"
					value="{{ @$result->stock }}"	/>
				</div>
			</div>
			
			<div class="form-group">
			<label class="control-label col-sm-2">Foto Sepatu</label>
				<div class="col-sm-10">
					<input type="file" name="foto" />
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
 