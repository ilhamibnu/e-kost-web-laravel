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
                        <ul class="navbar-nav d-lg-flex">
                            <li class="nav-item dropdown">
                                <a href="" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown">
                                    Hi, {{Auth::user()->name}}
                                    @if (Auth::check() && Auth::user()->foto)
    <img src="{{ asset('storage/' . Auth::user()->foto) }}" alt="Profile Picture" class="rounded-circle m-0 p-0 profile-picture" width="40px" max-height="50px">
@else
    <img src="{{ asset('images/default-profile.jpg') }}" alt="Default Profile Picture" class="rounded-circle m-0 p-0 profile-picture" height="50px">
@endif

                                    {{-- <img src="{{ Auth::user()->foto }}" alt="" > --}}
                                </a>
                                <div class="dropdown-menu bg-dark">

                                    @if(Auth::user()->role == 'admin')
                                        <a href="{{ route('dashboard-admin') }}" class="dropdown-item text-danger">Dashboard</a>
                                        <a href="ResetPass" class="dropdown-item text-danger">Setting</a>
                                    @endif
                                    @if(Auth::user()->role == 'pemilik')
                                        <a href="{{ route('dashboard') }}" class="dropdown-item text-danger">Dashboard</a>
                                        <a href="ResetPass" class="dropdown-item text-danger">Setting</a>
                                    @endif
                                    @if(Auth::user()->role == 'pencari')
                                        <a href="{{ route('Home-Kost') }}" class="dropdown-item text-danger">Dashboard</a>
                                        <a href="ResetPass" class="dropdown-item text-danger">Setting</a>
                                    @endif
                                    
                                    <div class="dropdown-divider"></div>

                                    <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                     {{ __('Logout') }}
                                 </a>

                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                     @csrf
                                 </form>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
        </div>
    </div>
    <!-- Nav Bar End -->
