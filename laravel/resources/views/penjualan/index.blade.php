@extends('templates/header')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Penjualan
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Data Penjualan</li>
        <li class="active">Data Penjualan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		@include('templates/feedback')
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <a href="{{ url('penjualan/add') }}" class ="btn btn-success"><i class="fa fa-plus-circle"></i>
			Tambah</a>
		</div>
        <div>
			<table class="table table-stripped">
			<thead>
				<th>No</th>
				<th>Nama Pembeli</th>
				<th>Nama Sepatu</th>
				<th>Harga Sepatu</th>
				<th>Pembelian Sebanyak</th>
				<th>Total Pembayaran</th>
				<th>Jenis Pembayaran</th>
				<th>Tanggal Pembelian</th>
			</thead>
			<tbody>
				@foreach ($result as $row)
				<tr>
					<td>{{ !empty($i) ? ++$i : $i = 1 }}</td>
					<td>{{ $row->pelanggan->nama_pelanggan }}</td>
					<td>{{ $row->sepatu->nama }}</td>
					<td>{{ $row->sepatu->harga }}</td>
					<td>{{ $row->banyak_pembelian }}</td>
					<td>{{ $row->sepatu->harga * $row->banyak_pembelian }}</td>
					<td>{{ $row->jenis_pembayaran_display }}</td>
					<td>{{ $row->created_at }}</td>
					<td>
						<a href="{{ url("penjualan/$row->id_penjualan/edit") }}" class="btn btn-sm-btn-warning">
						<i class="fa fa-pencil"></i></a>
						<form action="{{ url("penjualan/$row->id_penjualan/delete")}}" 
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
 