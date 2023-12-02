@extends('layouts.app')

@section('title')
    Tentang Kami | Jkost
@endsection


@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Tentang Kami</h2>
                </div>
                <div class="col-12">
                    <a href="index.php">Home</a>
                    <a href="about.php">Tentang kami</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{ asset('img/about3.jpeg') }}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-header text-left">
                        <p>About Us</p>
                        <h2>J-KOS</h2>
                    </div>
                    <div class="about-content">
                        <p>
                            Website J-KOS memudahkan pengguna khususnya daerah jember dalam mencari sementara dengan mudah dan efektif anpa harus datang ke tempatnya langsung.
                        </p>
                        <ul>
                            <li><i class="far fa-check-circle"></i>Pembayaran mudah</li>
                            <li><i class="far fa-check-circle"></i>Kos kosan yang nyaman</li>
                            <li><i class="far fa-check-circle"></i>Jangkauan yang luas</li>
                        </ul>
                        <a class="btn btn-custom" href="">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- Team Start -->
  <div class="team">
    <div class="container">
        <div class="section-header text-center">
            <p>Team</p>
            <h2>Developer</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="team-item" s>
                    <div class="team-img">
                        <img src="assets-home/img/team-1.jpg" alt="Team Image">
                    </div>
                    <div class="team-text">
                        <h2>Kirana Ramadhanti</h2>
                        <p>Admin</p>
                        <div class="team-social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <div class="team-img">
                        <img src="assets-home/img/team-2.jpg" alt="Team Image">
                    </div>
                    <div class="team-text">
                        <h2>Ajisaka Siddiq</h2>
                        <p>Admin</p>
                        <div class="team-social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <div class="team-img">
                        <img src="assets-home/img/team-3.jpg" alt="Team Image">
                    </div>
                    <div class="team-text">
                        <h2>Elli Roffiah</h2>
                        <p>Admin</p>
                        <div class="team-social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <div class="team-img">
                        <img src="assets-home/img/team-4.jpg" alt="Team Image">
                    </div>
                    <div class="team-text">
                        <h2>Yudis anjay mabar</h2>
                        <p>Admin</p>
                        <div class="team-social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <div class="team-img">
                        <img src="assets-home/img/team-4.jpg" alt="Team Image">
                    </div>
                    <div class="team-text">
                        <h2>M Zidan Prasetyo</h2>
                        <p>Admin</p>
                        <div class="team-social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->
@endsection



