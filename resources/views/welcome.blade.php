<!DOCTYPE html>
<html lang="en">

<head>
	<title>Aethere Cosmetics</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="../assets/img/logo1.png">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700" rel="stylesheet">

	<link rel="stylesheet" href="../assets/landingpage/css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="../assets/landingpage/css/animate.css">

	<link rel="stylesheet" href="../assets/landingpage/css/owl.carousel.min.css">
	<link rel="stylesheet" href="../assets/landingpage/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="../assets/landingpage/css/magnific-popup.css">

	<link rel="stylesheet" href="../assets/landingpage/css/aos.css">

	<link rel="stylesheet" href="../assets/landingpage/css/ionicons.min.css">

	<link rel="stylesheet" href="../assets/landingpage/css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="../assets/landingpage/css/jquery.timepicker.css">


	<link rel="stylesheet" href="../assets/landingpage/css/flaticon.css">
	<link rel="stylesheet" href="../assets/landingpage/css/icomoon.css">
	<link rel="stylesheet" href="../assets/landingpage/css/style.css">
</head>

<body>
	<!-- banner -->
	<div class="hero-wrap js-fullheight" style="background-image: url('../assets/landingpage/images/bg_1.jpg');"
		data-stellar-background-ratio="0.5" id="banner">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
				data-scrollax-parent="true">
				<div class="col-md-8 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
					<div class="icon">
						<a href="index.html" class="logo">
							<img src="../assets/img/logo1.png" alt="aethere" width="200px">
						</a>
					</div>
					<h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Aetheré Cosmetics
					</h1>
					<p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Elevate your beauty,
						embrace your uniqueness, and shine bright with Aethere Cosmetics.</p>
					<p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="#services"
							class="btn btn-white btn-outline-white px-4 py-3">Pelayanan Kami</a></p>
				</div>
			</div>
		</div>
	</div>

	<!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="/">Aetheré</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
				aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
                {{-- @if (Route::has('login')) --}}
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="#banner" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="#about" class="nav-link">About</a></li>
					<li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
					<li class="nav-item"><a href="#products" class="nav-link">Product</a></li>
					<li class="nav-item"><a href="#blog" class="nav-link">Blog</a></li>
					<li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
                    {{-- @auth
                    <li class="nav-item"><a href="{{ url('/home') }}" class="nav-link">Home</a></li>
                    @else
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Sign In</a></li>
                    @if (Route::has('register'))
                    <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Sign Up</a></li>
                    @endif
                    @endauth  --}}
				</ul>
			</div>
		</div>
	</nav>

	<!-- about -->
	<section class="ftco-section" id="about">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-6 d-flex ftco-animate">
					<div class="img img-about align-self-stretch"
						style="background-image: url(../assets/landingpage/images/bg_3.jpg); width: 100%;"></div>
				</div>
				<div class="col-md-6 pl-md-5 ftco-animate">
					<h2 class="mb-4">Hello Ae(theré)!</h2>
					<p>Aethere Cosmetics adalah pionir dalam industri kecantikan yang menyatukan keanggunan, inovasi,
						dan keindahan alami. Sebagai sebuah merek yang diilhami oleh keanggunan langit-langit dan sinar
						matahari
						yang mencerahkan, Aethere Cosmetics berkomitmen untuk membawa pengalaman kecantikan yang
						istimewa kepada
						pelanggan di seluruh dunia.</p>
					<p>Di balik setiap produk kami terdapat dedikasi yang mendalam untuk kualitas, keamanan, dan
						keindahan alami.
						Kami menggabungkan bahan-bahan berkualitas tinggi dengan teknologi terkini untuk menciptakan
						formula yang tidak
						hanya efektif, tetapi juga merawat kulit Anda.</p>
					<p>Kami bangga menjadi bagian dari komunitas yang peduli dengan lingkungan dan keberlanjutan. Dengan
						menggunakan
						bahan-bahan ramah lingkungan dan praktik produksi yang bertanggung jawab, kami berupaya untuk
						menjaga keindahan
						alam sembari membantu Anda meraih kecantikan yang Anda impikan.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section ftco-animate text-center">
					<h2 class="mb-4">Our Beauty Experts</h2>
					<p>Tetap inovatif dan kreatif, para ahli kecantikan kami di Aethere Cosmetics membawa keindahan Anda
						ke level yang baru.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
					<div class="staff">
						<div class="img mb-4" style="background-image: url(../assets/landingpage/images/person_1.jpg);"></div>
						<div class="info text-center">
							<h3><a href="teacher-single.html">Dian Fitriani</a></h3>
							<span class="position">Makeup Artist</span>
							<div class="text">
								<p>Sebagai makeup artist, saya mengandalkan Aethere Cosmetics karena produknya
									memberikan hasil yang luar biasa dan tahan lama di setiap kesempatan. Formula yang
									ringan membuatnya sangat mudah diaplikasikan dan cocok untuk segala jenis kulit.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
					<div class="staff">
						<div class="img mb-4" style="background-image: url(../assets/landingpage/images/person_2.jpg);"></div>
						<div class="info text-center">
							<h3><a href="teacher-single.html">Rina Marwati</a></h3>
							<span class="position">Skincare Enthusiast</span>
							<div class="text">
								<p>Saya telah menggunakan produk Aethere Cosmetics selama bertahun-tahun dan hasilnya
									selalu memuaskan. Produk skincare mereka tidak hanya efektif dalam menangani masalah
									kulit saya, tetapi juga memberikan perawatan yang lembut dan menyegarkan setiap kali
									saya menggunakannya.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
					<div class="staff">
						<div class="img mb-4" style="background-image: url(../assets/landingpage/images/person_3.jpg);"></div>
						<div class="info text-center">
							<h3><a href="teacher-single.html">Nadia Suryana</a></h3>
							<span class="position">Beauty Blogger</span>
							<div class="text">
								<p>Aethere Cosmetics adalah pilihan saya karena kualitas produknya yang luar biasa dan
									formula yang ramah kulit. Saya selalu merasa percaya diri dengan tampilan makeup
									saya setiap kali menggunakan produk dari Aethere.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
					<div class="staff">
						<div class="img mb-4" style="background-image: url(../assets/landingpage/images/person_4.jpg);"></div>
						<div class="info text-center">
							<h3><a href="teacher-single.html">Dewi Rahayu </a></h3>
							<span class="position">Fashion Influencer</span>
							<div class="text">
								<p>Aethere Cosmetics adalah pilihan saya karena tidak hanya memberikan hasil makeup yang
									indah, tetapi juga karena nilai-nilai merek yang saya sukai. Mereka mendukung
									keberagaman dan mempromosikan kepercayaan diri melalui kecantikan yang alami dan
									mendalam.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- services -->
    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(../assets/landingpage/images/bg_4.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10">
					<div class="row">
						<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18 text-center">
								<div class="text">
									<div class="icon"><span class="flaticon-flower"></span></div>
									<span>Makeup Over Done</span>
									<strong class="number" data-number="1000">0</strong>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18 text-center">
								<div class="text">
									<div class="icon"><span class="flaticon-flower"></span></div>
									<span>Procedure</span>
									<strong class="number" data-number="500">0</strong>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18 text-center">
								<div class="text">
									<div class="icon"><span class="flaticon-flower"></span></div>
									<span>Happy Client</span>
									<strong class="number" data-number="1000">0</strong>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18 text-center">
								<div class="text">
									<div class="icon"><span class="flaticon-flower"></span></div>
									<span>Skin Treatment</span>
									<strong class="number" data-number="500">0</strong>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section" id="services">
		<div class="container">
			<div class="row">
				<div class="col-md-4 ftco-animate">
					<div class="media d-block text-center block-6 services">
						<div class="icon d-flex mb-3"><span class="flaticon-facial-treatment"></span></div>
						<div class="media-body">
							<h3 class="heading">Beauty Consultation</h3>
							<p>Menyediakan konsultasi langsung atau online kepada pelanggan untuk membantu mereka
								memilih produk yang sesuai dengan jenis kulit dan preferensi mereka.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="media d-block text-center block-6 services">
						<div class="icon d-flex mb-3"><span class="flaticon-cosmetics"></span></div>
						<div class="media-body">
							<h3 class="heading">Cosmetic Product Sales</h3>
							<p>Menyediakan berbagai produk kosmetik, mulai dari foundation, lipstik, eyeshadow, hingga
								produk perawatan kulit, baik secara online maupun melalui toko fisik.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="media d-block text-center block-6 services">
						<div class="icon d-flex mb-3"><span class="flaticon-curl"></span></div>
						<div class="media-body">
							<h3 class="heading">Customization Collaboration</h3>
							<p>Menyediakan layanan kustomisasi produk, seperti pembuatan lipstik atau palet eyeshadow
								dengan warna-warna khusus sesuai permintaan pelanggan.vices for customers who want to
								create
								products with specific formulas or colors.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-discount img" style="background-image: url(../assets/landingpage/images/bg_2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-end">
				<div class="col-md-5 discount ftco-animate">
					<h3>Rayakan Kecantikan Anda:</h3>
					<h2 class="mb-4">Diskon Eksklusif Menanti!</h2>
					<p class="mb-4">Bergabunglah dengan revolusi kecantikan bersama Aethere Cosmetics. Jangan lewatkan
						acara diskon kami – belanja sekarang dan biarkan kecantikan Anda bersinar!</p>
					<p><a href="#products" class="btn btn-white btn-outline-white px-4 py-3">Belanja sekarang!</a></p>
				</div>
			</div>
		</div>
	</section>

	<!-- products -->
	<section class="ftco-section" id="products">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<h2 class="mb-4">Our Products</h2>
					<p>Pilihan produk kami</p>
				</div>
			</div>
			<div class="row">
				@foreach($product as $data)
				<div class="col-md-4 ftco-animate">
					<a href="{{ route('product.show', $data->id) }}" class="work-entry">
						<img src="../assets/fotoproduct/{{ $data->product_foto }}" class="img-fluid" alt="Colorlib Template">
						<div class="info d-flex align-items-center">
							<div>
								<div class="icon mb-4 d-flex align-items-center justify-content-center">
									<span class="icon-search"></span>
								</div>
								<h3>{{ $data->product_name }}</h3>
							</div>
						</div>
					</a>
				</div>
				@endforeach
			</div>
		</div>
	</section>

	<!-- blog -->
	<section class="ftco-section" id="blog">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section ftco-animate text-center">
					<h2 class="mb-4">Recent from blog</h2>
					<p>Di sini, kami berbagi tips, trik, dan tren terbaru dalam dunia kecantikan.</p>
				</div>
			</div>
			<div class="row d-flex">
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry align-self-stretch">
						<a href="#" class="block-20"
							style="background-image: url('../assets/landingpage/images/image_6.jpg');">
						</a>
						<div class="text py-4 d-block">
							<div class="meta">
								<div><a href="#">1 Mei 2024</a></div>
								<div><a href="#">Admin</a></div>
							</div>
							<h3 class="heading mt-2"><a href="#">Rahasia Kulit Sehat: Panduan Perawatan Kulit ala Aethere Cosmetics</a></h3>
							<p>Tips bagaimana merawat kulit dengan berbagai macam jenisnya agar tetap sehat seperti Visi Misi Aethere Cosmetics</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry align-self-stretch">
						<a href="#" class="block-20"
							style="background-image: url('../assets/landingpage/images/image_1.jpg');">
						</a>
						<div class="text py-4 d-block">
							<div class="meta">
								<div><a href="#">3 Mei 2024</a></div>
								<div><a href="#">Admin</a></div>
							</div>
							<h3 class="heading mt-2"><a href="#">Must-Have Favorites: 5 Produk Wajib dari Aethere Cosmetics yang Harus Ada di Lemari Makeup Anda</a></h3>
							<p>Rekomendasikan lima produk favorit dari Aethere Cosmetics yang menurut Anda tidak boleh terlewatkan.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry align-self-stretch">
						<a href="#" class="block-20"
							style="background-image: url('../assets/landingpage/images/image_2.jpg');">
						</a>
						<div class="text py-4 d-block">
							<div class="meta">
								<div><a href="#"6 Mei 2024</a></div>
								<div><a href="#">Admin</a></div>
							</div>
							<h3 class="heading mt-2"><a href="#">Everyday Glow: Membangun Tampilan Kilau Sehari-hari dengan Aethere Cosmetics</a></h3>
							<p>Langkah demi langkah untuk menciptakan tampilan makeup yang segar dan bercahaya untuk sehari-hari menggunakan produk Aethere Cosmetics.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- contact -->
	<section class="ftco-section ftco-appointment" id="contact">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section ftco-animate text-center">
					<h2 class="mb-4" style="color: #fff;">Contact</h2>
					<p style="color: #fff;">Lebih dekat dengan kami.</p>
				</div>
			</div>
			<div class="row d-md-flex align-items-center">
				<div class="col-md-6 d-flex align-self-stretch ftco-animate">
					<div class="appointment-info text-center p-5">
						<div class="mb-4">
							<h3 class="mb-3">Alamat</h3>
							<p> Jl. Matahari Tersenyum Rekah No. 30 Indah Kode Pos 09720</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 appointment pl-md-5 ftco-animate">
					<div class="appointment-info text-center p-5">
						<div class="mb-4">
							<h3 class="mb-3">Telepon</h3>
							<p class="day"><strong>022 123 456</strong> or <strong>089 322 3434</strong></p>
						</div>
					</div>
				</div>
			</div>
		</div><br><br>
		<div class="container">
			<div class="row d-md-flex align-items-center">
				<div class="col-md-3"></div>
				<div class="col-md-6 d-flex align-self-stretch ftco-animate">
					<div class="appointment-info text-center p-5">
						<div>
							<h3 class="mb-3">Jam Buka</h3>
							<p class="day"><strong>Senin - Sabtu</strong></p>
							<span>08:00 - 09:00 WIB</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer class="ftco-footer ftco-section img">
		<div class="overlay"></div>
		<div class="container">
			<div class="row mb-5">
				<div class="col-md-2"></div>
				<div class="col-md-3">
					<div class="ftco-footer-widget mb-4">
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
							<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-6">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Punya Pertanyaan?</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><span class="icon icon-map-marker"></span><span class="text">Jl. Matahari Tersenyum
										Rekah No. 30 Indah Kode Pos 09720</span></li>
								<li><a href="#"><span class="icon icon-phone"></span><span class="text">022 123
											456</span></a></li>
								<li><a href="#"><span class="icon icon-envelope"></span><span
											class="text">info@aethere.com</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<p>Copyright &copy;
						<script>document.write(new Date().getFullYear());</script>| by <a href="/"
							target="_blank">Aetheré</a>
					</p>
				</div>
			</div>
		</div>
	</footer>

	<div id="ftco-loader" class="show fullscreen">
		<svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
		</svg>
	</div>
		

	<script src="../assets/landingpage/js/jquery.min.js"></script>
	<script src="../assets/landingpage/js/jquery-migrate-3.0.1.min.js"></script>
	<script src="../assets/landingpage/js/popper.min.js"></script>
	<script src="../assets/landingpage/js/bootstrap.min.js"></script>
	<script src="../assets/landingpage/js/jquery.easing.1.3.js"></script>
	<script src="../assets/landingpage/js/jquery.waypoints.min.js"></script>
	<script src="../assets/landingpage/js/jquery.stellar.min.js"></script>
	<script src="../assets/landingpage/js/owl.carousel.min.js"></script>
	<script src="../assets/landingpage/js/jquery.magnific-popup.min.js"></script>
	<script src="../assets/landingpage/js/aos.js"></script>
	<script src="../assets/landingpage/js/jquery.animateNumber.min.js"></script>
	<script src="../assets/landingpage/js/bootstrap-datepicker.js"></script>
	<script src="../assets/landingpage/js/jquery.timepicker.min.js"></script>
	<script src="../assets/landingpage/js/scrollax.min.js"></script>
	<script src="../assets/landingpage/js/main.js"></script>
</body>

</html>