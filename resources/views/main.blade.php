<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>@yield('title')- Aplikasi ku</title>
        <meta content="Aplikasi Sistem informasi Penjualan" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
        <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


        <!-- Template Main CSS File -->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    </head>


    <body>

        <!-- ======= Header ======= -->
        <header class="header fixed-top d-flex align-items-center" id="header">
            <div class="d-flex align-items-center justify-content-between">
                <a class="logo d-flex align-items-center" href="/home">
                    <img alt="" src="{{ asset('assets/img/logo.png') }}">
                    <span class="d-none d-lg-block">Aplikasi Jual Barang</span>
                </a>
                <i class="bi bi-list toggle-sidebar-btn"></i>
            </div><!-- End Logo -->

            <nav class="header-nav ms-auto">
                <ul class="d-flex align-items-center">
                    <li class="nav-item d-block d-lg-none">
                        <a class="nav-link nav-icon search-bar-toggle " href="#">
                            <i class="bi bi-search"></i>
                        </a>
                    </li><!-- End Search Icon-->

                    <li class="nav-item dropdown pe-3">
                        <a class="nav-link nav-profile d-flex align-items-center pe-0" data-bs-toggle="dropdown"
                            href="#">
                            <img alt="Profile" class="rounded-circle" src="{{ asset('assets/img/profile-img.jpg') }}">
                            <span class="text-capitalize">{{ auth()->user()->name }}</span>
                        </a>
                    </li><!-- End Profile Nav -->
                </ul>
            </nav><!-- End Icons Navigation -->
        </header><!-- End Header -->



        <!-- ======= Sidebar ======= -->
        <aside class="sidebar" id="sidebar">
            <ul class="sidebar-nav" id="sidebar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="index.php">
                        <i class="bi bi-grid"></i>
                        <span>Dashboard</span>
                    </a>
                </li><!-- End Dashboard Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse"
                        href="#">
                        <i class="bi bi-menu-button-wide"></i><span>Components</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul class="nav-content collapse " data-bs-parent="#sidebar-nav" id="components-nav">
                        <li>
                            <a href="{{ url('jenis') }}">
                                <i class="bi bi-circle"></i><span>Jenis Barang</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('suplier') }}">
                                <i class="bi bi-circle"></i><span>Suplier</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('barang') }}">
                                <i class="bi bi-circle"></i><span>Barang</span>
                            </a>
                        </li>

                    </ul>
                </li><!-- End Components Nav -->
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-journal-text"></i><span>Transaksi</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul class="nav-content collapse " data-bs-parent="#sidebar-nav" id="forms-nav">
                        <li>
                            <a href="{{url('pembelian')}}">
                                <i class="bi bi-circle"></i><span>Pembelian</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('penjualan') }}">
                                <i class="bi bi-circle"></i><span>Penjualan</span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Forms Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-layout-text-window-reverse"></i><span>Laporan</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul class="nav-content collapse " data-bs-parent="#sidebar-nav" id="tables-nav">
                        <li>
                            <a href="./index.php?aksi=Laporan&xaksi=Daftar Barang&yaksi=1">
                                <i class="bi bi-circle"></i><span>Daftar Barang</span>
                            </a>
                        </li>
                        <li>
                            <a href="./index.php?aksi=Laporan&xaksi=Laporan Pembelian&yaksi=1">
                                <i class="bi bi-circle"></i><span>Laporan Pembelian</span>
                            </a>
                        </li>
                        <li>
                            <a href="./index.php?aksi=Laporan&xaksi=Laporan Penjualan&yaksi=1">
                                <i class="bi bi-circle"></i><span>Laporan Penjualan</span>
                            </a>
                        </li>

                        <li>
                            <a href="./index.php?aksi=Rekap&xaksi=Rekap Pembelian&yaksi=1">
                                <i class="bi bi-circle"></i><span>Rekap Data Pembelian</span>
                            </a>
                        </li>
                        <li>
                            <a href="./index.php?aksi=Rekap Penjualan&xaksi=Rekapitulasi Penjualan&yaksi=1">
                                <i class="bi bi-circle"></i><span>Rekap Data Penjualan</span>
                            </a>
                        </li>
                        <li>
                            <a href="./index.php?aksi=Grafik&xaksi=Grafik Penjualan&yaksi=1">
                                <i class="bi bi-circle"></i><span>Grafik Penjualan</span>
                            </a>
                        </li>

                    </ul>
                </li><!-- End Tables Nav -->

                
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse"
                        href="#">
                        <i class="bi bi-bar-chart"></i><span>Manajemen</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul class="nav-content collapse " data-bs-parent="#sidebar-nav" id="charts-nav">
                        <li>
                            <a href="./index.php?aksi=Manajemen&xaksi=Manajemen Password&yaksi=1">
                                <i class="bi bi-circle"></i><span>Ubah Password</span>
                            </a>
                        </li>
                        @if (Auth::user()->level_akses == 3
                        )
                        <li>
                            <a href="{{ url('pengguna') }}">
                                <i class="bi bi-circle"></i><span>Manajemen Akun</span>
                            </a>
                        </li>
                        @endif
                    </ul>
                </li><!-- End Charts Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('logout') }}">
                        <i class="bi bi-box-arrow-in-right"></i>
                        <span>Logout</span>
                    </a>
                </li>
        </aside><!-- End Sidebar-->



        {{-- <main id="main" class="main">   --}}
        @yield('breadcrumbs')
        {{-- </main>  --}}


        <!-- ======= Footer ======= -->
        <footer class="footer" id="footer">
            <div class="copyright">
                &copy; Copyright <strong><span>2023</span></strong>. All Rights Reserved
            </div>
            <div class="credits"> Designed by <a href="">Ariantonius S</a>
            </div>
        </footer>

        <a class="back-to-top d-flex align-items-center justify-content-center" href="#"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" crossorigin="anonymous"></script>
        <script>
            $('#alert').removeClass('d-none');
            setTimeout(() => {
                $('.alert').alert('close');
            }, 5000);
        </script>


        <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/chart.js/chart.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
        <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>



        <!-- Template Main JS File -->
        <script src="{{ asset('assets/js/main.js') }}"></script>



    </body>

</html>
