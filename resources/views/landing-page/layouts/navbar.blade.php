    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <img src="{{ asset('images/logo2.png') }}" alt="">
                {{-- <span>FlexStart</span> --}}
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="{{ route('home') }}#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('home') }}#about">Tentang Kami</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('home') }}#values">Layanan Kami</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('home') }}#faq">FAQ</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('home') }}#contact">Kontak Kami</a></li>
                    {{-- <li><a href="blog.html">Blog</a></li> --}}
                    {{-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> --}}
                    {{-- <li><a class="getstarted scrollto" href="#about">Get Started</a></li> --}}
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->