@extends('templates/header')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Pelanggan
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Data Pelanggan</li>
        <li class="active">Data Pelanggan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		@include('templates/feedback')
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <a href="{{ url('pelanggan/add') }}" class ="btn btn-success"><i class="fa fa-plus-circle"></i>
			Tambah</a>
		</div>
        <div>
			<table class="table table-stripped">
			<thead>
				<th>No</th>
				<th>Nama Pelanggan</th>
				<th>Alamat</th>
				<th>Nomor Telepon</th>
				<th>Action</th>
			</thead>
			<tbody>
				@foreach ($result as $row)
				<tr>
					<td>{{ !empty($i) ? ++$i : $i = 1 }}</td>
					<td>{{ $row->nama_pelanggan }}</td>
					<td>{{ $row->alamat }}</td>
					<td>{{ $row->notelp }}</td>
					<td>
						<a href="{{ url("pelanggan/$row->id_pelanggan/edit") }}" class="btn btn-sm-btn-warning">
						<i class="fa fa-pencil"></i></a>
						<form action="{{ url("pelanggan/$row->id_pelanggan/delete")}}" 
						method="POST" style="display:inline;">
							{{ csrf_field() }}
							{{ method_field('DELETE') }}
							<button class="btn btn-sm-btn-danger"><i class="fa fa-trash"></i></a>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
			</table>
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
 