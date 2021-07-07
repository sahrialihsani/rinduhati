	<!--================ Offcanvus Menu Area =================-->
	<div class="side_menu">
		<div class="logo">
			<a href="{{ asset('/')}}">
				<img src="{{ asset('template1/img/logo.png')}}" alt="">
			</a>
		</div>
		<ul class="list menu-left">
			<li>
				<a href="{{ asset('/')}}">Beranda</a>
			</li>
			<li>
				<div class="dropdown">
					<button type="button" class="dropdown-toggle" data-toggle="dropdown">
						Pariwisata
					</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="{{ asset('spot/wisata')}}">Spot Pariwisata</a>
						<a class="dropdown-item" href="{{ asset('spot/kategori')}}">Kategori</a>
					</div>
				</div>
			</li>
			<li>
				<a href="{{ asset('paket')}}">Paket</a>
			</li>
			{{-- <li>
				<div class="dropdown">
					<button type="button" class="dropdown-toggle" data-toggle="dropdown">Tentang Desa</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="{{ asset('tentang_desa')}}">Desa Rindu Hati</a>
						<a class="dropdown-item" href="{{ asset('tentang_desa/lokasi')}}">Lokasi Desa Rindu Hati</a>
						<a class="dropdown-item" href="{{ asset('tentang_desa')}}">Akses ke Desa Rindu Hati</a>
					</div>
				</div>
				
			</li> --}}
			<li>
				<a href="{{ asset('tentang_desa')}}">Tentang Desa</a>
			</li>
			<li>
				<div class="dropdown">
					<button type="button" class="dropdown-toggle" data-toggle="dropdown">
						Blog
					</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="{{ asset('blog')}}">Blog</a>
						<a class="dropdown-item" href="{{ asset('blog/detail_blog')}}">Detail Blog</a>
					</div>
				</div>
			</li>
			<li>
				<a href="{{ asset('kontak')}}">Kontak</a>
			</li>
		</ul>
	</div>
	<!--================ End Offcanvus Menu Area =================-->

	<!--================ Canvus Menu Area =================-->
	<div class="canvus_menu">
		<div class="container">
			<div class="toggle_icon" title="Menu Bar">
				<span></span>
			</div>
		</div>
	</div>
	<!--================ End Canvus Menu Area =================-->

	<section class="top-btn-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<a href="#" class="main_btn">
						Pesan Tempat
						<img src="{{ asset('template1/img/next.png')}}" alt="">
					</a>
				</div>
			</div>
		</div>
	</section>