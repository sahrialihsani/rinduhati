<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="{{ asset('template1/img/logo.png')}}" type="image/png">
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

	@include('layouts.header')
	<!--================ Start banner section =================-->
	<section  class="home-banner-area common-banner relative">
		<div class="container-fluid">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="header-right col-lg-6 col-md-6">
					<h1>
						Detail Wisata
					</h1>
					{{-- <p class="pt-20">
                        Kota Bengkulu terletak di kawasan pesisir yang berhadapan langsung dengan Samudra Hindia. Kota ini memiliki luas wilayah 144,52 km² dengan ketinggian rata-rata kurang dari 500 meter. Sebagai daerah yang berada di pesisiran, Kota Bengkulu tidak memiliki wilayah yang berjarak lebih dari 30 km dari pesisir pantai.
                        Kota ini dilayani oleh Pelabuhan Pulau Baai yang merupakan pelabuhan samudera satu-satunya di Provinsi Bengkulu.
					</p> --}}
					<div class="page-link-wrap">
						<div class="page_link">
							<a href="{{ asset('spot/wisata')}}">Spot Wisata</a>
							<a style="font-weight:bold" href="{{asset('spot/wisata/detailwisata')}}">Detail Wisata</a>
						</div>
						<img src="{{ asset('template1/img/next.png') }}" alt="">
					</div>
                    <div>
                </div>
				</div>
				<div class="col-lg-6 col-md-6 header-left">
					<div class="">
						<img style="width: 500px;height:520px" class="img-fluid w-100" src="{{ asset('template1/img/banner/glamping.jpg') }}" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End banner section =================-->
    {{-- style="margin-top:100px" --}}
	<section class="amenities-area section_gap">
		<div class="container">
			<div class="row justify-content-center">
				<!-- single-blog -->
				<div class="col-lg-3 col-md-3 col-sm-4">
					<div class="single-amenities">
						<div class="amenities-thumb">
							<img style="object-fit:contain;margin-top:5px;width:100%; height:120px" class="img-fluid" src="{{ asset('template1/img/price-tag.png')}}" alt="">
						</div>
						<div class="amenities-details">
							<h5><a href="{{asset('spot/wisata/detailwisata')}}">Biaya</a></h5>
                            <div style="width:200px;" class="container">
                                <div class="row justify-content-center">
                                   <div style="width: 100px">
							        Biaya Masuk
                                    <div style="height:30px;background-color:#08ac4b; border-radius: 8px">
                                    <p style="color:white;text-align:center">Rp.5000 </strong></p>
                                    </div>
                                   </div>
                                   <div style="width:100px;padding-left:5px">
                                    Sewa Tempat
                                    <div style="height:30px;background-color:#08ac4b; border-radius: 8px">
                                    <p style="color:white;text-align:center">Rp.50000 </strong></p>
                                    </div>
                                   </div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
                <div class="col-lg-3 col-md-3 col-sm-4">
					<div class="single-amenities">
						<div class="amenities-thumb">
							<img style="object-fit:contain;margin-top:5px;width:100%; height:120px" class="img-fluid" src="{{ asset('template1/img/distance.png')}}" alt="">
						</div>
						<div class="amenities-details">
							<h5><a href="#">Jarak dari Pusat <br> Kota Bengkulu </a></h5>
                            <div style="width:55px;background-color:#d82800; border-radius: 8px;padding-left:7px">

							<strong style="font-size: 14px;color:white">20 Km</strong>

                            </div>
						</div>
					</div>
				</div>
                
                <div class="col-lg-3 col-md-3 col-sm-4">
					<div class="single-amenities">
						<div class="amenities-thumb">
							<img style="object-fit:contain;margin-top:5px;width:100%; height:120px" class="img-fluid" src="{{ asset('template1/img/hiking.png')}}" alt="">
						</div>
						<div class="amenities-details">
							<h5><a href="{{asset('spot/wisata/detailwisata')}}">Fasilitas</a></h5>
                            <div style="width:200px;" class="container">
                                <div class="row justify-content-center">
                                   <div style="width: 100px">
							        {{--Pemandu --}}
                                    <div style="height:30px;background-color:#188497; border-radius: 8px;margin-right:2px">
                                    <p style="color:white;text-align:center">Pemandu</strong></p>
                                    </div>
                                   </div>
                                   <div style="width:100px">
                                    {{-- Peralatan --}}
                                    <div style="height:30px;background-color:#188497; border-radius: 8px;margin-right:2px">
                                    <p style="color:white;text-align:center">Peralatan</strong></p>
                                    </div>
                                   </div>
                                   <div style="width: 100px;margin-top:5px">
							        {{--Pemandu --}}
                                    <div style="height:30px;background-color:#188497; border-radius: 8px;margin-right:2px">
                                    <p style="color:white;text-align:center">Jemputan</strong></p>
                                    </div>
                                   </div>
                                   <div style="width: 100px;margin-top:5px">
							        {{--Pemandu --}}
                                    <div style="height:30px;background-color:#188497; border-radius: 8px;margin-right:2px">
                                    <p style="color:white;text-align:center">Air Mineral</strong></p>
                                    </div>
                                   </div>
                                   <div style="width: 100px;margin-top:5px">
							        {{--Pemandu --}}
                                    <div style="height:30px;background-color:#188497; border-radius: 8px;margin-right:2px">
                                    <p style="color:white;text-align:center">Kamar Ganti</strong></p>
                                    </div>
                                   </div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
		</div>
	</section>
    <!--================Blog Area =================-->
    @include('layouts.footer')
	
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