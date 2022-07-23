    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Jl. Tj. Sari No.36 Sukomanunggal, Kota SBY, Jawa Timur 60188</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+62 813 3356 0974</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+62 813 3356 0967</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>office.infinite@gmail.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
        <!-- Navbar & Carousel Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
                <a href="index.html" class="navbar-brand p-0">
                    <img src="{{ asset('assets/img/infinite-logo.png') }}" width="120" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="#header-carousel" class="nav-item nav-link active">Beranda</a>
                        <a href="#about" class="nav-item nav-link">Tentang Kami</a>
                        <a href="#service" class="nav-item nav-link">Layanan Kami</a>
                        {{-- <a href="{{ url('') }}" class="nav-item nav-link">Berita & Event</a> --}}
                        <a href="#contact" class="nav-item nav-link">Kontak Kami</a>
                    </div>
                </div>
            </nav>
    
            <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="{{ asset('assets/img/4.png') }}" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 900px;">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Creative & Innovative</h5>
                                <h1 class="display-1 text-white mb-md-4 animated zoomIn">We make IT happen</h1>
                                <a href="#consult-now" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Konsultasikan Sekarang</a>
                                <a href="{{ url('') }}" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Download Company Profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="{{ asset('assets/img/6.png') }}" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 900px;">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Creative & Innovative</h5>
                                <h1 class="display-1 text-white mb-md-4 animated zoomIn">Simple solution for complex connection</h1>
                                <a href="#consult-now" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Konsultasikan Sekarang</a>
                                <a href="{{ url('') }}" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Download Company Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    <!-- Navbar & Carousel End -->