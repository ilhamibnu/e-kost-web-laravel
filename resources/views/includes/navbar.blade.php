    <!-- Top Bar Start -->
    <div class="top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-3">
                    <div class="logo">
                        <a href="index.html">
                            <h1>J<span>KOS</span></h1>
                        </a>
                    </div>
                </div>
                <div class="col-4 col-md-4">
                    <div class="top-bar-item">
                        <div class="top-bar-icon">
                            <i class="fa fa-phone-alt"></i>
                        </div>
                        <div class="top-bar-text">
                            <h3>Call Us</h3>
                            <p>0891 3687 7252</p>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-md-4">
                    <div class="top-bar-item">
                        <div class="top-bar-icon">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="top-bar-text">
                            <h3>Email Us</h3>
                            <p>zidanprasetyo@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- Top Bar End -->

    <!-- Nav Bar Start -->
    <div class="nav-bar">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                <a href="#" class="navbar-brand">MENU</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto">
                        <a href="{{ route('home') }}" class="nav-item nav-link {{ (request()->is('/')) ? 'active' : ''}}">Home</a>
                        <a href="{{ route('about') }}" class="nav-item nav-link {{ (request()->is('Tentang-Kami')) ? 'active' : ''}}">Tentang Kami</a>
                        <a href="{{ route('pelayanan') }}" class="nav-item nav-link {{ (request()->is('Pelayanan')) ? 'active' : ''}}">Pelayanan</a>
                        <a href="{{ route('pemesanan') }}" class="nav-item nav-link {{ (request()->is('Pemesanan')) ? 'active' : ''}}">Pemesanan</a>
                        <!-- <a href="contact.php" class="nav-item nav-link">Contact</a> -->
                    </div>
                    <div class="ml-auto">
                            <a href="{{ route('register') }}" class="btn-regis ">Register</a>
                            <a href="{{ route('login') }}" class="btn btn-custom">Login</a>
                    </div>

                </div>
            </nav>
        </div>
    </div>
    <!-- Nav Bar End -->
