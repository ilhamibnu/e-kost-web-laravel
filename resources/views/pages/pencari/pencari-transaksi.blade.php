@extends('layouts.sidebar')

@section('title')
    Transaction | Pencari
@endsection

@push('addon-style')
<link rel="stylesheet" href="/assets/css/pages/fontawesome.css">
<link rel="stylesheet" href="/assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="/assets/css/pages/datatables.css">
<script type="text/javascript"
src="https://app.sandbox.midtrans.com/snap/snap.js"
data-client-key="{{ config('midtrans.client_key') }}"></script>
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
                        <li class="breadcrumb-item active" aria-current="page">Transaction</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Basic Tables start -->
    <section class="section">
        <div class="card">
            <div class="card-header">
                Jquery Datatable
            </div>
            <div class="card-body">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            {{-- <th>No</th> --}}
                            <th>Id Kost</th>
                            <th>No.kamar</th>
                            <th>Nama Penyewa</th>
                            <th>Durasi Sewa</th>
                            <th>Tanggal Mulai Ngekos</th>
                            <th>Total Harga</th>
                            <th>Status</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        <tr>
                            {{-- <td>{{ $no++; }}</td> --}}
                            <td>{{ $transaction->kost_id }}</td>
                            <td>{{ $transaction->no_kamar }}</td>
                            <td>{{ $transaction->nama_pemesan }}</td>
                            <td>{{ $transaction->durasi_sewa }} Bulan</td>
                            <td>{{ $transaction->tgl_sewa }}</td>
                            <td>{{ $transaction->total_price }}</td>
                            {{-- @if($transaction->status == 'unpaid' ) --}}
                            <td><span class="badge bg-danger">{{ $transaction->status  }}</span></td>

                            <td><button class="btn btn-success btn-lg" id="pay-button">Bayar</button></td>
                        </tr>
              
                    </tbody>
                </table>
            </div>
        </div>

    </section>
    <!-- Basic Tables end -->
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

<script type="text/javascript">
  // For example trigger on button clicked, or any time you need
  var payButton = document.getElementById('pay-button');
  payButton.addEventListener('click', function () {
    // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
    window.snap.pay('{{ $snapToken }}', {
      onSuccess: function(result){
        /* You may add your own implementation here */
        alert("payment success!"); console.log(result);
      },
      onPending: function(result){
        /* You may add your own implementation here */
        alert("wating your payment!"); console.log(result);
      },
      onError: function(result){
        /* You may add your own implementation here */
        alert("payment failed!"); console.log(result);
      },
      onClose: function(){
        /* You may add your own implementation here */
        alert('you closed the popup without finishing the payment');
      }
    })
  });
</script>

{{-- <script type="text/javascript">
    $(document).ready(function () {
       $('#Transaction').DataTable({
            processing: true,
            serverSide: true,
            scrollX: true,
            ajax: '{{ url()->current() }}',
            columns : [
                {data: 'foto', name: 'foto'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'username', name: 'username'},
                {data: 'nik', name: 'nik'},
                {data: 'alamat', name: 'alamat'},
                {data: 'no_hp', name: 'no hp'},
                {data: 'jenis_kelamin', name: 'jenis kelamin'},
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

@endpush

