@extends('templates/header')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Sepatu
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Data Sepatu</li>
        <li class="active">Data Sepatu</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		@include('templates/feedback')
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <a href="{{ url('sepatu/add') }}" class ="btn btn-success"><i class="fa fa-plus-circle"></i>
			Tambah</a>
		</div>
        <div>
			<table class="table table-stripped">
			<thead>
				<th>No</th>
				<th>Foto Sepatu</th>
				<th>Nama Sepatu</th>
				<th>Merek Sepatu</th>
				<th>Harga Sepatu</th>
				<th>Stock Sepatu</th>
				<th>Action</th>
			</thead>
			<tbody>
				@foreach ($result as $row)
				<tr>
					<td>{{ !empty($i) ? ++$i : $i = 1 }}</td>
					<td>
						<img src="{{ asset('uploads/'.@$row->foto)}}" width="80px" height="80px" class="img"/>
					</td>
					<td>{{ $row->nama }}</td>
					<td>{{ $row->merek }}</td>
					<td>{{ $row->harga }}</td>
					<td>{{ $row->stock }}</td>
					<td>
						<a href="{{ url("sepatu/$row->id_sepatu/edit") }}" class="btn btn-sm-btn-warning">
						<i class="fa fa-pencil"></i></a>
						<form action="{{ url("sepatu/$row->id_sepatu/delete")}}" 
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
 