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
    <title>Edit Data Customer</title>
    <meta name="description" content="Edit Data Customer">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

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
        <title>EDIT DATA</title>
        <meta name="description" content="Edit Data Customer">
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
            <form action="{{ route('customers.update', $editData->id)}}" method="POST">
            @csrf
            <div class="breadcrumbs">
                <div class="col-sm-4">
                    <div class="page-header float-left-bold">
                        <div class="page-title-bold">
                            <h1>EDIT CUSTOMER</h1>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="content mt-3">
                <div class="animated fadeIn">
    
                    <div class="row">
    
                        <div class="col-xs-6 col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Input Customer</strong>
                                </div>
                                <div class="card-body card-block">
                                    <div class="form-group">
                                        <label class=" form-control-label">Nama</label>
                                        <div class="input-group">
                                            {{-- <div class="input-group-addon"><i class="fa fa-male"></i></div> --}}
                                            <input class="form-control" name="nama" value="{{$editData->nama}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class=" form-control-label">Telp</label>
                                        <div class="input-group">
                                            {{-- <div class="input-group-addon"><i class="fa fa-phone"></i></div> --}}
                                            <input class="form-control" name="telepon" value="{{$editData->telepon}}">
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
                                        <label class=" form-control-label">Alamat</label>
                                        <div class="input-group">
                                            {{-- <div class="input-group-addon"><i class="fa fa-credit-card"></i></div> --}}
                                            <input class="form-control" name="alamat" value="{{$editData->alamat}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class=" form-control-label">Email</label>
                                        <div class="input-group">
                                            {{-- <div class="input-group-addon"><i class="fa fa-credit-card"></i></div> --}}
                                            <input class="form-control" name="email" value="{{$editData->email}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class=" form-control-label">Kode Customer</label>
                                        <div class="input-group">
                                            {{-- <div class="input-group-addon"><i class="fa fa-phone"></i></div> --}}
                                            <input class="form-control" name="kode_customer" value="{{$editData->kode_customer}}">
                                        </div>
                                    </div>
                                    <button type="submit"  class="btn btn-rounded btn-info">TAMBAHKAN</button>
                                </div>
                            </div>
                            
                            </div>
                          
                        </div>
                    </div>
                </div><!-- .animated -->
            </div><!-- .content -->
        </div><!-- /#right-panel -->
    </form>
    
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
