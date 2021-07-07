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

	@include('layouts.header');
	<!--================ Start banner section =================-->
	<section style="margin-bottom: 100px" class="home-banner-area common-banner relative">
		<div class="container-fluid">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="header-right col-lg-6 col-md-6">
					<h1>
						Tentang Desa Rindu Hati
					</h1>
					{{-- <p class="pt-20">
                        Kota Bengkulu terletak di kawasan pesisir yang berhadapan langsung dengan Samudra Hindia. Kota ini memiliki luas wilayah 144,52 km² dengan ketinggian rata-rata kurang dari 500 meter. Sebagai daerah yang berada di pesisiran, Kota Bengkulu tidak memiliki wilayah yang berjarak lebih dari 30 km dari pesisir pantai.
                        Kota ini dilayani oleh Pelabuhan Pulau Baai yang merupakan pelabuhan samudera satu-satunya di Provinsi Bengkulu.
					</p> --}}
					<div class="page-link-wrap">
						<div class="page_link">
							<a href="{{ asset('/')}}">Beranda</a>
							<a style="font-weight:bold" href="{{asset('tentang_desa')}}">Tentang Desa</a>
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
	<section style="margin-top:200px" class="blog_area single-post-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12">
                        </div>
                        <div class="col-lg-12 col-md-12 blog_details">
                            <h2>Pengenalan Desa Rindu Hati</h2>
                            <p class="excert">
                                MCSE boot camps have its supporters and its detractors. Some people do not understand
                                why you should have to spend money
                                on boot camp when you can get the MCSE study materials yourself at a fraction.
                            </p>
                            <p>
                                Boot camps have its supporters and its detractors. Some people do not understand why
                                you should have to spend money on boot
                                camp when you can get the MCSE study materials yourself at a fraction of the camp
                                price.
                                However, who has the willpower to actually sit through a self-imposed MCSE training.
                                who
                                has the willpower to actually sit through a self-imposed
                            </p>
                            <p>
                                Boot camps have its supporters and its detractors. Some people do not understand why
                                you should have to spend money on boot
                                camp when you can get the MCSE study materials yourself at a fraction of the camp
                                price.
                                However, who has the willpower to actually sit through a self-imposed MCSE training.
                                who
                                has the willpower to actually sit through a self-imposed
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <div class="quotes">
                                MCSE boot camps have its supporters and its detractors. Some people do not understand
                                why you should have to spend money
                                on boot camp when you can get the MCSE study materials yourself at a fraction of the
                                camp
                                price. However, who has the willpower to actually sit through a self-imposed MCSE
                                training.
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <img class="img-fluid" src="{{ asset('template1/img/blog/post-img1.jpg')}}" alt="">
                                </div>
                                <div class="col-6">
                                    <img class="img-fluid" src="{{ asset('template1/img/blog/post-img2.jpg')}}" alt="">
                                </div>
                                <div class="col-lg-12 mt-25">
                                    <p>
                                        MCSE boot camps have its supporters and its detractors. Some people do not
                                        understand why you should have to spend money
                                        on boot camp when you can get the MCSE study materials yourself at a fraction
                                        of
                                        the camp price. However, who has the willpower.
                                    </p>
                                    <p>
                                        MCSE boot camps have its supporters and its detractors. Some people do not
                                        understand why you should have to spend money
                                        on boot camp when you can get the MCSE study materials yourself at a fraction
                                        of
                                        the camp price. However, who has the willpower.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>

                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        {{-- <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title"><a style="color: white" href="">Lokasi</a></h3>
                            <h3 class="widget_title"><a style="color: white" href="">Restoran Terdekat</a></h3>
                            <h3 class="widget_title"><a style="color: white" href="">Oleh-Oleh</a></h3>
                        </aside> --}}
						<aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Lainnya</h3>
                            <div class="media post_item">
                                <img style="object-fit: contain; width:110px; height:80px" src="{{ asset('template1/img/map.png')}}" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html">
                                        <h3>Akses Lokasi (GMaps)</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img style="object-fit: contain; width:110px; height:80px" src="{{ asset('template1/img/food-store.png')}}" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html">
                                        <h3>Restoran Terdekat</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img style="object-fit: contain; width:110px; height:80px" src="{{ asset('template1/img/shopping-bag.png')}}" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html">
                                        <h3>Oleh-Oleh Khas</h3>
                                    </a>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
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