@extends('layouts.app')

@section('title')
    Details | Jkost
@endsection


@section('content')
<div class="page-content page-details">
    <section class="store-gallery mt-5" id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-lg-8" data-aos="zoom-in">
                    <transition name="slide-fade" mode="out-in">
                        <img :key="photos[activePhoto].id" :src="photos[activePhoto].url" class="w-100 main-image" alt="" style="
                        max-height: 460px; 
                        min-height: 460px; 
                        border-radius: 40px;
                        
                        
                        " />
                    </transition>
                </div>
                <div class="col-lg-2">
                    <div class="row">
                        <div class="col-3 col-lg-12 mt-lg-2 mt-2 mt-md-3" v-for="(photo, index) in photos" :key="photo.id" data-aos="zoom-in" data-aos-delay="100">
                            <a href="#" @click="changeActive(index)">
                                <img :src="photo.url" class="w-100 thumbnail-image" :class="{ active: index == activePhoto }" alt="" style="max-height: 110px;" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="store-details-container" data-aos="fade-up">
        <section class="store-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h1 class="kost-name">Kamar Kost No.Kamar 12</h1>
                        <p class="kost-owner">By MAmi kost</p>
                        <p><span class="kost-price">Rp. 120.000 </span>/ Bulan</p>

                        <!-- <div class="owner">By Dayat</div>
                        <div class="price">Rp.350.000</div> -->
                    </div>
                    <div class="col-lg-2" data-aos="zoom-in">
                                <a class="btn btn-custom px-4 btn-block mt-2 mb-3" href="checkout?id_kamar">Sewa</a>

                            {{-- <a class="btn btn-custom px-4 btn-block mt-2 mb-3" href="" onclick="alert('Akses hanya untuk akun penyewa')">Sewa</a> --}}
                     
                    </div>
                </div>
            </div>
        </section>
        <section class="store-description">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <h5>Deskripsi Kamar Kost</h5>
                        <hr>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident deserunt numquam doloribus nihil impedit placeat, consequuntur distinctio. Eaque modi illum quisquam doloremque ducimus exercitationem itaque eum fugiat, illo, optio nulla.
                        </p>
                        <h5>Alamat</h5>
                        <hr>
                        <p>
                           Jember
                        </p>
                        <div id="map" style="width: 100%; height: 400px;"></div>
                        <script>
                            var map = L.map('map').setView([-8.172405053026914, 113.69920589124717], 20);

                            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                            }).addTo(map);

                            L.marker([-8.168230667064604, 113.70215956867177]).addTo(map)
                                .bindPopup('Mami Kost')
                                .openPopup();
                        </script>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection



