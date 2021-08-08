	<!--================ Offcanvus Menu Area =================-->
	<div class="side_menu">
		<div class="logo">
			<a href="{{ url('/')}}">
				<img width="100px" height="100px" src="{{ asset('template1/img/logo.png')}}" alt="">
			</a>
		</div>
		<ul class="list menu-left">
			<li>
				<a href="{{ url('/')}}">Beranda</a>
			</li>
			<li>
				<div class="dropdown">
					<button type="button" class="dropdown-toggle" data-toggle="dropdown">
						Blog
					</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="{{ url('blog')}}">Blog</a>
						<a class="dropdown-item" href="{{ url('blog/detail_blog')}}">Detail Blog</a>
					</div>
				</div>
			</li>
			<li>
				<div class="dropdown">
					<button type="button" class="dropdown-toggle" data-toggle="dropdown">
						Pariwisata
					</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="{{ url('spot/wisata')}}">Spot Pariwisata</a>
						<a class="dropdown-item" href="{{ url('spot/kategori')}}">Kategori</a>
					</div>
				</div>
			</li>
			<li>
				<a href="{{ url('paket')}}">Paket</a>
			</li>
			<li>
				<a href="{{ url('tentang_desa')}}">Tentang Desa</a>
			</li>
			<li>
				<a href="{{ url('kontak')}}">Kontak</a>
			</li>
			<li>
				<button  class="btn btn-primary"><a style="font-size:12px;color: white" href="{{ url('admin/login')}}">Login Admin</a></button>
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
						Pesan via WA
						<img src="{{ asset('template1/img/next.png')}}" alt="">
					</a>
				</div>
			</div>
		</div>
	</section>