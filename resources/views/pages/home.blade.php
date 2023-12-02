@extends('layouts.app')

@section('title')
    Home | Jkost
@endsection


@section('content')
    <!-- Carousel Start -->
    <div class="carousel">
        <div class="container-fluid">
            <div class="owl-carousel">
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="assets-home/img/kos.jpg" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h1>Kos Kosan murah dan berkualitas</h1>
                        <p>
                            Menyediakan kamar kost yang mempunyai desaign modern dan kekinian dilengkapi dengan fasilitas yang lengkap mulai dari harga Rp 300.000
                        </p>
                        <a class="btn btn-custom" href="order.php">Pesan Sekarang!</a>
                    </div>
                </div>
                <div class="carousel-item mt-lg-3">
                    <div class="carousel-img">
                        <img src="assets-home/img/kos3.jpeg" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h1>Memudahkan penggunanya</h1>
                        <p> Mulai sekarang,Booking Kost dengan mudah dan aman

                            Mudah dalam melakukan Pembayaran dapat melalui E-WALLET (Ovo, Gopay, Shoppepay, Dll)

                        </p>

                        <a class="btn btn-custom" href="">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="assets-home/img/about3.jpeg" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-header text-left">
                        <p>Tentang Kami</p>
                        <h2>J KOS</h2>
                    </div>
                    <div class="about-content">
                        <p>
                            Website J-KOS memudahkan pengguna khususnya daerah jember dalam mencari rumah kost dengan mudah dan efektif tanpa harus datang ke tempatnya langsung. Mudah dalam metode pembayaran dengan menggunakan dompet digital dari Shopeepay, Gopay dan lain-lain.
                        <ul>
                            <li><i class="far fa-check-circle"></i>Pembayaran mudah</li>
                            <li><i class="far fa-check-circle"></i>Kos kosan yang nyaman</li>
                            <li><i class="far fa-check-circle"></i>Jangkauan yang luas</li>
                            <li><i class="far fa-check-circle"></i>Harga Terjangkau</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="service">
        <div class="container">
            <div class="section-header text-center">

                <h2>Pelayanan kami</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <i class="fa-solid fa-people-roof text-center"></i>
                        <h3>Konsultasi Tentang Kost</h3>
                        <p>Anda bisa menanyakan hal tentang seputar kost </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <i class="fa-solid fa-hotel text-center"></i>
                        <h3>Pemesanan Kamar Kost Melalui Online</h3>
                        <p>Anda bisa memesan kamar kos secara online sehingga anda tidak perlu mendatanginya</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <i class="fa-solid fa-money-bill-1-wave text-center"></i>
                        <h3>Pembayaran E-WALLET</h3>
                        <p>Nah untuk pembayaran anda bisa melalui E-wallet (ovo, gopay,dll).</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <i class="fa-solid fa-shop text-center"></i>
                        <h3>Membuka Jasa Promosi Kost</h3>
                        <p>Untuk bapak/ibu yang mempuyai usaha kos kosan anda bisa mendaftarkan usaha bapak ibu di website kami, karna itu bisa memudahkan pekerjaan bapak/ibu.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Service End -->

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


    <!-- Testimonial Start -->
    <div class="testimonial">
        <div class="container">
            <div class="section-header text-center">
                <p>Testimonial</p>
                <h2>What our clients say</h2>
            </div>
            <div class="owl-carousel testimonials-carousel">
                <div class="testimonial-item">
                    <img src="assets-home/img/testimonial-1.jpg" alt="Image">
                    <div class="testimonial-text">
                        <h3>Antoni Susanto</h3>
                        <h4>Karyawan Kantor</h4>
                        <p>
                            Pelayanannya sangat baik, dan kos yang disediakan juga terjamin kualitasnya.
                        </p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <img src="assets-home/img/testimonial-2.jpg" alt="Image">
                    <div class="testimonial-text">
                        <h3>Selly Rahmawati</h3>
                        <h4>Mahasiswa</h4>
                        <p>
                            Harga terjangkau, Kualitas bintang 5
                        </p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <img src="assets-home/img/testimonial-3.jpg" alt="Image">
                    <div class="testimonial-text">
                        <h3>Rudy Hartono</h3>
                        <h4>Mahasiswa</h4>
                        <p>
                            Website yang mudah digunakan dan juga menarik
                        </p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <img src="assets-home/img/testimonial-4.jpg" alt="Image">
                    <div class="testimonial-text">
                        <h3>Roby Joko Wahyu</h3>
                        <h4>Mahasiswa</h4>
                        <p>
                            Pelayanannya sangat oke
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

@endsection



