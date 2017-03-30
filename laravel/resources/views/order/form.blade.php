
<!DOCTYPE html>
<html lang="en">
    <head>
    <title>MAKSOEM ONLINE SHOP</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="N-Air Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<meta charset utf="8">
		<!--fonts-->
		<link href='//fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
		
		<!--fonts-->
			<!--fonts-->
		<!--bootstrap-->
			 <link href="{{ asset('assets/template')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<!--coustom css-->
			<link href="{{ asset('assets/template')}}/css/style.css" rel="stylesheet" type="text/css"/>
        <!--shop-kart-js-->
        <script src="{{ asset('assets/template')}}/js/simpleCart.min.js"></script>
		<!--default-js-->
			<script src="{{ asset('assets/template')}}/js/jquery-2.1.4.min.js"></script>
		<!--bootstrap-js-->
			<script src="{{ asset('assets/template')}}/js/bootstrap.min.js"></script>
		<!--script-->
         <!-- FlexSlider -->
            <script src="{{ asset('assets/template')}}/js/imagezoom.js"></script>
              <script defer src="{{ asset('assets/template')}}/js/jquery.flexslider.js"></script>
            <link rel="stylesheet" <href src="{{ asset('assets/template')}}/css/flexslider.css" type="text/css" media="screen" />

            <script>
            // Can also be used with $(document).ready()
            $(window).load(function() {
              $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
              });
            });
            </script>
        <!-- //FlexSlider-->
    </head>
    <body>
        <div class="header">
            <div class="container">
                <div class="header-top">
                    <div class="logo">
                        <a href="{{url('/')}}">MAKSOEM</a>
                    </div>
                    <div class="login-bars">
                        <a class="btn btn-default log-bar" href="{{url('order/add')}}" role="button">Order</a>
                        <a class="btn btn-default log-bar" href="{{url('login')}}" role="button">Login</a>	
                    </div>
        <div class="clearfix"></div>
                </div>
                <!---menu-----bar--->
                <div class="header-botom">
                    <div class="content white">
                    <nav class="navbar navbar-default nav-menu" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!--/.navbar-header-->

                        <div class="collapse navbar-collapse collapse-pdng" id="bs-example-navbar-collapse-1">
                            
                            <div class="clearfix"></div>
                        </div>
                        <!--/.navbar-collapse-->
                        <div class="clearfix"></div>
                    </nav>
                    <!--/.navbar-->   
                        <div class="clearfix"></div>
                    </div>
                    <!--/.content--->
                </div>
                    <!--header-bottom-->
            </div>
        </div>
        <div class="head-bread">
            <div class="container">
			
	@include('templates/feedback')
                <ol class="breadcrumb">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li class="active">ORDER</li>
                </ol>
            </div>
        </div>
        <!-- reg-form -->
	<div class="reg-form">
		<div class="container">
			<div class="reg">
				<h3>Order Now</h3>
				 <form action="{{ url('order/add') }}" method="POST" enctype="multipart/form-data">
				 {{ csrf_field() }}
				
				@if (!empty($result))
					{{ method_field('patch') }}
				@endif
					<ul class="col-md-8">
						<li class="text-info">Nama : </li>
						<li><input type="text" name="nama_pelanggan" value=""></li>
					</ul>
					<ul class="col-md-9">
						<li class="text-info">Alamat : </li>
						<li><input type="text" name="alamat" value=""></li>
					 </ul>				 
					<ul class="col-md-8">
						<li class="text-info">No Telepon :  </li>
						<li><input class="form-control" type="text" name="notelp" value=""></li>
					</ul>
					<ul class="col-md-6">
						<li class="text-info">Nama Sepatu :  </li>
						<li><select name="id_sepatu" class="form-control">
						@foreach (\App\Sepatu::all() as $sepatu)
						<option value="{{ $sepatu->id_sepatu }}" >{{ $sepatu->nama}} Rp.{{$sepatu->harga}}
						</option>
						@endforeach
						</select>
						</li>
					</ul>
									 
					<ul class="col-md-8">
						<li class="text-info">Banyak Pembelian :  </li>
						<li><input class="form-control" type="text" name="banyak_pembelian" value=""/></li>
					</ul>
					
					<ul class="col-md-6">
					<li class="text-info">Foto Bukti Transfer</li>
					<li><input type="file" name="bukti_transfer" /></li>
					</ul>
					
				
					<ul class="col-md-8">
					<li><button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>
					Simpan</button></li>
					</ul>
				</form>
			</div>
		</div>
	</div>
        <div class="footer-grid">
            <div class="container">
                
                <div class="col-md-8 re-ft-grd">
                    <h3>Social</h3>
                    <ul class="social">
                        <li><a href="www.facebook.com" class="fb">facebook</a></li>
                        <li><a href="www.twitter.com" class="twt">twitter</a></li>
                        <li><a href="mail.google.com" class="gpls">Google Mail</a></li>
                        <div class="clearfix"></div>
                    </ul>
                </div>
                <div class="col-md-4 re-ft-grd">
                    <div class="bt-logo">
                        <div class="logo">
                            <a href="index.html" class="ft-log">N-AIR</a>
                        </div>
                    </div>
                </div>
        <div class="clearfix"></div>
            </div>
            <div class="copy-rt">
                <div class="container">
            <p>&copy;   2017 Rights Reserved. Design by M4KS03M</a></p>
                </div>
            </div>
        </div>
    </body>
</html>