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
				          <li class="menu-active"><a href="#home">Home</a></li>
				          <li><a href="#pembuatan">pembuatan</a></li>
				          <li><a href="#manfaat">manfaat</a></li>
                          <li><a href="#efek">efek</a></li>
                          <li><a href="#sejarah">sejarah</a></li>
                          <li><a href="#galeri">gallery</a></li>
				          <li><a href="#shop">Shop</a></li>

				        </ul>
				      </nav><!-- #nav-menu-container -->
			    	</div>
			    </div>
			  </header><!-- #header -->


			<!-- start banner Area -->
			<section class="banner-area" id="home">
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-start">
						<div class="banner-content col-lg-7">
							<h6 class="text-white text-uppercase">kOPI KAMI KOPI INDONESIA</h6>
							<h1>
								Begin Your Day <br>
								by drinking coffee
							</h1>
							{{-- <a href="#" class="primary-btn text-uppercase">Buy Now</a> --}}
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start video-sec Area -->
			<section class="video-sec-area pb-100 pt-40" id="pembuatan">
				<div class="container">
					<div class="row justify-content-start align-items-center">
						<div class="col-lg-6 video-right justify-content-center align-items-center d-flex">
							<div class="overlay overlay-bg"></div>
							<a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid" src="{{asset('assets/frontend/coffee/img/play-icon.png')}}" alt=""></a>
						</div>
						<div class="col-lg-6 video-left">
							<h6>Live Coffee making process.</h6>
							<h1>Pembuatan Kopi<br>
							Langsung</h1>
							<p><span>We are here to listen from you deliver exellence</span></p>
							<p>
								di sini saya memberikan siaran langsung pembuatan kopi agar kalian para pecinta kopi tahu bagaimana awal mula kopi hingga bisa menjadi kopi instan</p>
							<img class="img-fluid" src="{{asset('assets/frontend/coffee/img/signature.png')}}" alt="">
						</div>
					</div>
				</div>
			</section>
			<!-- End video-sec Area -->

			<!-- Start menu Area -->
			<section class="menu-area section-gap" id="manfaat">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">Manfaat Kopi</h1>
								<p>Sejumlah studi menunjukkan bahwa orang yang rutin minum kopi 2-3 cangkir kopi sehari memiliki risiko lebih rendah mengalami penyakit serius, seperti diabetes tipe 2, kanker, penyakit jantung, penyakit Parkinson, dan gangguan hati.</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Membuat Mata Melek</h4>
									{{-- <p class="price float-right">
										$49
									</p> --}}
								</div>
								<p>
									Meminum kopi saat kamu ngantuk, seketika kamu akan terasa khasiatnya. Kopi bisa jadi penyelamat agar mata melek di pagi dan malam hari.</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Antioksidan Yang Baik</h4>
									{{-- <p class="price float-right">
										$49
									</p> --}}
								</div>
								<p>Menghirup aroma kopi setara dengan antioksidan tiga buah jeruk. Kamu tahu kan kalau antioksidan membantu tubuh melawan penyakit.
								</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Menghilangkan Setres</h4>
									{{-- <p class="price float-right">
										$49
									</p> --}}
								</div>
								<p>
								Aroma kopi bisa bikin hati tenang meski menghirupnya, meminum akan meningkatkan zat serotonin dan menghilangkan depresi/stres</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Metabolisme Tubuh</h4>
									{{-- <p class="price float-right">
										$49
									</p> --}}
								</div>
								<p>
									Kafein yang terkandung dalam secangkir kopi dapat meningkatkan pelepasan lemak dan meningkatkan metabolisme tubuh</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Mengurangi Risiko Kanker Kulit</h4>
									{{-- <p class="price float-right">
										$49
									</p> --}}
								</div>
								<p>
									kafein dalam kopi dapat membantu pengencangan kulit, Minum kopi setiap hari dapat mengurangi risiko kanker kulit, terutama pada wanita.</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Meningkatkan Stamina</h4>
									{{-- <p class="price float-right">
										$49
									</p> --}}
								</div>
								<p>
									Minum kopi bisa meningkatkan stamina saat olahraga. Kafein ternyata dapat membantumu menyimpan energi saat berolahraga. </p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Mengurangi Risiko Diabetes</h4>
									{{-- <p class="price float-right">
										$49
									</p> --}}
								</div>
								<p>
									Diabetes disebabkan karena tubuh tidak efektif/kekurangan insulin, meminum kopi hitam Khasiatnya mengurangi risiko diabetes</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Otak Jadi Lebih Sehat</h4>
									{{-- <p class="price float-right">
										$49
									</p> --}}
								</div>
								<p>
									 Hasil penelitian itu menyatakan kafein dapat membantu otak lebih sehat, pintar dan lebih lama mengingat informasi yang di dapat</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Mengurangi Tingkat Kematian</h4>
									{{-- <p class="price float-right">
										$49
									</p> --}}
								</div>
								<p>
									Meminum kopi secara signifikan meminum 2-4 cangkir kopi tiap hari memiliki 18 persen kemungkinan meninggal lebih renda</p>
							</div>
						</div>
					</div>
				</div>
			</section>
            <!-- End menu Area -->

            <!-- Start menu Area -->
			<section class="menu-area section-gap" id="efek">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">Efek Samping Kopi</h1>
								<p>Mengkonsumsi kafein dalam jumlah yang lebih besar yaitu sekitar 1000 mg atau sekitar 6 cangkir kopi per hari, dapat memicu timbulnya efek samping seperti Insomnia, Sering buang air kecil, dan Gelisah</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Gangguan Pencernaan</h4>
									{{-- <p class="price float-right">
										$49
									</p> --}}
								</div>
								<p>
									kopi hitam dan minuman berkafein lain juga bisa mengalami gangguan pencernaan. Hal ini karena kandungan kafein yang terdapat di dalamnya dapat meningkatkan asam lambung</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Kekurangan Gizi</h4>
									{{-- <p class="price float-right">
										$49
									</p> --}}
								</div>
								<p>minuman tersebut tidak mengandung vitamin dan mineral, yang dibutuhkan anak pada masa pertumbuhannya. Oleh karena itu dapat meningkatkan risiko anak mengalami kekurangan gizi.</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Gangguan Tidur</h4>
									{{-- <p class="price float-right">
										$49
									</p> --}}
								</div>
								<p>
								kafein yang terkandung di kopi hitam dapat menjadi stimulan yang bisa meningkatkan tekanan darah dan denyut jantung anak, serta membuat mereka menjadi sulit tidur.</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Dehidrasi</h4>
									{{-- <p class="price float-right">
										$49
									</p> --}}
								</div>
								<p>
									Kafein pada kopi hitam dapat menyebabkan tubuh mengeluarkan banyak cairan. Jika cairan tubuh yang dikeluarkan terlalu banyak, berisiko mengalami dehidrasi.</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>menghambat pertumbuhan</h4>
									{{-- <p class="price float-right">
										$49
									</p> --}}
								</div>
								<p>
									kopi hitam dapat menghambat pertumbuhan, karena kafein dapat mengganggu penyerapan kalsium dalam tubuh, sehingga pertumbuhan tulang akan terganggu.</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Menyebabkan Gigi Berlubang</h4>
									{{-- <p class="price float-right">
										$49
									</p> --}}
								</div>
								<p>
									Minuman berkafein, penambahan gula menyebabkan kopi dikonsumsi memiliki kandungan gula tinggi, dan bila dikonsumsi sering, menyebabkan gigi berlubang.</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Menurunkan Kesuburan</h4>
									{{-- <p class="price float-right">
										$49
									</p> --}}
								</div>
								<p>
									Mengonsumsi kafein yang berlebih enyebabkan penyakit pada dalam tubuh wanita, tuba falopi dan endometrium, sehingga menyebabkan ketidaksuburan pada wanita.</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Gangguan Jantung</h4>
									{{-- <p class="price float-right">
										$49
									</p> --}}
								</div>
								<p>
									 Gejala pertama yang ditimbulkan adalah jantung akan terasa berdebar apabila terlalu banyak minum kopi. Hal ini karena kafein dapat mempengaruhi susunan saraf pusat pada otak.</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Gangguan Pencernaan</h4>
									{{-- <p class="price float-right">
										$49
									</p> --}}
								</div>
								<p>
									Orang yang mempunyai kebiasaan mengkonsumsi minuman yang berkafein memang akan lebih sering mengeluhkan perutnya sakit. Apalagi di lakukan saat keadaan perut masih keadaan kosong.</p>
							</div>
						</div>
					</div>
				</div>
			</section>
            <!-- End menu Area -->

            <!-- Start review Area -->
			<section class="review-area section-gap" id="sejarah">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">What kind of Coffee we serve for you</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 single-review">
							{{-- <img src="{{asset('assets/frontend/coffee/img/r1.png')}}" alt=""> --}}
							<div class="title d-flex flex-row">
								<h4>Sejarah Kopi</h4>
								{{-- <div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div> --}}
							</div>
							<p>
								Sejarah kopi telah dicatat sejauh pada abad ke-9. Pertama kali, kopi hanya ada di Ethiopia, di mana biji-bijian asli ditanam oleh orang Ethiopia dataran tinggi. Akan tetapi, ketika bangsa Arab mulai meluaskan perdagangannya, biji kopi pun telah meluas sampai ke Afrika Utara dan biji kopi di sana ditanam secara massal.</p>
						</div>
						<div class="col-lg-6 col-md-6 single-review">
							{{-- <img src="{{asset('assets/frontend/coffee/img/r2.png')}}" alt=""> --}}
							<div class="title d-flex flex-row">
								<h4>Sejarah Kopi</h4>
							</div>
							<p>
								Sejarah kopi konon bermula pada abad ke-9 di Ethiopia. Namun, budidaya dan perdagangan kopi baru mulai populer pada abad ke-15 oleh pedagang Arab di Yaman. Kopi mencapai Eropa pada abad ke-17 namun tidak dapat tumbuh baik di sana. Bangsa-bangsa Eropa lantas menggunakan daerah jajahannya untuk membudidayakan tanaman kopi. Indonesia, yang diduduki Belanda, memiliki andil yang besar dalam sejarah dan persebaran jenis kopi di dunia.</p>
						</div>
					</div>
					<div class="row counter-row">
						<div class="col-lg-3 col-md-6 single-counter">
							<h1 class="counter">2536</h1>
							<p>Happy Client</p>
						</div>
						<div class="col-lg-3 col-md-6 single-counter">
							<h1 class="counter">7562</h1>
							<p>Total Projects</p>
						</div>
						<div class="col-lg-3 col-md-6 single-counter">
							<h1 class="counter">2013</h1>
							<p>Cups Coffee</p>
						</div>
						<div class="col-lg-3 col-md-6 single-counter">
							<h1 class="counter">10536</h1>
							<p>Total Submitted</p>
						</div>
					</div>
				</div>
			</section>
			<!-- End review Area -->

			<!-- Start gallery Area -->
			<section class="gallery-area section-gap" id="galeri">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Here I present a coffee gallery</h1>
								<p>Our Coffee Journey Our Indonesia</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4">
							<a href="{{asset('assets/frontend/coffee/img/g1.jpg')}}" class="img-pop-home">
								<img class="img-fluid" src="{{asset('assets/frontend/coffee/img/g1.jpg')}}" alt="">
							</a>
							<a href="{{asset('assets/frontend/coffee/img/g2.jpg')}}" class="img-pop-home">
								<img class="img-fluid" src="{{asset('assets/frontend/coffee/img/g2.jpg')}}" alt="">
							</a>
						</div>
						<div class="col-lg-8">
							<a href="{{asset('assets/frontend/coffee/img/g3.jpg')}}" class="img-pop-home">
								<img class="img-fluid" src="{{asset('assets/frontend/coffee/img/g3.jpg')}}" alt="">
							</a>
							<div class="row">
								<div class="col-lg-6">
									<a href="{{asset('assets/frontend/coffee/img/g4.jpg')}}" class="img-pop-home">
										<img class="img-fluid" src="{{asset('assets/frontend/coffee/img/g4.jpg')}}" alt="">
									</a>
								</div>
								<div class="col-lg-6">
									<a href="{{asset('assets/frontend/coffee/img/g5.jpg')}}" class="img-pop-home">
										<img class="img-fluid" src="{{asset('assets/frontend/coffee/img/g5.jpg')}}" alt="">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End gallery Area -->

			<!-- Start blog Area -->
			<section class="blog-area section-gap" id="shop">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">Buy The Best Of Indonesian Coffee</h1>
								<p>Konsep dan misi kami adalah memajukan kopi Indonesia
                                    baik di pasar nasional maupun internasional. <br>
                                    Mari coba dan nikmati kopi Indonesia.</p>
							</div>
						</div>
                    </div>

                    {{-- COFFEE --}}

					<div class="row">
                        @foreach ($coffee as $data)
						<div class="col-lg-3 col-md-3 single-blog">
							<img src="{{asset('assets/img/coffee/'.$data->gambar)}}" alt=""height="170px"width="230px">
                            <a href="#"><h4>{{ $data->nama_kopi }}</h4></a>
                            <p>{{ $data->manfaat }}</p>
                            <ul class="post-tags">
								<li><a href="{{url('frontransaksi/' .$data->id)}}">{{ $data->harga }}</a></li>
							</ul>
                        </div>
                        @endforeach
                    </div>


				</div>
			</section>
			<!-- End blog Area -->

			<!-- start footer Area -->
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Us</h6>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
								</p>
								<p class="footer-text">
									<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								</p>
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
										<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
			                            	<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
			                            	<div style="position: absolute; left: -5000px;">
			blog									<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>

										<div class="info pt-20"></div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
									<a href="#"><i class="fa fa-behance"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->

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



