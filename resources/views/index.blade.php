<!DOCTYPE html>
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

	@include('layouts.banner');

	<!--================ Start Amenities Area =================-->
	<section class="amenities-area section_gap">
		<div class="container">
			<div class="row align-items-end justify-content-left">
				<div class="col-lg-6">
					<div class="main_title">
						<h1>Spot Pariwisata Populer <br> Desa Rindu Hati</h1>
						<p>Rindu hati merupakan desa wisata yang terletak di kabupaten Bengkulu Tengah</p>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<!-- single-blog -->
				<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="single-amenities">
						<div class="amenities-thumb">
							<img class="img-fluid" src="{{ asset('template1/img/glamping.jpg')}}" alt="">
						</div>
						<div class="amenities-details">
							<div class="amenities-meta">
								<a style="background-color: #398EA8; color:white;" href=""><span>Family</span></a>
							</div>
							<h5><a href="{{asset('spot/wisata/detailwisata')}}">Glamping Rindu Hati</a></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
								dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
						</div>
					</div>
				</div>
				<!-- single-blog -->
				<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="single-amenities">
						<div class="amenities-thumb">
							<img class="img-fluid" src="{{ asset('template1/img/tubing.jpg')}}" alt="">
						</div>
						<div class="amenities-details">
							<div class="amenities-meta">
                                <a style="background-color: #398EA8; color:white;" href=""><span>Solo Travelling</span></a>
							</div>
							<h5><a href="{{asset('spot/wisata/detailwisata')}}">Tubing Rindu Hati</a></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
								dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
						</div>
					</div>
				</div>
				<!-- single-blog -->
				<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="single-amenities">
						<div class="amenities-thumb">
							<img class="img-fluid" src="{{ asset('template1/img/cuupjen.jpg')}}" alt="">
						</div>
						<div class="amenities-details">
							<div class="amenities-meta">
                                <a style="background-color: #398EA8; color:white;" href=""><span>Friends</span></a>
							</div>
							<h5><a href="{{asset('spot/wisata/detailwisata')}}">Air Terjun Cuup Jen</a></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
								dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Amenities Area =================-->
    <!--================ Start Packages Service Area =================-->
	<section class="package-area">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-5 col-md-12">
					<div class="main_title">
						<h1>Paket <br>Destinasi Wisata <br> Bengkulu</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
							magna aliqua. Ut enim ad minim veniam quis nostrud exercitation.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
							magna aliqua. Ut enim ad minim veniam quis nostrud exercitation.</p>
						<a href="#paket" class="main_btn">
							Lihat semua paket
							<img src="{{ asset('template1/img/next.png')}}" alt="">
						</a>
					</div>
				</div>
				<div class="col-lg-6 offset-lg-1 col-md-12">
					<div class="owl-carousel active-gallery-carousel">
						<!-- single gallery -->
						<div class="single-gallery">
							<img class="img-fluid" src="{{ asset('template1/img/pantaipanjang.jpg')}}" alt="">
							<div class="gallery-content">
								<div class="title align-items-center justify-content-between d-flex">
									<p>Paket Wisata Kota Bengkulu</p>
									<h4>$56<span>/day</span></h4>
								</div>
								<h4>Kota Bengkulu</h4>
							</div>
							<div class="light-box">
								<a href="{{ asset('template1/img/pantaipanjang.jpg')}}" class="img-popup">
									<span class="lnr lnr-magnifier"></span>
								</a>
							</div>
						</div>
						<!-- single gallery -->
						<div class="single-gallery">
							<img class="img-fluid" src="{{ asset('template1/img/pantailinau.png')}}" alt="">
							<div class="gallery-content">
								<div class="title align-items-center justify-content-between d-flex">
									<p>Paket Wisata Kabupaten Kaur</p>
									<h4>$56<span>/day</span></h4>
								</div>
								<h4>Kabupaten Kaur</h4>
							</div>
							<div class="light-box">
								<a href="{{ asset('template1/img/pantailinau.png')}}" class="img-popup">
									<span class="lnr lnr-magnifier"></span>
								</a>
							</div>
						</div>
						<!-- single gallery -->
						<div class="single-gallery">
							<img class="img-fluid" src="{{ asset('template1/img/suban.jpg')}}" alt="">
							<div class="gallery-content">
								<div class="title align-items-center justify-content-between d-flex">
									<p>Paket Wisata Kabupaten Rejang Lebong</p>
									<h4>$56<span>/day</span></h4>
								</div>
								<h4>Kabupaten Rejang Lebong</h4>
							</div>
							<div class="light-box">
								<a href="{{ asset('template1/img/suban.jpg')}}" class="img-popup">
									<span class="lnr lnr-magnifier"></span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Portfolio Service Area =================-->
<!--================ Start Blog Area =================-->
<section class="blog-area section_gap">
    <div class="container">
        <div class="row align-items-end justify-content-left">
            <div class="col-lg-5">
                <div class="main_title">
                    <h1>Informasi Terkini</h1>
                    <p>Kami akan selalu mengupdate berita terbaru mengenai Desa Rindu Hati.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <!-- single-blog -->
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="single-blog">
                    <div class="blog-thumb">
                        <img class="img-fluid" src="{{ asset('template1/img/blog/h-blog1.jpg')}}" alt="">
                    </div>
                    <div class="blog-details">
                        <div class="blog-meta">
                            <a href="#" class="m-gap"><span class="lnr lnr-calendar-full"></span>13th Dec</a>
                            <a href="#" class="m-gap"><span class="lnr lnr-heart"></span>15</a>
                            <a href="#" class="m-gap"><span class="lnr lnr-bubble"></span>04</span></a>
                        </div>
                        <h5><a href="{{ asset('blog/detail_blog')}}">Luxerious Car
                                Rental Service Available</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                    </div>
                </div>
            </div>
            <!-- single-blog -->
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="single-blog">
                    <div class="blog-thumb">
                        <img class="img-fluid" src="{{ asset('template1/img/blog/h-blog2.jpg')}}" alt="">
                    </div>
                    <div class="blog-details">
                        <div class="blog-meta">
                            <a href="#" class="m-gap"><span class="lnr lnr-calendar-full"></span>13th Dec</a>
                            <a href="#" class="m-gap"><span class="lnr lnr-heart"></span>15</a>
                            <a href="#" class="m-gap"><span class="lnr lnr-bubble"></span>04</span></a>
                        </div>
                        <h5><a href="{{ asset('blog/detail_blog')}}">Cruise Private Party
                                Booking Available</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                    </div>
                </div>
            </div>
            <!-- single-blog -->
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="single-blog">
                    <div class="blog-thumb">
                        <img class="img-fluid" src="{{ asset('template1/img/blog/h-blog3.jpg')}}" alt="">
                    </div>
                    <div class="blog-details">
                        <div class="blog-meta">
                            <a href="#" class="m-gap"><span class="lnr lnr-calendar-full"></span>13th Dec</a>
                            <a href="#" class="m-gap"><span class="lnr lnr-heart"></span>15</a>
                            <a href="#" class="m-gap"><span class="lnr lnr-bubble"></span>04</span></a>
                        </div>
                        <h5><a href="{{ asset('blog/detail_blog')}}">Tremendous Options
                                for Food Lovers</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Blog Area =================-->
	<!--================ Start Testimonial Area =================-->
	<section style="margin-top:100px" class="testimonial_area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="testi_img">
						<img class="img-fluid" src="{{ asset('template1/img/testi-img.jpg')}}" alt="">
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="owl-carousel active_testimonial">
						<!-- single testi -->
						<div class="single_testi">
							<div class="testi_content">
								<p>Wisata itu penting. Dengan berwisata dapat menghilangkan stress pada diri anda. Desa Rindu Hati salah satu tempat yang saya pilih untuk berwisata</p>
							</div>
							<div class="testi_author">
								<div class="a-desc">
									<h4>Sahrial Ihsani</h4>
									<p>IT Enthusiast</p>
								</div>
							</div>
						</div>
                        <!-- single testi -->
						<div class="single_testi">
							<div class="testi_content">
								<p>Wisata itu penting. Dengan berwisata dapat menghilangkan stress pada diri anda. Desa Rindu Hati salah satu tempat yang saya pilih untuk berwisata</p>
							</div>
							<div class="testi_author">
								<div class="a-desc">
									<h4>Martin Mulyo</h4>
									<p>IT Enthusiast</p>
								</div>
							</div>
						</div>
                        <!-- single testi -->
						<div class="single_testi">
							<div class="testi_content">
								<p>Wisata itu penting. Dengan berwisata dapat menghilangkan stress pada diri anda. Desa Rindu Hati salah satu tempat yang saya pilih untuk berwisata</p>
							</div>
							<div class="testi_author">
								<div class="a-desc">
									<h4>Ajie Nofrizan</h4>
									<p>IT Enthusiast</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Testimonial Area =================-->

	<!--================ Start Newsletter Area =================-->
	<section class="newsletter-area section_gap">
		<div class="container-fluid">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-5">
					<div class="main_title">
						<h1>Berlangganan Sekarang</h1>
						<p>Kami akan mengirimkan pembaruan kepada anda melalui email.</p>
						<div id="mc_embed_signup">
							<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="subscribe_form relative">
								<div class="input-group d-flex flex-row">
									<input name="EMAIL" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '"
									 required="" type="email">
									<button class="main_btn">
										Subscribe
										<img src="{{ asset('template1/img/next.png')}}" alt="">
									</button>
								</div>
								<div class="mt-10 info"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-6 offset-lg-1">
					<img class="img-fluid nw-img" src="{{ asset('template1/img/nwl-img.png')}}" alt="">
				</div>
			</div>
	</section>
	<!--================ End Newsletter Area =================-->
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