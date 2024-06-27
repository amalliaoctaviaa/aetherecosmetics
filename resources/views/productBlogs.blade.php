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
                    @endauth --}}
                </ul>
            </div>
        </div>
    </nav>

    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ftco-animate">
                    <h2 class="mb-3">{{ $product->product_name }}</h2>
                    <p>{{ $product->product_varian }}</p>
                    <p>{{ $product->product_price }}</p>
                    <p>
                        <img src="../assets/fotoproduct/{{ $product->product_foto }}" alt="" class="img-fluid">
                    </p>
                    <p>
                    <p>{{ $product->product_desc }}</p>
                    </p>

                    <div class="tag-widget post-tag-container mb-5 mt-5">
                        <div class="tagcloud">
                            <a href="{{ url('/')}}"" class=" tag-cloud-link">Kembali ke Beranda</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 sidebar ftco-animate">
                    <div class="sidebar-box ftco-animate">
                        <div class="categories">
                            <h3>Varian</h3>
                            <li><a href="#">{{ $product->product_varian_desc }}</a></li>
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
                        <script>
                            document.write(new Date().getFullYear());
                        </script>| by <a href="/" target="_blank">Aetheré</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
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