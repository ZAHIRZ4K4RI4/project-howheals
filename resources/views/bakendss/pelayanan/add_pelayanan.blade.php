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
    <title>Tambahkan Data</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="{{ asset('backend/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/selectFX/css/cs-skin-elastic.css')}}">


    <link rel="stylesheet" href="{{ asset('backend/vendors/chosen/chosen.min.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.cs')}}s">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body>

    <!-- Left Panel -->
        <!-- Header-->
        <form action="{{ route('pelayanan.store')}}" method="POST">
        @csrf
        <div class="breadcrumbs">
            <div class="col-sm-12">
                <div class="page-header float-left-bold">
                    <div class="page-title-bold">
                        <h1>Data Pelayanan</h1>
                    </div>
                </div>


        <div class="content mt-3">
            <div class="animated fadeIn">

                <div class="row">

                    <div class="col-xs-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <strong>Input Pelayanan</strong>
                            </div>
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label class=" form-control-label">Type Sepatu</label>
                                    <div class="input-group">
                                        {{-- <div class="input-group-addon"><i class="fa fa-male"></i></div> --}}
                                        <input class="form-control" name="type_sepatu">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Pelayanan</label>
                                    <div class="input-group">
                                        {{-- <div class="input-group-addon"><i class="fa fa-phone"></i></div> --}}
                                        <input class="form-control" name="pelayanan">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Status</label>
                                    <div class="input-group">
                                        {{-- <div class="input-group-addon"><i class="fa fa-phone"></i></div> --}}
                                        <input class="form-control" name="status">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Harga</label>
                                    <div class="input-group">
                                        {{-- <div class="input-group-addon"><i class="fa fa-phone"></i></div> --}}
                                        <input class="form-control" name="harga">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xs-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                {{-- <strong>Masked Input</strong> <small> Small Text Mask</small> --}}
                            </div>
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label class=" form-control-label">Tanggal Masuk</label>
                                    <div class="input-group">
                                        {{-- <div class="input-group-addon"><i class="fa fa-credit-card"></i></div> --}}
                                        <input class="form-control" name="tanggal_masuk">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Estimasi Selesai</label>
                                    <div class="input-group">
                                        {{-- <div class="input-group-addon"><i class="fa fa-credit-card"></i></div> --}}
                                        <input class="form-control" name="estimasi_selesai">
                                    </div>   
                                </div>
                                <div class="form_group mb-3">
                                    <label for="inputState" class="form-control-label">Customers</label>
                                    <select id="inputState" class="form-control" name="id_customers">
                                      <option selected>Pilih Customers</option>
                                      @foreach ($data as $item)
                                      <option value="{{$item->id}}">{{$item->nama}}</option>
                                      @endforeach
                                    </select>
                                </div>
                                <button type="submit"  class="btn btn-rounded btn-info">TAMBAHKAN</button>
                            </div>
                        </div>
                    </div>
                </div><!-- .animated -->
            </div><!-- .content -->
        </form>
    </div><!-- /#right-panel -->


    <!-- Right Panel -->


<script src="{{ asset('backend/vendors/jquery/dist/jquery.min.js')}}"></script>
<script src="{{ asset('backend/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{ asset('backend/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('backend/assets/js/main.js')}}"></script>
<script src="{{ asset('backend/vendors/chosen/chosen.jquery.min.js')}}"></script>

<script>
    jQuery(document).ready(function() {
        jQuery(".standardSelect").chosen({
            disable_search_threshold: 10,
            no_results_text: "Oops, nothing found!",
            width: "100%"
        });
    });
</script>

</body>

</html>
