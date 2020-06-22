<?php include 'layouts/header.php'; ?>
<link href="public/plugins/bootstrap-rating/bootstrap-rating.css" rel="stylesheet" type="text/css">

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
                                    <h3 class="page-title">Rating</h3>
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

                                            <div class="row">
                                                <div class="col-xl-3 col-md-4">
                                                    <div class="p-4 text-center">
                                                        <h5 class="font-16 m-b-15">Default rating</h5>
                                                        <input type="hidden" class="rating" data-filled="mdi mdi-star font-32 text-primary" data-empty="mdi mdi-star-outline font-32 text-muted"/>
                                                    </div>
                                                </div>

                                                <div class="col-xl-3 col-md-4">
                                                    <div class="p-4 text-center">
                                                        <h5 class="font-16 m-b-15">Half rating</h5>
                                                        <input type="hidden" class="rating" data-filled="mdi mdi-star font-32 text-primary" data-empty="mdi mdi-star-outline font-32 text-primary" data-fractions="2"/>
                                                    </div>
                                                </div>

                                                <div class="col-xl-3 col-md-4">
                                                    <div class="p-4 text-center">
                                                        <h5 class="font-16 m-b-15">Disabled rating</h5>
                                                        <input type="hidden" class="rating" data-filled="mdi mdi-star font-32 text-primary" data-empty="mdi mdi-star-outline font-32 text-muted" disabled="disabled"/>
                                                    </div>
                                                </div>

                                                <div class="col-xl-3 col-md-4">
                                                    <div class="p-4 text-center">
                                                        <h5 class="font-16 m-b-15">Readonly rating with a value</h5>
                                                        <input type="hidden" class="rating" data-filled="mdi mdi-star font-32 text-primary" data-empty="mdi mdi-star-outline font-32 text-muted" data-readonly value="3"/>
                                                    </div>
                                                </div>

                                                <div class="col-xl-3 col-md-4">
                                                    <div class="p-4 text-center">
                                                        <h5 class="font-16 m-b-15">Customized heart rating</h5>
                                                        <input type="hidden" class="rating" data-filled="mdi mdi-heart font-32 text-danger" data-empty="mdi mdi-heart-outline font-32 text-danger"/>
                                                    </div>
                                                </div>

                                                <div class="col-xl-3 col-md-4">
                                                    <div class="p-4 text-center">
                                                        <h5 class="font-16 m-b-15">Only fill selected</h5>
                                                        <input type="hidden" class="rating" data-filled="mdi mdi-star-outline font-32 text-primary" data-empty="mdi mdi-star-outline font-32 text-primary" data-filled-selected="mdi mdi-star font-32 text-primary"/>
                                                    </div>
                                                </div>

                                                <div class="col-xl-3 col-md-4">
                                                    <div class="p-4 text-center">
                                                        <h5 class="font-16 m-b-15">Handle events</h5>
                                                        <input type="hidden" class="rating check" data-filled="mdi mdi-star font-32 text-primary" data-empty="mdi mdi-star-outline font-32 text-muted"/>
                                                    </div>
                                                </div>

                                                <div class="col-xl-3 col-md-4">
                                                    <div class="p-4 text-center">
                                                        <h5 class="font-16 m-b-15">Customize tooltips</h5>
                                                        <input type="hidden" class="rating-tooltip" data-filled="mdi mdi-star font-32 text-primary" data-empty="mdi mdi-star-outline font-32 text-muted"/>
                                                    </div>
                                                </div>

                                                <div class="col-xl-3 col-md-4">
                                                    <div class="p-4 text-center">
                                                        <h5 class="font-16 m-b-15">Default rating</h5>
                                                        <input type="hidden" class="rating-tooltip" data-stop="10" data-filled="mdi mdi-star font-32 text-primary" data-empty="mdi mdi-star-outline font-32 text-muted"/>
                                                    </div>
                                                </div>

                                                <div class="col-xl-3 col-md-4">
                                                    <div class="p-4 text-center">
                                                        <h5 class="font-16 m-b-15">Set start rate to 5 [6..10]</h5>
                                                        <input type="hidden" class="rating-tooltip" data-start="5" data-filled="mdi mdi-star font-32 text-primary" data-empty="mdi mdi-star-outline font-32 text-muted"/>
                                                    </div>
                                                </div>

                                                <div class="col-xl-3 col-md-4">
                                                    <div class="p-4 text-center">
                                                        <h5 class="font-16 m-b-15">Set start and stop rate [2..10]</h5>
                                                        <input type="hidden" class="rating-tooltip" data-start="1" data-stop="10" data-filled="mdi mdi-star font-32 text-primary" data-empty="mdi mdi-star-outline font-32 text-muted"/>
                                                    </div>
                                                </div>

                                                <div class="col-xl-3 col-md-4">
                                                    <div class="p-4 text-center">
                                                        <h5 class="font-16 m-b-15">Set start and stop rate [2..10] with step 2</h5>
                                                        <input type="hidden" class="rating-tooltip" data-stop="10" data-step="2" data-filled="mdi mdi-star font-32 text-primary" data-empty="mdi mdi-star-outline font-32 text-muted"/>
                                                    </div>
                                                </div>

                                                <div class="col-xl-3 col-md-4">
                                                    <div class="p-4 text-center">
                                                        <h5 class="font-16 m-b-15">Custom icons</h5>
                                                        <input type="hidden" class="rating" data-filled="mdi mdi-checkbox-marked font-32 text-primary" data-empty="mdi mdi-checkbox-blank-outline font-32 text-muted"/>
                                                    </div>
                                                </div>

                                                <div class="col-xl-3 col-md-4">
                                                    <div class="p-4 text-center">
                                                        <h5 class="font-16 m-b-15">Fractional rating</h5>
                                                        <input type="hidden" class="rating-tooltip-manual" data-fractions="3" data-filled="mdi mdi-star font-32 text-primary" data-empty="mdi mdi-star-outline font-32 text-muted"/>
                                                    </div>
                                                </div>

                                                <div class="col-xl-3 col-md-4">
                                                    <div class="p-4 text-center">
                                                        <h5 class="font-16 m-b-15">Custom CSS icons</h5>
                                                        <input type="hidden" class="rating" data-filled="symbol symbol-filled" data-empty="symbol symbol-empty" data-fractions="2"/>
                                                    </div>
                                                </div>

                                            </div>
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
       
        <!-- Bootstrap rating js -->
        <script src="public/plugins/bootstrap-rating/bootstrap-rating.min.js"></script>
        <script src="public/assets/pages/rating-init.js"></script>

        <!-- App js -->
        <script src="public/assets/js/app.js"></script>

    </body>
</html>