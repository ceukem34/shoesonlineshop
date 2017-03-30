<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
    <head>
    <title>MAKSOEM SHOES ONLINE SHOP</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="N-Air Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<meta charset utf="8">
		<!--fonts-->
		<link href='//fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
		
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
    </head>
    <body alt="...">>
        <div class="header">
            <div class="container">
                <div class="header-top">
                    <div class="logo">
                        <a href="{{url('/')}}">MAKSOEM</a>
                    </div>
                    <div class="login-bars">
					<a class="btn btn-default log-bar" href="{{url('order/add')}}" role="button">ORDER</a>
                        
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
                        <div class="clearfix"></div>
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
        <div class="header-end">
            <div class="container">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="{{ asset('assets/template')}}/images/shoe3.jpg" alt="...">
                        <div class="carousel-caption car-re-posn">
                            <h3>AirMax</h3>
                            <h4>You feel to fall</h4>
                            <span class="color-bar"></span>
                        </div>
                    </div>
                    <div class="item">
                      <img src="{{ asset('assets/template')}}/images/shoe1.jpg" alt="...">
                        <div class="carousel-caption car-re-posn">
                            <h3>AirMax</h3>
                            <h4>You feel to fall</h4>
                            <span class="color-bar"></span>
                        </div>
                    </div>
                    <div class="item">
                      <img src="{{ asset('assets/template')}}/images/shoe2.jpg" alt="...">
                        <div class="carousel-caption car-re-posn">
                            <h3>AirMax</h3>
                            <h4>You feel to fall</h4>
                            <span class="color-bar"></span>
                        </div>
                    </div>
                  </div>

                  <!-- Controls -->
                  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left car-icn" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right car-icn" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="feel-fall">
            <div class="container">
                <div class="pull-left fal-box">
                    <div class=" fall-left">
                        <h3>Fall</h3>
                        <img src="{{ asset('assets/template')}}/images/f-l.png" alt="/" class="img-responsive fl-img-wid">
                        <p>Inspiration and innovation<br> for every athlete in the world</p>
                        <span class="fel-fal-bar"></span>
                    </div>
                </div>
                <div class="pull-right fel-box">
                    <div class="feel-right">
                        <h3>Feel</h3>
                        <img src="{{ asset('assets/template')}}/images/f-r.png" alt="/" class="img-responsive fl-img-wid">
                        <p>Inspiration and innovation<br> for every athlete in the world</p>
                        <span class="fel-fal-bar2"></span>
                    </div>
                </div>
            <div class="clearfix"></div>
            </div>
        </div>
        <div class="shop-grid">
            <div class="container">
			<center><h2>OUR PRODUCT</h2></center>
			@foreach (\App\Sepatu::all() as $sepatu)
                <div class="col-md-4 grid-stn simpleCart_shelfItem">
                     <!-- normal -->
                        <div class="ih-item square effect3 bottom_to_top">
                            <div class="bottom-2-top">
                    <div class="img"><img src="{{ asset('uploads/'.@$sepatu->foto)}}" alt="/" class="img-responsive gri-wid"></div>
                            <div class="info">
                                <div class="pull-left styl-hdn">
                                    <h3>{{@$sepatu->nama}}</h3>
                                    <h3>{{@$sepatu->harga}}</h3>
                                </div>
                                <div class="clearfix"></div>
                            </div></div>
                        </div>
						
                </div>
				
			@endforeach
			
        <div class="clearfix"></div>
            
			</div>
        </div>	
        </div>
        <div class="footer-grid">
            <div class="container">
                <div class="col-md-8 re-ft-grd">		
                    <h3>Social</h3>
                    <ul class="social">
                        <li><a href="www.facebook.com" class="fb">facebook</a></li>
                        <li><a href="mail.google.com" class="twt">Google Mail</a></li>
                        <div class="clearfix"></div>
                    </ul>
                </div>
                <div class="col-md-4 re-ft-grd">
                    <div class="bt-logo">
                        <div class="logo">
                            <a href="index.html" class="ft-log">MAKSOEM</a>
                        </div>
                    </div>
                </div>
        <div class="clearfix"></div>
            </div>
            <div class="copy-rt">
                <div class="container">
            <p>&copy;   2017 Rights Reserved. Design by M4KS03M</p>
                </div>
            </div>
        </div>
    </body>
</html>