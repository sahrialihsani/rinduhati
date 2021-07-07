<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="{{ asset('template1/img/favicon.png')}}" type="image/png">
        <title>Wisata Desa Rindu Hati</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('template1/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('template1/vendors/linericon/style.css') }}">
        <link rel="stylesheet" href="{{ asset('template1/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{ asset('template1/vendors/owl-carousel/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('template1/vendors/nice-select/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('template1/vendors/animate-css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('template1/vendors/jquery-ui/jquery-ui.css') }}">
        <link rel="stylesheet" href="{{ asset('template1/vendors/popup/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('template1/vendors/swiper/css/swiper.min.css') }}">
        <link rel="stylesheet" href="{{ asset('template1/vendors/scroll/jquery.mCustomScrollbar.css') }}">
        <!-- main css -->
        <link rel="stylesheet" href="{{ asset('template1/css/style.css') }}">
    </head>

<body>

	@include('layouts.header');
	<!--================ Start banner section =================-->
	<section style="margin-bottom: 100px" class="home-banner-area common-banner relative">
		<div class="container-fluid">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="header-right col-lg-6 col-md-6">
					<h1>
						Kategori Pariwisata
					</h1>
					<div class="page-link-wrap">
						<div class="page_link">
							<a href="/">Beranda</a>
							<a style="font-weight:bold" href="{{asset('spot/kategori')}}">Kategori</a>
						</div>
						<img src="{{ asset('template1/img/next.png') }}" alt="">
					</div>
				</div>

				<div class="col-lg-6 col-md-6 header-left">
					<div class="">
						<img class="img-fluid w-100" src="{{ asset('template1/img/paket/pantaipanjang.jpg') }}" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End banner section =================-->
	<section class="amenities-area section_gap">
		<div class="container">
			<div style="margin-left: 18px; margin-top:25px" class="single-gallery">
				<img style="width: 535px; height:550px" class="img-fluid" src="{{ asset('template1/img/paket/pantaipanjang.jpg')}}" alt="">
				<div class="gallery-content">
					<div class="title align-items-center justify-content-between d-flex">
						<p>Paket Wisata Kota Bengkulu</p>
						<h4>$56<span>/day</span></h4>
					</div>
					<h4>Kota Bengkulu</h4>
				</div>
				<div class="light-box">
					<a href="{{ asset('template1/img/paket/pantaipanjang.jpg')}}" class="img-popup">
						<span class="lnr lnr-magnifier"></span>
					</a>
				</div>
			</div>

			<div style="margin-left: 18px; margin-top:25px" class="single-gallery">
				<img style="width: 535px; height:550px" class="img-fluid" src="{{ asset('template1/img/paket/pantailinau.jpg')}}" alt="">
				<div class="gallery-content">
					<div class="title align-items-center justify-content-between d-flex">
						<p>Paket Wisata Kabupaten Kaur</p>
						<h4>$56<span>/day</span></h4>
					</div>
					<h4>Kabupaten Kaur</h4>
				</div>
				<div class="light-box">
					<a href="{{ asset('template1/img/paket/pantailinau.jpg')}}" class="img-popup">
						<span class="lnr lnr-magnifier"></span>
					</a>
				</div>
			</div>

			<div style="margin-left: 18px; margin-top:25px" class="single-gallery">
				<img style="width: 535px; height:550px" class="img-fluid" src="{{ asset('template1/img/paket/suban.jpg')}}" alt="">
				<div class="gallery-content">
					<div class="title align-items-center justify-content-between d-flex">
						<p>Paket Wisata Kabupaten Rejang Lebong</p>
						<h4>$56<span>/day</span></h4>
					</div>
					<h4>Kabupaten Rejang Lebong</h4>
				</div>
				<div class="light-box">
					<a href="{{ asset('template1/img/paket/suban.jpg')}}" class="img-popup">
						<span class="lnr lnr-magnifier"></span>
					</a>
				</div>
			</div>
			<div style="margin-left: 18px; margin-top:25px" class="single-gallery">
				<img style="width: 535px; height:550px" class="img-fluid" src="{{ asset('template1/img/paket/bendunganseluma.jpg')}}" alt="">
				<div class="gallery-content">
					<div class="title align-items-center justify-content-between d-flex">
						<p>Paket Wisata Kabupaten Seluma</p>
						<h4>$56<span>/day</span></h4>
					</div>
					<h4>Kabupaten Seluma</h4>
				</div>
				<div class="light-box">
					<a href="{{ asset('template1/img/paket/bendunganseluma.jpg')}}" class="img-popup">
						<span class="lnr lnr-magnifier"></span>
					</a>
				</div>
			</div>
		</div>
	</section>
    @include('layouts.footer');
	
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="{{ asset('template1/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{ asset('template1/js/popper.js')}}"></script>
	<script src="{{ asset('template1/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('template1/js/stellar.js')}}"></script>
	<script src="{{ asset('template1/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{ asset('template1/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
	<script src="{{ asset('template1/vendors/isotope/isotope-min.js')}}"></script>
	<script src="{{ asset('template1/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
	<script src="{{ asset('template1/vendors/jquery-ui/jquery-ui.js')}}"></script>
	<script src="{{ asset('template1/js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{ asset('template1/js/mail-script.js')}}"></script>
	<script src="{{ asset('template1/vendors/popup/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{ asset('template1/vendors/swiper/js/swiper.min.js')}}"></script>
	<script src="{{ asset('template1/vendors/scroll/jquery.mCustomScrollbar.js')}}"></script>
	<script src="{{ asset('template1/js/theme.js')}}"></script>
</body>

</html>