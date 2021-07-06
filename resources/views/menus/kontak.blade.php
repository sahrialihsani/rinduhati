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
						Kontak Desa Rindu Hati
					</h1>
					{{-- <p class="pt-20">
                        Kota Bengkulu terletak di kawasan pesisir yang berhadapan langsung dengan Samudra Hindia. Kota ini memiliki luas wilayah 144,52 km² dengan ketinggian rata-rata kurang dari 500 meter. Sebagai daerah yang berada di pesisiran, Kota Bengkulu tidak memiliki wilayah yang berjarak lebih dari 30 km dari pesisir pantai.
                        Kota ini dilayani oleh Pelabuhan Pulau Baai yang merupakan pelabuhan samudera satu-satunya di Provinsi Bengkulu.
					</p> --}}
					<div class="page-link-wrap">
						<div class="page_link">
							<a href="/">Beranda</a>
							<a style="font-weight:bold" href="kontak">Kontak</a>
						</div>
						<img src="{{ asset('template1/img/next.png') }}" alt="">
					</div>
				</div>

				<div class="col-lg-6 col-md-6 header-left">
					<div class="">
						<img class="img-fluid w-100" src="{{ asset('template1/img/banner/glamping.jpg') }}" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End banner section =================-->
 <!--================Contact Area =================-->
 <section style="margin-top: 200px" class="contact_area section_gap">
	<div class="container">
		<div class="col-lg-12">
			<iframe style="border:0; width: 100%; height: 270px;" src="https://maps.google.com/maps?q=UPT%20KSLI%20Universitas%20Bengkulu&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" allowfullscreen></iframe>
		  </div>
		<div class="row">
			<div class="col-lg-3">
				<div class="contact_info">
					<div class="info_item">
						<i class="lnr lnr-home"></i>
						<h6>California, United States</h6>
						<p>Santa monica bullevard</p>
					</div>
					<div class="info_item">
						<i class="lnr lnr-phone-handset"></i>
						<h6><a href="#">00 (440) 9865 562</a></h6>
						<p>Mon to Fri 9am to 6 pm</p>
					</div>
					<div class="info_item">
						<i class="lnr lnr-envelope"></i>
						<h6><a href="#">support@colorlib.com</a></h6>
						<p>Send us your query anytime!</p>
					</div>
				</div>
			</div>
			<div class="col-lg-9">
				<form class="row contact_form" action="contact_process.php" method="post" id="contactForm"
					novalidate="novalidate">
					<div class="col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
						</div>
					</div>
					<div class="col-md-12 text-right">
						<button type="submit" value="submit" class="main_btn">
							Send Message
							<img src="img/next.png" alt="">
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!--================Contact Area =================-->
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
    <!-- contact js -->
    <script src="{{ asset('template/js/jquery.form.js') }}"></script>
    <script src="{{ asset('template/js/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('template/js/contact.js')}}"></script>
</body>

</html>