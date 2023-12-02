@extends('layouts.app')

@section('title')
    Pemesanan | Jkost
@endsection


@section('content')
<div class="price">
    <div class="container">
        <div class="section-header text-center">
            <p>Kos Kosan</p>
            <h2>Pilih Kos Sesuai Keinginan Anda</h2>
        </div>
        <form action="" method="get">
            <div class="row mb-3 justify-content-lg-end">
                <div class="col-lg-3">
                    <select name="option" class="form-control  form-select" aria-label="Default select example">
                        <option value=""><i class="fa-regular fa-people"></i>Semua Tipe Kost</option>
                        <option value="Perempuan">Cewek</option>
                        <option value="Laki-Laki">Cowok</option>
                        <option value="campur">Campur</option>
                    </select>
                </div>
                <div class="col-lg-4 input-group mb-3">
                    <input type="text" name="keyword" class="form-control" placeholder="Cari nama kos " aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="input-group-text  btn" id="basic-addon2">Cari</button>
                    </div>
                </div>
            </div>
        </form>

        <div class="row">
            @foreach ($data as $kost)

                <div class="col-lg-3 mb-3">
                    <a href="Pemesanan/details/{{ $kost->id }}">
                        <div class="card">
                            <img src="assets-home/img/blog-1.jpg" class="card-img-top" alt="..." style="max-height: 140px;">
                            <div class="card-body">
                                <h2 class="card-text">Kamar Kost No.Kamar {{ $kost->no_kamar }}</h2>
                                <p>By {{ $kost->datakost->nama_kost }}</p>
                                <p><span class="kost-price">Rp. {{ $kost->harga }} </span>/ Bulan</p>
                    
                                @if($kost->status == 1)
                                <span class="p-1 text-white rounded bg-success">Tersedia</span>
                                @endif
                                @if($kost->status == 0)
                                <span class="p-1 text-white rounded bg-danger">Disewakan</span>
                                @endif
                                

                            </div>
                        </div>
                    </a>
                </div>

                                
            @endforeach
       

        </div>
    </div>

</div>
<div class="row justify-content-center">
    <nav aria-label="Page navigation example position-absolute top-0 start-50 translate-middle ">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item "><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</div>
@endsection



