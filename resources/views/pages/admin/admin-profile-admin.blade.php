@extends('layouts.sidebar')

@section('title')
    Profile Admin|Admin
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
                <a data-bs-toggle="modal" data-bs-target="#addadmin" class="btn btn-primary mb-3">
                    + Tambah Admin
                </a>
            </div>
            <div class="card-body">
                <table class="table" id="ProfileUserTable">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>ID</th>
                            <th>Foto</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $profile)
                        <tr>
                            <td>{{ $no++; }}</td>
                            <td>{{ $profile->id }}</td>
                            <td> <img src="{{ Storage::url($profile->foto) }}" style="max-height: 48px;" alt="" /></td>
                            <td>{{ $profile->name }}</td>
                            <td>{{ $profile->email }}</td>
                            <td>{{ $profile->username }}</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                     Aksi
                                    </button>
                                    <ul class="dropdown-menu">
                                    <li><a data-bs-toggle="modal" data-bs-target="#editadmin{{$profile->id}}" class="dropdown-item">Edit</a></li>
                                    <li><a data-bs-toggle="modal" data-bs-target="#deletedata{{$profile->id}}" class="dropdown-item text-danger">Hapus</a></li>

                                    </ul>
                                  </div>
                            </td>
                        </tr>
                        @endforeach
                        
                        @include('pages.admin.profile.edit')
                    </tbody>
                </table>
            </div>
        </div>
        
    </section>
    <!-- Basic Tables end -->
    {{-- modals tambah --}}
    {{-- @include('pages.admin.profile.create') --}}
    
    @include('pages.admin.profile.delete')
    @include('pages.admin.profile.create')




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

        var_dump()
@endsection

@push('addon-script')   
<script src="/assets/extensions/jquery/jquery.min.js"></script>
<script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
<script src="/assets/js/pages/datatables.js"></script>
@endpush

