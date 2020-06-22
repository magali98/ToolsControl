<?php include 'layouts/header.php'; ?>
<!-- Sweet Alert -->
<link href="public/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">

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
                                    <h3 class="page-title">Sweet Alert</h3>
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
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Examples</h4>
                                            <p class="text-muted m-b-30 font-14">A beautiful, responsive, customizable
                                                and accessible (WAI-ARIA) replacement for JavaScript's popup boxes. Zero
                                                dependencies.</p>

                                            <div class="row text-center">
                                                <div class="col-xl-3 col-md-4 m-b-30">
                                                    <p class="text-muted">A basic message</p>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-basic">Click me</button>
                                                </div>
                                                <div class="col-xl-3 col-md-4 m-b-30">
                                                    <p class="text-muted">A title with a text under</p>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-title">Click me</button>
                                                </div>
                                                <div class="col-xl-3 col-md-4 m-b-30">
                                                    <p class="text-muted">A success message!</p>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-success">Click me</button>
                                                </div>
                                                <div class="col-xl-3 col-md-4 m-b-30">
                                                    <p class="text-muted">A warning message, with a function attached to the "Confirm"-button...</p>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-warning">Click me</button>
                                                </div>

                                                <div class="col-xl-3 col-md-4 m-b-30">
                                                    <p class="text-muted">By passing a parameter, you can execute something else for "Cancel".</p>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-params">Click me</button>
                                                </div>
                                                <div class="col-xl-3 col-md-4 m-b-30">
                                                    <p class="text-muted">A message with custom Image Header</p>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-image">Click me</button>
                                                </div>
                                                <div class="col-xl-3 col-md-4 m-b-30">
                                                    <p class="text-muted">A message with auto close timer</p>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-close">Click me</button>
                                                </div>
                                                <div class="col-xl-3 col-md-4 m-b-30">
                                                    <p class="text-muted">Custom HTML description and buttons</p>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" id="custom-html-alert">Click me</button>
                                                </div>
                                                <div class="col-xl-3 col-md-4 m-b-30">
                                                    <p class="text-muted">A message with custom width, padding and background</p>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" id="custom-padding-width-alert">Click me</button>
                                                </div>
                                                <div class="col-xl-3 col-md-4 m-b-30">
                                                    <p class="text-muted">Ajax request example</p>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" id="ajax-alert">Click me</button>
                                                </div>
                                                <div class="col-xl-3 col-md-4 m-b-30">
                                                    <p class="text-muted">Chaining modals (queue) example</p>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" id="chaining-alert">Click me</button>
                                                </div>
                                                <div class="col-xl-3 col-md-4 m-b-30">
                                                    <p class="text-muted">Dynamic queue example</p>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" id="dynamic-alert">Click me</button>
                                                </div>

                                            </div> <!-- end row -->

                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <?php include 'layouts/footer.php'; ?>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->

        <?php include 'layouts/footerScript.php'; ?>
       
        <!-- Sweet-Alert  -->
        <script src="public/plugins/sweet-alert2/sweetalert2.all.min.js"></script>
        <script src="public/assets/pages/sweet-alert.init.js"></script>

        <!-- App js -->
        <script src="public/assets/js/app.js"></script>

    </body>
</html>