@extends('templates/header')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       HOMEPAGE
        <small>it all starts here</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
		@include('templates/feedback')
      <!-- Default box -->
            <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      <!-- /.box -->

    </section>
	@endsection
    <!-- /.content -->
 