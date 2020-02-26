	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="{{asset('assets/frontend/coffee/img/fav.png')}}">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Coffee</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="{{asset('assets/frontend/coffee/css/linearicons.css')}}">
			<link rel="stylesheet" href="{{asset('assets/frontend/coffee/css/font-awesome.min.css')}}">
			<link rel="stylesheet" href="{{asset('assets/frontend/coffee/css/bootstrap.css')}}">
			<link rel="stylesheet" href="{{asset('assets/frontend/coffee/css/magnific-popup.css')}}">
			<link rel="stylesheet" href="{{asset('assets/frontend/coffee/css/nice-select.css')}}">
			<link rel="stylesheet" href="{{asset('assets/frontend/coffee/css/animate.min.css')}}">
			<link rel="stylesheet" href="{{asset('assets/frontend/coffee/css/owl.carousel.css')}}">
			<link rel="stylesheet" href="{{asset('assets/frontend/coffee/css/main.css')}}">
		</head>
		<body>

			  <header id="header" id="home">
				<div class="header-top">
		  			<div class="container">
				  		<div class="row justify-content-end">
				  			<div class="col-lg-8 col-sm-4 col-8 header-top-right no-padding">
				  				{{-- <ul>
				  					<li>
				  						Mon-Fri: 8am to 2pm
				  					</li>
				  					<li>
				  						Sat-Sun: 11am to 4pm
				  					</li>
				  					<li>
				  						<a href="tel:(012) 6985 236 7512">(012) 6985 236 7512</a>
				  					</li>
				  				</ul> --}}
				  			</div>
				  		</div>
		  			</div>
				</div>
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="/"><img src="{{asset('assets/frontend/coffee/img/logo.png')}}" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				            <li><a href="cart">Cart</a></li>
							<li><a href="fav">Fav</a></li>
				        </ul>
				      </nav><!-- #nav-menu-container -->
			    	</div>
			    </div>
			  </header><!-- #header -->



			<!-- Start menu Area -->
			<section class="menu-area section-gap" id="manfaat">


                                    <br>
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="card">


                                            <div class="card-body">
                                                <form action="" method="post">
                                                    <input type="hidden" name="_method" value="PATCH">
                                                    {{csrf_field()}}
                                                    <div class="form-group">
                                                        <label for=""> <b> Nama Pembeli</b></label>
                                                        <input class="form-control" type="text" name="nama" id="" value="">
                                                    </div>
                                                <div class="form-group">
                                                        <label for=""><b>nama Kopi</b></label>
                                                        <input class="form-control" type="text" name="nama_coffee" id="" value="{{$coffee->nama_kopi}}" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for=""><b>Harga Coffee</b></label>
                                                        <input class="form-control" type="text" name="jumlah_kopi" id="" value="{{$coffee->harga}}/kg" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for=""><b>jumlah_kopi</b></label>
                                                        <input class="form-control" type="number" name="jumlah_kopi" id="" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <a href="" class="btn btn-outline-info">Check out</a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
			</section>
            <!-- End menu Area -->



			<script src="{{asset('assets/frontend/coffee/js/vendor/jquery-2.2.4.min.js')}}"></script>
			<script src="{{asset('assets/frontend/coffee/https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js')}}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="{{asset('assets/frontend/coffee/js/vendor/bootstrap.min.js')}}"></script>
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="{{asset('assets/frontend/coffee/js/easing.min.js')}}"></script>
			<script src="{{asset('assets/frontend/coffee/js/hoverIntent.js')}}"></script>
			<script src="{{asset('assets/frontend/coffee/js/superfish.min.js')}}"></script>
			<script src="{{asset('assets/frontend/coffee/js/jquery.ajaxchimp.min.js')}}"></script>
			<script src="{{asset('assets/frontend/coffee/js/jquery.magnific-popup.min.js')}}"></script>
			<script src="{{asset('assets/frontend/coffee/js/owl.carousel.min.js')}}"></script>
			<script src="{{asset('assets/frontend/coffee/js/jquery.sticky.js')}}"></script>
			<script src="{{asset('assets/frontend/coffee/js/jquery.nice-select.min.js')}}"></script>
			<script src="{{asset('assets/frontend/coffee/js/parallax.min.js')}}"></script>
			<script src="{{asset('assets/frontend/coffee/js/waypoints.min.js')}}"></script>
			<script src="{{asset('assets/frontend/coffee/js/jquery.counterup.min.js')}}"></script>
			<script src="{{asset('assets/frontend/coffee/js/mail-script.js')}}"></script>
			<script src="{{asset('assets/frontend/coffee/js/main.js')}}"></script>
		</body>
	</html>



