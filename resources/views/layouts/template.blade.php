<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Zoter - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

        <!-- jvectormap -->
        <link href="{{asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet">
        <link href="{{asset('assets/plugins/fullcalendar/vanillaCalendar.css')}}" rel="stylesheet" type="text/css"  />
        
        {{-- morris --}}
        <link href="{{asset('assets/plugins/morris/morris.css')}}" rel="stylesheet">

        {{-- datatables --}}
        <!-- DataTables -->
        <link href="{{asset('assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{asset('assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" /> 

        {{-- modals --}}
        <link href="{{asset('assets/plugins/animate/animate.css')}}" rel="stylesheet" type="text/css">

        <!-- Dropzone css -->
        <link href="{{asset('assets/plugins/dropzone/dist/dropzone.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/plugins/dropify/css/dropify.min.css')}}" rel="stylesheet">

        {{-- bootstrap --}}
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                    <i class="ion-close"></i>
                </button>

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <!--<a href="index.html" class="logo"><i class="mdi mdi-assistant"></i>Zoter</a>-->
                        <a href="index.html" class="logo">
                            <h4 class="logo-large m-0">Inventory</h4>
                        </a>
                    </div>
                </div>

                <div class="sidebar-inner niceScrollleft">

                    @include('layouts.menu')

                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    <div class="topbar">

                        <nav class="navbar-custom">

                            <ul class="list-inline float-right mb-0">

                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <i class="ti-bell noti-icon"></i>
                                        <span class="badge badge-success noti-icon-badge">23</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h5><span class="badge badge-danger float-right">87</span>Informasi</h5>
                                        </div>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                            <p class="notify-details"><b>Your order is placed</b><small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-success"><i class="mdi mdi-message"></i></div>
                                            <p class="notify-details"><b>New Message received</b><small class="text-muted">You have 87 unread messages</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-warning"><i class="mdi mdi-martini"></i></div>
                                            <p class="notify-details"><b>Your item is shipped</b><small class="text-muted">It is a long established fact that a reader will</small></p>
                                        </a>

                                        <!-- All-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            View All
                                        </a>

                                    </div>
                                </li>

                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h5>Nama User</h5>
                                        </div>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                        
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                    </div>
                                </li>

                            </ul>

                            <ul class="list-inline menu-left mb-0">
                                <li class="float-left">
                                    <button class="button-menu-mobile open-left waves-light waves-effect">
                                        <i class="mdi mdi-menu"></i>
                                    </button>
                                </li>                                
                            </ul>

                            <div class="clearfix"></div>

                        </nav>

                    </div>
                    <!-- Top Bar End -->

                    <div class="page-content-wrapper ">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <div class="btn-group float-right">
                                            <ol class="breadcrumb hide-phone p-0 m-0">
                                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                                <li class="breadcrumb-item active">@yield('page-title')</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">@yield('page-title')</h4>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- end page title end breadcrumb -->

                            {{-- content setiap halaman --}}
                            @yield('content')
                            {{-- end content setiap halaman --}}                                         
                            
                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                    © 2019 Zoter by Mannatthemes.
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/popper.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/modernizr.min.js')}}"></script>
        <script src="{{asset('assets/js/detect.js')}}"></script>
        <script src="{{asset('assets/js/fastclick.js')}}"></script>
        <script src="{{asset('assets/js/jquery.blockUI.js')}}"></script>
        <script src="{{asset('assets/js/waves.js')}}"></script>
        <script src="{{asset('assets/js/jquery.nicescroll.js')}}"></script>

        <script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
        <script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
        
        <script src="{{asset('assets/plugins/skycons/skycons.min.js')}}"></script>
        <script src="{{asset('assets/plugins/fullcalendar/vanillaCalendar.js')}}"></script>
        
        <script src="{{asset('assets/plugins/raphael/raphael-min.js')}}"></script>
        <script src="{{asset('assets/plugins/morris/morris.min.js')}}"></script> 
         
        <script src="{{asset('assets/pages/dashborad.js')}}"></script>

        <!-- Required datatable js -->
        <script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
        <!-- Buttons examples -->
        <script src="{{asset('assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatables/jszip.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatables/pdfmake.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatables/vfs_fonts.js')}}"></script>
        <script src="{{asset('assets/plugins/datatables/buttons.html5.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatables/buttons.print.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatables/buttons.colVis.min.js')}}"></script>
        <!-- Responsive examples -->
        <script src="{{asset('assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>
 
        <!-- Datatable init js -->
        <script src="{{asset('assets/pages/datatables.init.js')}}"></script>

        <!-- modals -->
        <script src="{{asset('assets/pages/modal-animation.init.js')}}"></script>

        <!-- Dropzone js -->
        <script src="{{asset('assets/plugins/dropzone/dist/dropzone.js')}}"></script>
        <script src="{{asset('assets/plugins/dropify/js/dropify.min.js')}}"></script>
        <script src="{{asset('assets/pages/upload.init.js')}}"></script> 

        <!-- App js -->
        <script src="{{asset('assets/js/app.js')}}"></script>

    </body>
</html>