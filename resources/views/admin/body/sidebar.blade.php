<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="./"><img src="images/logo.png" alt=""></a>
            <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt=""></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="dashboard.blade"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>   
                </li>
                <h3 class="menu-title">Customer</h3>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Customer</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="{{ route('backend.customers.view')}}">Data Customer</a></li>
                        <li><i class="fa fa-table"></i><a href="{{ route('backend.customers.add')}}">Tambah Customer</a></li>
                    </ul>
                </li>
                <h3 class="menu-title">Pelayanan</h3>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Pelayanan</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="{{ route('bakendss.pelayanan.view_pelayanan')}}">Data Pelayanan</a></li>
                        <li><i class="fa fa-table"></i><a href="{{ route('bakendss.pelayanan.add_pelayanan')}}">Tambah Pelayanan</a></li>
                    </ul>
                </li>
            </li>
            <h3 class="menu-title">Transaksi</h3>
            <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Transaksi</a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="fa fa-table"></i><a href="{{ route('backends.transaksi.view')}}">Data Transaksi</a></li>
                    <li><i class="fa fa-table"></i><a href="{{ route('backends.transaksi.add')}}">Tambah Transaksi</a></li>
                </ul>
            </li>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>