<?php include 'layouts/header.php'; ?>

        <!-- C3 charts css -->
        <link href="../plugins/c3/c3.min.css" rel="stylesheet" type="text/css" />

<?php include 'layouts/headerStyle.php'; ?> 
    
    <body class="fixed-left">

        <?php include 'layouts/loader.php'; ?>

        <!-- Begin page -->
        <div id="wrapper">

            <?php include 'layouts/navbar.php'; ?>

            <!-- Start right Content here -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    <div class="topbar">

                        <nav class="navbar-custom">
                            <!-- Search input -->
                            <div class="search-wrap" id="search-wrap">
                                <div class="search-bar">
                                    <input class="search-input" type="search" placeholder="Search" />
                                    <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                                        <i class="mdi mdi-close-circle"></i>
                                    </a>
                                </div>
                            </div>

                            <ul class="list-inline float-right mb-0">
                                <!-- Search -->
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link waves-effect toggle-search" href="#"  data-target="#search-wrap">
                                        <i class="mdi mdi-magnify noti-icon"></i>
                                    </a>
                                </li>
                                <!-- Fullscreen -->
                                <li class="list-inline-item dropdown notification-list hidden-xs-down">
                                    <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                                        <i class="mdi mdi-fullscreen noti-icon"></i>
                                    </a>
                                </li>
                                <!-- language-->
                                <li class="list-inline-item dropdown notification-list hidden-xs-down">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect text-muted" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        English <img src="public/assets/images/flags/us_flag.jpg" class="ml-2" height="16" alt=""/>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right language-switch">
                                        <a class="dropdown-item" href="#"><img src="public/assets/images/flags/germany_flag.jpg" alt="" height="16"/><span> German </span></a>
                                        <a class="dropdown-item" href="#"><img src="public/assets/images/flags/italy_flag.jpg" alt="" height="16"/><span> Italian </span></a>
                                        <a class="dropdown-item" href="#"><img src="public/assets/images/flags/french_flag.jpg" alt="" height="16"/><span> French </span></a>
                                        <a class="dropdown-item" href="#"><img src="public/assets/images/flags/spain_flag.jpg" alt="" height="16"/><span> Spanish </span></a>
                                        <a class="dropdown-item" href="#"><img src="public/assets/images/flags/russia_flag.jpg" alt="" height="16"/><span> Russian </span></a>
                                    </div>
                                </li>
                                <!-- notification-->
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <i class="ion-ios7-bell noti-icon"></i>
                                        <span class="badge badge-danger noti-icon-badge">3</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h5>Notification (3)</h5>
                                        </div>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                            <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                            <p class="notify-details"><b>Your order is placed</b><small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                                            <p class="notify-details"><b>New Message received</b><small class="text-muted">You have 87 unread messages</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info"><i class="mdi mdi-martini"></i></div>
                                            <p class="notify-details"><b>Your item is shipped</b><small class="text-muted">It is a long established fact that a reader will</small></p>
                                        </a>

                                        <!-- All-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            View All
                                        </a>

                                    </div>
                                </li>
                                <!-- User-->
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <img src="public/assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                        <a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> Profile</a>
                                        <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted"></i> My Wallet</a>
                                        <a class="dropdown-item" href="#"><span class="badge badge-success pull-right m-t-5">5</span><i class="dripicons-gear text-muted"></i> Settings</a>
                                        <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted"></i> Lock screen</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#"><i class="dripicons-exit text-muted"></i> Logout</a>
                                    </div>
                                </li>
                            </ul>

                            <!-- Page title -->
                            <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="ion-navicon"></i>
                                    </button>
                                </li>
                                <li class="hide-phone list-inline-item app-search">
                                    <h3 class="page-title">Widgets</h3>
                                </li>
                            </ul>

                            <div class="clearfix"></div>
                        </nav>

                    </div>
                    <!-- Top Bar End -->

                    <!-- ==================
                         PAGE CONTENT START
                         ================== -->

                    <div class="page-content-wrapper">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-md-6 col-xl-3">
                                    <div class="mini-stat clearfix bg-white">
                                        <span class="mini-stat-icon bg-primary"><i class="mdi mdi-cart-outline"></i></span>
                                        <div class="mini-stat-info text-right">
                                            <span class="counter text-primary">15852</span>
                                            Total Sales
                                        </div>
                                        <div class="clearfix"></div>
                                        <p class=" mb-0 m-t-20 text-muted">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="mini-stat clearfix bg-white">
                                        <span class="mini-stat-icon bg-success"><i class="mdi mdi-currency-usd"></i></span>
                                        <div class="mini-stat-info text-right">
                                            <span class="counter text-success">956</span>
                                            New Orders
                                        </div>
                                        <div class="clearfix"></div>
                                        <p class="text-muted mb-0 m-t-20">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="mini-stat clearfix bg-white">
                                        <span class="mini-stat-icon bg-warning"><i class="mdi mdi-cube-outline"></i></span>
                                        <div class="mini-stat-info text-right">
                                            <span class="counter text-warning">5210</span>
                                            New Users
                                        </div>
                                        <div class="clearfix"></div>
                                        <p class="text-muted mb-0 m-t-20">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="mini-stat clearfix bg-white">
                                        <span class="mini-stat-icon bg-pink"><i class="mdi mdi-currency-btc"></i></span>
                                        <div class="mini-stat-info text-right">
                                            <span class="counter text-pink">20544</span>
                                            Unique Visitors
                                        </div>
                                        <div class="clearfix"></div>
                                        <p class="text-muted mb-0 m-t-20">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6 col-xl-3">
                                    <div class="mini-stat clearfix bg-white">
                                        <span class="mini-stat-icon bg-purple mr-0 float-right"><i class="mdi mdi-basket"></i></span>
                                        <div class="mini-stat-info">
                                            <span class="counter text-purple">25140</span>
                                            Total Sales
                                        </div>
                                        <div class="clearfix"></div>
                                        <p class=" mb-0 m-t-20 text-muted">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="mini-stat clearfix bg-white">
                                        <span class="mini-stat-icon bg-blue-grey mr-0 float-right"><i class="mdi mdi-black-mesa"></i></span>
                                        <div class="mini-stat-info">
                                            <span class="counter text-blue-grey">65241</span>
                                            New Orders
                                        </div>
                                        <div class="clearfix"></div>
                                        <p class="text-muted mb-0 m-t-20">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="mini-stat clearfix bg-white">
                                        <span class="mini-stat-icon bg-brown mr-0 float-right"><i class="mdi mdi-buffer"></i></span>
                                        <div class="mini-stat-info">
                                            <span class="counter text-brown">85412</span>
                                            New Users
                                        </div>
                                        <div class="clearfix"></div>
                                        <p class="text-muted mb-0 m-t-20">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="mini-stat clearfix bg-white">
                                        <span class="mini-stat-icon bg-teal mr-0 float-right"><i class="mdi mdi-coffee"></i></span>
                                        <div class="mini-stat-info">
                                            <span class="counter text-teal">20544</span>
                                            Unique Visitors
                                        </div>
                                        <div class="clearfix"></div>
                                        <p class="text-muted mb-0 m-t-20">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6 col-xl-3">
                                    <div class="mini-stat widget-chart-sm clearfix bg-white">
                                        <span class="peity-donut float-left" data-peity='{ "fill": ["#3bc3e9", "#f2f2f2"], "innerRadius": 23, "radius": 32 }' data-width="60" data-height="60">226,134</span>
                                        <div class="mini-stat-info text-right">
                                            <span class="counter text-info">9541</span>
                                            Total Sales
                                        </div>
                                        <div class="clearfix"></div>
                                        <p class=" mb-0 m-t-20 text-muted">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="mini-stat widget-chart-sm clearfix bg-white">
                                        <span class="peity-pie float-left" data-peity='{ "fill": ["#afb42b", "#f2f2f2"]}' data-width="60" data-height="60">0.52/1.561</span>
                                        <div class="mini-stat-info text-right">
                                            <span class="counter text-lime">36521</span>
                                            New Orders
                                        </div>
                                        <div class="clearfix"></div>
                                        <p class="text-muted mb-0 m-t-20">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="mini-stat widget-chart-sm clearfix bg-white">
                                        <span class="peity-donut float-left" data-peity='{ "fill": ["#ea553d", "#f2f2f2"], "innerRadius": 23, "radius": 32 }' data-width="60" data-height="60">520,134</span>
                                        <div class="mini-stat-info text-right">
                                            <span class="counter text-danger">6521</span>
                                            New Users
                                        </div>
                                        <div class="clearfix"></div>
                                        <p class="text-muted mb-0 m-t-20">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="mini-stat widget-chart-sm clearfix bg-white">
                                        <span class="peity-pie float-left" data-peity='{ "fill": ["#1d1e3a", "#f2f2f2"]}' data-width="60" data-height="60">230,134</span>
                                        <div class="mini-stat-info text-right">
                                            <span class="counter text-dark">1002</span>
                                            Unique Visitors
                                        </div>
                                        <div class="clearfix"></div>
                                        <p class="text-muted mb-0 m-t-20">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6 col-xl-3">
                                    <div class="mini-stat clearfix bg-white">
                                        <span class="font-40 text-pink mr-0 float-right"><i class="ti-truck"></i></span>
                                        <div class="mini-stat-info">
                                            <h3 class="counter font-light mt-0">362410</h3>
                                        </div>
                                        <div class="clearfix"></div>
                                        <p class=" mb-0 m-t-10 text-muted">Total income: $56210 <span class="pull-right"><i class="fa fa-caret-down m-r-5"></i>3.25%</span></p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="mini-stat clearfix bg-white">
                                        <span class="font-40 text-orange mr-0 float-right"><i class="ti-comments"></i></span>
                                        <div class="mini-stat-info">
                                            <h3 class="counter font-light mt-0">89510</h3>
                                        </div>
                                        <div class="clearfix"></div>
                                        <p class=" mb-0 m-t-10 text-muted">Total income: $56210 <span class="pull-right"><i class="fa fa-caret-down m-r-5"></i>3.25%</span></p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="mini-stat clearfix bg-white">
                                        <span class="font-40 text-indigo mr-0 float-right"><i class="ti-briefcase"></i></span>
                                        <div class="mini-stat-info">
                                            <h3 class="counter font-light mt-0">55620</h3>
                                        </div>
                                        <div class="clearfix"></div>
                                        <p class=" mb-0 m-t-10 text-muted">Total income: $56210 <span class="pull-right"><i class="fa fa-caret-down m-r-5"></i>3.25%</span></p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="mini-stat clearfix bg-white">
                                        <span class="font-40 text-brown mr-0 float-right"><i class="ti-wallet"></i></span>
                                        <div class="mini-stat-info">
                                            <h3 class="counter font-light mt-0">320101</h3>
                                        </div>
                                        <div class="clearfix"></div>
                                        <p class=" mb-0 m-t-10 text-muted">Total income: $56210 <span class="pull-right"><i class="fa fa-caret-down m-r-5"></i>3.25%</span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card m-b-20">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title m-b-30">Revenue (This Month)</h4>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="mini-stat clearfix bg-white">
                                                        <div class="mini-stat-info">
                                                            <span class="counter text-purple">25140</span>
                                                            Total Sales
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <p class=" mb-0 m-t-20 text-muted">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p>
                                                    </div>

                                                    <div class="mini-stat clearfix mb-0 bg-white">
                                                        <div class="mini-stat-info">
                                                            <span class="counter text-purple">25140</span>
                                                            Total Sales
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <p class=" mb-0 m-t-20 text-muted">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p>
                                                    </div>

                                                </div>
                                                <div class="col-sm-6">
                                                    <div id="donut-chart"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4">
                                    <div class="card m-b-20">
                                        <div class="card-body">
                                            <!-- Start Profile Widget -->
                                            <div class="profile-widget text-center">
                                                <img src="public/assets/images/users/avatar-2.jpg" class="thumb-lg rounded-circle img-thumbnail" alt="img">
                                                <h5>Jonathan Doe</h5>
                                                <p><i class="fa fa-map-marker"></i> London</p>

                                                <p class="text-muted">Lorem ipsum dolor sit ametetur adipisicing elit,
                                                    sed do eiusmod tempor incididunt adipisicing elit.</p>
                                                <a href="#" class="btn btn-sm btn-purple m-t-20">Follow</a>
                                                <ul class="list-inline row m-t-20 clearfix">
                                                    <li class="col-md-4">
                                                        <p class="m-b-5 font-18 font-600">23514</p>
                                                        <p class="mb-0">Followers</p>
                                                    </li>
                                                    <li class="col-md-4">
                                                        <p class="m-b-5 font-18 font-600">2510</p>
                                                        <p class="mb-0">Photos</p>
                                                    </li>
                                                    <li class="col-md-4">
                                                        <p class="m-b-5 font-18 font-600">68541</p>
                                                        <p class="mb-0">Like</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- End Profile Widget -->
                                        </div>
                                    </div>
                                </div>


                                <div class="col-xl-3">
                                    <div class="card m-b-20">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title m-b-30">Revenue (This Month)</h4>

                                            <div class="text-center">
                                                <input class="knob" data-width="150" data-height="150" data-linecap=round
                                                       data-fgColor="#ffbb44" value="80" data-skin="tron" data-angleOffset="180"
                                                       data-readOnly=true data-thickness=".1"/>

                                                <div class="clearfix"></div>
                                                <a href="#" class="btn btn-success m-t-20">View All Data</a>
                                                <ul class="list-inline row m-t-30 clearfix">
                                                    <li class="col-6">
                                                        <p class="m-b-5 font-18 font-600">95412</p>
                                                        <p class="mb-0">Followers</p>
                                                    </li>
                                                    <li class="col-6">
                                                        <p class="m-b-5 font-18 font-600">12030</p>
                                                        <p class="mb-0">Like</p>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <?php include 'layouts/footer.php'; ?>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->

        <?php include 'layouts/footerScript.php'; ?>
        
        <!-- Peity chart JS -->
        <script src="public/plugins/peity-chart/jquery.peity.min.js"></script>
        <!--C3 Chart-->
        <script src="public/plugins/d3/d3.min.js"></script>
        <script src="public/plugins/c3/c3.min.js"></script>
        <!-- KNOB JS -->
        <script src="public/plugins/jquery-knob/excanvas.js"></script>
        <script src="public/plugins/jquery-knob/jquery.knob.js"></script>

        <!-- Widget init JS -->
        <script src="public/assets/pages/widget-init.js"></script>

        <!-- App js -->
        <script src="public/assets/js/app.js"></script>

    </body>
</html>