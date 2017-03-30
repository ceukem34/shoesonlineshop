@extends('templates/header')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Orderan
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Data Orderan</li>
        <li class="active">Data Orderan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		@include('templates/feedback')
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
		</div>
        <div>
			<table class="table table-stripped">
			<thead>
				<th>No</th>
				<th>Nama Pelanggan</th>
				<th>Alamat</th>
				<th>Nomor Telepon</th>
				<th>Nama Sepatu</th>
				<th>Banyak Pembelian</th>
				<th>Bukti Transfer</th>
				<th>Action</th>
			</thead>
			<tbody>
				@foreach ($result as $row)
				<tr>
					<td>{{ !empty($i) ? ++$i : $i = 1 }}</td>
					<td>{{ $row->nama_pelanggan }}</td>
					<td>{{ $row->alamat }}</td>
					<td>{{ $row->notelp }}</td>
					<td>{{ $row->sepatu->nama }}</td>
					<td>{{ $row->banyak_pembelian }}</td>
					<td>
						<img src="{{ asset('uploads/bukti_transfer/'.@$row->bukti_transfer)}}" width="80px" height="80px" class="img"/>
					</td>
					
					<td>{{ $row->konfirmasi_order }}</td>
					<td><form action="{{ url("order/$row->id_order/delete")}}" 
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
 