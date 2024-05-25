<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Icon-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Bootstrap -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-laptop-house"></i>
                </div>
                <div class="sidebar-brand-text mx-2">SI Gudang Laptop</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item @if (Request::routeIs('home')) active @endif">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <li class="nav-item @if (Request::routeIs('laptop','laptop-create')) active @endif">
                <a class="nav-link" href="{{ route('laptop') }}">
                    <i class="fas fa-laptop"></i>
                    <span>Data Laptop</span></a>
            </li>

            <hr class="sidebar-divider my-0">

            <li class="nav-item @if (Request::routeIs('penjualan','penjualan-create')) active @endif">
                <a class="nav-link" href="{{ route('penjualan') }}">
                    <i class="fas fa-shopping-basket"></i>
                    <span>Data Penjualan</span></a>
            </li>

            <hr class="sidebar-divider my-0">

            <li class="nav-item @if (Request::routeIs('supplier', 'supplier-create')) active @endif">
                <a class="nav-link" href="{{ route('supplier') }}">
                    <i class="fas fa-dolly"></i>
                    <span>Data Supplier</span></a>
            </li>

            <hr class="sidebar-divider my-0">

            <li class="nav-item @if (Request::routeIs('stok', 'stok-create')) active @endif">
                <a class="nav-link" href="{{ route('stok') }}">
                    <i class="fas fa-cubes"></i>
                    <span>Data Stok Barang</span></a>
            </li>

            <hr class="sidebar-divider my-0">

            <li class="nav-item @if (Request::routeIs('pembelian', 'pembelian-create')) active @endif">
                <a class="nav-link" href="{{ route('pembelian') }}">
                    <i class="fas fa-money-check-alt"></i>
                    <span>Data Pembelian</span></a>
            </li>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                @yield('content')
            </div>

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Galih</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->



    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
</body>

</html>
