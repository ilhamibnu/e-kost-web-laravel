@extends('layouts.sidebar')

@section('title')
Pemilik | Data Kost
@endsection

@push('addon-style')
<link rel="stylesheet" href="/assets/css/pages/fontawesome.css">
<link rel="stylesheet" href="/assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="/assets/css/pages/datatables.css">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>    
@endpush

@section('content')
<div id="main">
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Kost</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data Kost</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="page-content">
    
    <!-- Basic Tables start -->
    {{-- <section class="section">
        <div class="card">
            <div class="card-body">
                <form id="bookingForm" action="" method="post" class="needs-validation" novalidate autocomplete="off" enctype="multipart/form-data">
                    <input type="hidden" class="form-control" id="inputName" name="id_user" placeholder="Id user" required value="/" />
                    <div class="form-group">
                        <label for="img">Kost tampak depan</label>
                        <input id="img" type="file" class="form-control" name="gambar">
                    </div>
                    <div class="form-group">
                        <label for="inputName">Nama Kost</label>
                        <input type="text" class="form-control" id="inputName" name="txt_nama" placeholder="Nama kost anda!" required />
                    </div>
                    <div class="form-group">
                        <label for="textAreaRemark">Deskripsi</label>
                        <textarea class="form-control" name="txt_deskripsi" id="textAreaRemark" rows="5" placeholder="Tambahkan peraturan dan deskripsi kost anda...."></textarea>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Alamat</label>
                        <textarea class="form-control" rows="5" type="text" id="alamat" name="txt_alamat"></textarea>
                        <small class="form-text text-muted">Isi alamat selengkap mungkin!.</small>
                    </div>

                    <!-- get location start-->
                    <input type="hidden" class="form-control" id="Latitude" name="Latitude" placeholder="latitude" required />
                    <input type="hidden" class="form-control" id="Longitude" name="Longitude" placeholder="longitude" required />
                    <div class="mt-2 mb-2" id="mapid" style="width: 100%; height: 400px;"></div>
                    <script>
                        const mymap = L.map('mapid').setView([-8.231935485535336, 113.60678852931734], 13);
                        const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            maxZoom: 19,
                        }).addTo(mymap);

                        var Latinput = document.querySelector("[name=Latitude]");
                        var Lnginput = document.querySelector("[name=Longitude]");

                        var curLocation = [-8.231935485535336, 113.60678852931734];
                        mymap.attributionControl.setPrefix(false);

                        var marker = new L.marker(curLocation, {
                            draggable: 'true',
                        });

                        marker.on('dragend', function(event) {
                            var position = marker.getLatLng();
                            marker.setLatLng(position, {
                                draggable: 'true',
                            }).bindPopup(position).update();
                            $("#Latitude").val(position.lat);
                            $("#Longitude").val(position.lng);
                        });

                        mymap.addLayer(marker);


                        mymap.on("click", function(e) {
                            var lat = e.latlng.lat;
                            var lng = e.latlng.lng;
                            if (!marker) {
                                marker = L.marker(e.latlng).addTo(mymap);
                            } else {
                                marker.setLatLng(e.latlng);
                            }
                            Latinput.value = lat;
                            Lnginput.value = lng;
                        });
                    </script>
                    <!-- get location end-->

                    <!-- Start Submit Button -->
                    <button class="btn btn-primary btn-block col-lg-2 ms-auto" type="submit" name="tambah">Submit</button>
                    <!-- End Submit Button -->
                </form>
            </div>
        </div>

    </section> --}}
    <section class="section">
        <div class="card">
            <div class="card-header">
                @if(Auth::user()->statusUser == 'valid') 
                <a href="" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addAdmin">
                    + Tambah Data Kost
                </a>
                @else
                <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#no">+ Tambah Data Kost</button>
                @endif
               
            </div>
            <div class="card-body">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Nama kos</th>
                            <th>alamat</th>
                            <th>Deskripsi</th>
                            <th>Status</th>
                            <th>Action</th>
                           
                        </tr>

                    </thead>
                    <tbody>
                        <?php
                        $no= 1;
                        ?>
                    <tr>                        
                        @foreach ($data as $datakamar)
                        <td>{{ $datakamar->id }}</td>
                        <td>
                            <img src="{{ asset('/assets/user/' . $datakamar['foto']) }}"  alt="" height="50" width="100">
                        </td>
                        <td>{{ $datakamar->nama_kost }}</td>
                        <td>{{ $datakamar->alamat }}</td>
                        <td>{{ $datakamar->deskripsi }}</td>
                        @if($datakamar->status == 1)
                        <td><span class="badge bg-success">active</span></td>
                        @endif
                        @if($datakamar->status == 2)
                        <td><span class="badge bg-danger">inactive</span></td>
                        @endif
                        @if($datakamar->status == 3)
                        <td> <span class="badge bg-secondary">Pending</span></td>
                        @endif
                        <td>
                                <a href="" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deletedata{{$datakamar->id}}">
                                    Delete
                                </a>
                        </td>
                    </tr> 

                    <div class="modal fade" id="deletedata{{$datakamar->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus data kost</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/kostkamar-delete/{{$datakamar->id}}" method="POST">
                                    @csrf
                                    @method('DELETE');
                                    <p>Yakin akan menghapus data ?</p>
                                
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Delete</button>
                            </form>
                    
                            </div>
                          </div>
                        </div>
                      </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>
    {{-- modals tambah --}}
<div class="modal fade" id="addAdmin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">+ Tambah Data Kost </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/kostkamar-add" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                           
                            <input type="hidden" value="{{ Auth::user()->id }}" name="user_id" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Foto</label>
                            <input type="file" name="foto" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Nama Kost</label>
                            <input type="text" name="nama_kost" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">alamat</label>
                            <input type="text" name="alamat" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Deskripsi</label>
                            <input type="text" name="deskripsi" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Longitude</label>
                            <input type="text" class="form-control" id="Longitude" name="longitude" placeholder="longitude" required />
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Latitude</label>
                            <input type="text" class="form-control" id="Latitude" name="latitude" placeholder="latitude" required />
                        </div>
                    </div>
                    <div class="mt-2 mb-2" id="mapid" style="width: 100%; height: 400px;"></div>
                    <script>
                        const mymap = L.map('mapid').setView([-8.159909289725807, 113.72304751985719], 13);
                        const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            maxZoom: 19,
                        }).addTo(mymap);
                
                        var Latinput = document.querySelector("[name=latitude]");
                        var Lnginput = document.querySelector("[name=longitude]");
                
                        var curLocation = [-8.159909289725807, 113.72304751985719];
                        mymap.attributionControl.setPrefix(false);
                
                        var marker = new L.marker(curLocation, {
                            draggable: 'true',
                        });
                
                        marker.on('dragend', function(event) {
                            var position = marker.getLatLng();
                            marker.setLatLng(position, {
                                draggable: 'true',
                            }).bindPopup(position).update();
                            $("#Latitude").val(position.lat);
                            $("#Longitude").val(position.lng);
                        });
                
                        mymap.addLayer(marker);
                
                
                        mymap.on("click", function(e) {
                            var lat = e.latlng.lat;
                            var lng = e.latlng.lng;
                            if (!marker) {
                                marker = L.marker(e.latlng).addTo(mymap);
                            } else {
                                marker.setLatLng(e.latlng);
                            }
                            Latinput.value = lat;
                            Lnginput.value = lng;
                        });
                    </script>
                </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </form>

        </div>
      </div>
    </div>
  </div>
</div>
    <!-- Basic Tables end -->



            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="https://saugi.me">Saugi</a></p>
                    </div>
                </div>
            </footer>



        </div>


        <div class="modal fade" id="no" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">
                <p class="text-center"><span class="text-danger">Mohon Maaf</span> <br>Akun anda belum tervalidasi, Silahkan tunggu keputusan admin!</p>
              </div>
            </div>
          </div>
@endsection

@push('addon-script')   
<script src="/assets/extensions/jquery/jquery.min.js"></script>
<script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
<script src="/assets/js/pages/datatables.js"></script>
{{-- 
<script type="text/javascript">
    $(document).ready(function () {
       $('#datakamar').DataTable({
            processing: true,
            serverSide: true,
            scrollX: true,
            ajax: '{{ url()->current() }}',
            columns : [
                {data: 'id', name: 'id'},
                {data: 'user_id', name: 'user_id'},
                {data: 'nama_kost', name: 'nama_kost'},
                {data: 'alamat', name: 'alamat'},
                {data: 'deskripsi', name: 'deskripsi'},
                {data: 'foto', name: 'foto'},
                {data: 'maps', name: 'maps'},
                {data: 'status', name: 'status'},
                {data: 'longitude', name: 'longitude'},
                {data: 'latitude', name: 'latitude'},
                {
                    data: 'action', 
                    name:'action',
                    orderable : false,
                    searcable : false,
                    width:'15%'
                },
            ]
        });
 });
    </script> --}}

    <script>
        const mymap = L.map('mapid').setView([-8.231935485535336, 113.60678852931734], 13);
        const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
        }).addTo(mymap);

        var Latinput = document.querySelector("[name=Latitude]");
        var Lnginput = document.querySelector("[name=Longitude]");

        var curLocation = [-8.231935485535336, 113.60678852931734];
        mymap.attributionControl.setPrefix(false);

        var marker = new L.marker(curLocation, {
            draggable: 'true',
        });

        marker.on('dragend', function(event) {
            var position = marker.getLatLng();
            marker.setLatLng(position, {
                draggable: 'true',
            }).bindPopup(position).update();
            $("#Latitude").val(position.lat);
            $("#Longitude").val(position.lng);
        });

        mymap.addLayer(marker);


        mymap.on("click", function(e) {
            var lat = e.latlng.lat;
            var lng = e.latlng.lng;
            if (!marker) {
                marker = L.marker(e.latlng).addTo(mymap);
            } else {
                marker.setLatLng(e.latlng);
            }
            Latinput.value = lat;
            Lnginput.value = lng;
        });
    </script>

@endpush

