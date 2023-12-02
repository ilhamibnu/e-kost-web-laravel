@extends('layouts.sidebar')

@section('title')
Pemilik | Data Kamar
@endsection

@push('addon-style')
<link rel="stylesheet" href="/assets/css/pages/fontawesome.css">
<link rel="stylesheet" href="/assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="/assets/css/pages/datatables.css">

@endpush

@section('content')
<div id="main">
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Profile Admin</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profile Admin</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="page-content">
    
    <!-- Basic Tables start -->
    <section class="section">
        <div class="card">
            <div class="card-header">
                <a href="" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addAdmin">
                    + Tambah Data Kamar
                </a>
            </div>
            <div class="card-body">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Foto depan kamar</th>
                            <th>Foto dalam kamar</th>
                            <th>Foto kamar mandi</th>
                            <th>Foto dapur</th>
                            <th>No. Kamar</th>
                            <th>Jenis Kamar</th>
                            <th>Deskripsi</th>
                            <th>Harga</th>
                            <th>Status</th>
                            <th>Action</th>
                           
                        </tr>

                    </thead>
                    <tbody>
                        <?php

                        $no = 1;
    
                        ?>
                    <tr>                        
                        @foreach ($data as $datakamar)
                        <td>{{ $no++ }}</td>
                        
                        <td>
                            <img src="{{ asset('assets/kamar/depan/' . $datakamar['img_pertama']) }}" alt="" height="20" width="20">
                        </td>
                        <td>
                            <img src="{{ asset('assets/kamar/dalam/' . $datakamar['img_kedua']) }}" alt="" height="20" width="20">
                        </td>
                        <td>
                            <img src="{{ asset('assets/kamar/toilet/' . $datakamar['img_ketiga']) }}" alt="" height="20" width="20">
                        </td>
                        <td>
                            <img src="{{ asset('assets/kamar/dapur/' . $datakamar['img_keempat']) }}" alt="" height="20" width="20">
                        </td>
                        {{-- <td>{{ $datakamar->kost_id }}</td> --}}
                        <td>{{ $datakamar->no_kamar }}</td>
                        <td>{{ $datakamar->jenis_kamar }}</td>
                        <td>{{ $datakamar->deskripsi }}</td>
                        <td>{{ 'Rp ' . number_format($datakamar->harga, 0, ',', '.')}}</td>
                        @if($datakamar->status == 1)
                        <td><span class="badge bg-success">Tersedia</span></td>
                        @endif
                        @if($datakamar->status == 2)
                        <td><span class="badge bg-danger">Disewa</span></td>
                        @endif
                        @if($datakamar->status == 3)
                        <td> <span class="badge bg-secondary">Pending</span></td>
                        @endif
                        <td>
                                <a href="" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deletedata{{$datakamar->id}}">
                                    Delete
                                </a>
                        </td>
                        <td>
                            <a href="" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#editAdmin{{$datakamar->id}}">
                            Edit
                        </a>
                            </td>
                    </tr>

                    <div class="modal fade" id="deletedata{{ $datakamar->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus data kamar</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/kamarkost-delete/{{$datakamar->id}}" method="POST">
                                    @csrf
                                    @method('DELETE');
                                    <p>Yakin akan menghapus data ?</p>
                                
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                              <button type="submit" class="btn btn-primary">Hapus</button>
                            </form>
                    
                            </div>
                          </div>
                        </div>
                      </div>
                      {{-- modals edit --}}
                            <div class="modal fade" id="editAdmin{{$datakamar->id}}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel2">Edit Model</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        <form action="/kostkamar-edit/{{$datakamar->id}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">Id Kost</label>
                                                    <input type="text" name="id_kost" value="{{$datakamar->kost_id}}" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">Jenis kamar</label>
                                                    <input type="text" name="jenis_kamar" value="{{$datakamar->jenis_kamar}}" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">No kamar</label>
                                                    <input type="text" name="no_kamar" value="{{$datakamar->no_kamar}}"class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">Harga</label>
                                                    <input type="text" name="harga" value="{{$datakamar->harga}}"class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">Status</label>
                                                    <input  type="text" name="status" value="{{$datakamar->status}}"class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">Gambar pertama</label>
                                                    <input type="file" name="img_pertama"value="{{$datakamar->img_pertama}}"class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">Gambar kedua</label>
                                                    <input type="file" name="img_kedua" value="{{$datakamar->img_kedua}}"class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">Gambar ketiga</label>
                                                    <input type="file" name="img_ketiga" value="{{$datakamar->img_ketiga}}" class="form-control"> 
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">Gambar keempat</label>
                                                    <input type="file" name="img_keempat" value="{{$datakamar->img_keempat}}"class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">Deskripsi</label>
                                                    <input type="text" name="deskripsi" value="{{$datakamar->deskripsi}}"class="form-control" required>
                                                </div>
                                            </div>
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


                


                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </section>
    <!-- Basic Tables end -->

{{-- modals tambah --}}
<div class="modal fade" id="addAdmin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah kamar</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/kamarkost-add" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Gambar pertama</label>
                            <input type="file" name="img_pertama" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Gambar kedua</label>
                            <input type="file" name="img_kedua" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Gambar ketiga</label>
                            <input type="file" name="img_ketiga" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Gambar keempat</label>
                            <input type="file" name="img_keempat" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-12"> 
                        <div class="form-group">
                            <label for="">Kost Rujukan</label>
                            <select name="id_kost" required class="form-control">
                                <option value="">Pilih Rujukan</option>
                                @foreach ($datakost as $i)
                                <option value="{{ $i->id }}">{{ $i->nama_kost}}</option>
                                @endforeach

                              </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Jenis kamar</label>
                            <input type="text" name="jenis_kamar" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">No kamar</label>
                            <input type="text" name="no_kamar"  class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Harga</label>
                            <input type="text" name="harga" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Status</label>
                            <input  type="text" name="status" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Deskripsi</label>
                            <input type="text" name="deskripsi" class="form-control" required>
                        </div>
                    </div>
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
@endsection

@push('addon-script')
<script src="/assets/extensions/jquery/jquery.min.js"></script>
<script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
<script src="/assets/js/pages/datatables.js"></script>
@endpush

