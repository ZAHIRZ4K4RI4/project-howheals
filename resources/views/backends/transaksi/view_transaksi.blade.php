<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tabel Transaksi</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{asset('backend/apple-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('backend/favicon.ico')}}">


    <link rel="stylesheet" href="{{ asset('backend/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/selectFX/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}">

    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
        <!-- Header-->
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="tambahdata " style="margin-bottom: 10px">
                    <a href="{{ route('transaksis.export') }}" >
                        <button type="button" class="btn btn-info">Cetak Laporan</button>
                    </a>
                </div>
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Transaksi</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tbody>
                                            <tr>
                                                <td>Id</td>
                                                <td>Tanggal Masuk</td>
                                                <td>Total Bayar</td>
                                                <td>Tanggal Bayar</td>
                                                <td>Customer</td>
                                                <td>Action</td>
                                                
                                            </tr>        
                                        </tbody>
                                    </thead>    
                                    <tbody>
                                        @foreach($allDataTransaksi as $key => $transaksi)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{$transaksi->tanggal_masuk}}</td>
                                            <td>{{$transaksi->total_bayar}}</td>
                                            <td>{{$transaksi->tanggal_bayar}}</td>
                                            <td>{{$transaksi->pelayanans->customers->nama}}</td>
                                            <td>
                                                <a href="{{route('transaksi.edit', $transaksi->id)}}" class="btn btn-info">Edit</a>
                                                <a href="{{route('transaksi.delete', $transaksi->id)}}" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <a href="{{ route('backends.transaksi.add')}}"><button type="submit" class="btn btn-rounded btn-info">Tambahkan</button>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="{{ asset('backend/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('backend/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{ asset('backend/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('backend/assets/js/main.js')}}"></script>


    <script src="{{ asset('backend/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('backend/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('backend/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('backend/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('backend/vendors/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{ asset('backend/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{ asset('backend/vendors/pdfmake/build/vfs_fonts.js')}}"></script>
    <script src="{{ asset('backend/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('backend/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{ asset('backend/vendors/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
    <script src="{{ asset('backend/assets/js/init-scripts/data-table/datatables-init.js')}}"></script>


</body>

</html>
