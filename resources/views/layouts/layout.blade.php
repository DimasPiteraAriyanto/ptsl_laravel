<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="base-url" content="{{ url('') }}">

    <title>@yield('title')</title>

    <!-- Favicon -->
    <link href="{{ asset(url('logo.png')) }}" rel="icon" type="image/png">
    <!-- Bootstrap -->
    <link href="{{ asset('dashboard/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('dashboard/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('dashboard/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('dashboard/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="{{ asset('dashboard/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('dashboard/vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('dashboard/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <!-- Custom Theme Style -->
    <link href="{{ asset('dashboard/build/css/custom.min.css') }}" rel="stylesheet">

    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('dashboard/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
    <!-- bootstrap-datetimepicker -->
    <link href="{{ asset('dashboard/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('dashboard/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <br/>
                    <div class="navbar nav_title" style="border: 0; text-align:center">
                        <h4 class="text-white font-weight-50 text-uppercase">Pelayanan Pertanahan<br>Desa Mandiri</h4>
                    </div>
                    <div class="clearfix"></div>
                    <br/>
                    <br/>
                    <!-- menu profile quick info -->
                    <div style="text-align: center; padding-right: 20px;">
                        <img src="{{asset('logo.png')}}" style="width: 100px; background-color: none !important; margin-left:15px;" alt="...">
                    </div>
                    <!-- /menu profile quick info -->
                    <br />
                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <ul class="nav side-menu">
                                <li>
                                    <a href="#"><i class="fa fa-home"></i> Beranda </a>
                                </li>
                                <li><a><i class="fa fa-edit"></i> Pendataan <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{url('/pengguna')}}">Data Pengguna</a></li>
                                        <li><a href="{{url('/datakab')}}">Data Kabupaten</a></li>
                                        <li><a href="{{url('/datakec')}}">Data Kecamatan</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-edit"></i> Panitia Ajudikasi </a>
                                </li>
                                <li><a><i class="fa fa-edit"></i> Data & Pemberkasan <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{url('/datadesa')}}">Data Desa</a></li>
                                        <li><a href="#">Data Proyek</a></li>
                                        <li><a href="#">Pendataan Penlok</a></li>
                                        <li><a href="#">Pemberkasan</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="menu_section">
                            <h3>Lainnya</h3>
                                <ul class="nav side-menu">
                                    <li><a href="#" onclick="return confirm('Apakah anda yakin?')"><i class="fa fa-sign-out"></i> Logout</a></li>
                                </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->
                </div>
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                    <ul class=" navbar-right">
                        <li class="nav-item dropdown open" style="padding-left: 15px;">
                            <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                Administrator
                            </a>
                            <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item"  href="javascript:;"> Profile</a>
                                <a class="dropdown-item"  href="javascript:;">
                                    <span class="badge bg-red pull-right">50%</span>
                                    <span>Settings</span>
                                </a>
                                <a class="dropdown-item"  href="javascript:;">Help</a>
                                <a class="dropdown-item"  href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            @yield('content')
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Version 0.0.1
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>

        <!-- jQuery -->
        <script src="{{ asset('dashboard/vendors/jquery/dist/jquery.min.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('dashboard/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
        <!-- FastClick -->
        <script src="{{ asset('dashboard/vendors/fastclick/lib/fastclick.js') }}"></script>
        <!-- NProgress -->
        <script src="{{ asset('dashboard/vendors/nprogress/nprogress.js') }}"></script>
        <!-- Chart.js -->
        <script src="{{ asset('dashboard/vendors/Chart.js/dist/Chart.min.js') }}"></script>
        <!-- gauge.js -->
        <script src="{{ asset('dashboard/vendors/gauge.js/dist/gauge.min.js') }}"></script>
        <!-- bootstrap-progressbar -->
        <script src="{{ asset('dashboard/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
        <!-- iCheck -->
        <script src="{{ asset('dashboard/vendors/iCheck/icheck.min.js') }}"></script>
        <!-- Skycons -->
        <script src="{{ asset('dashboard/vendors/skycons/skycons.js') }}"></script>
        <!-- Flot -->
        <script src="{{ asset('dashboard/vendors/Flot/jquery.flot.js') }}"></script>
        <script src="{{ asset('dashboard/vendors/Flot/jquery.flot.pie.js') }}"></script>
        <script src="{{ asset('dashboard/vendors/Flot/jquery.flot.time.js') }}"></script>
        <script src="{{ asset('dashboard/vendors/Flot/jquery.flot.stack.js') }}"></script>
        <script src="{{ asset('dashboard/vendors/Flot/jquery.flot.resize.js') }}"></script>
        <!-- Flot plugins -->
        <script src="{{ asset('dashboard/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
        <script src="{{ asset('dashboard/vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
        <script src="{{ asset('dashboard/vendors/flot.curvedlines/curvedLines.js') }}"></script>
        <!-- DateJS -->
        <script src="{{ asset('dashboard/vendors/DateJS/build/date.js') }}"></script>
        <!-- JQVMap -->
        <script src="{{ asset('dashboard/vendors/jqvmap/dist/jquery.vmap.js') }}"></script>
        <script src="{{ asset('dashboard/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
        <script src="{{ asset('dashboard/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
        <script type="text/javascript" src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <!-- bootstrap-daterangepicker -->
        <script src="{{ asset('dashboard/vendors/moment/min/moment.min.js') }}"></script>
        <script src="{{ asset('dashboard/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

        <!-- FastClick -->
        <script src="../vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="{{ asset('dashboard/vendors/nprogress/nprogress.js') }}"></script>
        <!-- jQuery Smart Wizard -->
        <script src="{{ asset('dashboard/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js') }}"></script>

        <!-- Custom Theme Scripts -->
        <script src="{{ asset('dashboard/build/js/custom.min.js') }}"></script>

        <!-- Select2 -->
        <script src="{{asset('dashboard/plugins/select2/js/select2.full.min.js')}}"></script>
        <!-- Select2 -->
        <script src="{{asset('dashboard/plugins/select2/js/select2.full.min.js')}}"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
        <!-- bootstrap-datetimepicker -->
        <script src="{{asset('dashboard/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}"></script>
        @yield('scripts')
</body>
</html>
