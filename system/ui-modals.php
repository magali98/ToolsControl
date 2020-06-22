<?php include 'layouts/header.php'; ?>

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="../plugins/morris/morris.css">

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
                                    <h3 class="page-title">Modals</h3>
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

                                            <h4 class="mt-0 header-title">Modals Examples</h4>
                                            <p class="text-muted m-b-30 font-14">Modals are streamlined, but flexible
                                                dialog prompts powered by JavaScript. They support a number of use cases
                                                from user notification to completely custom content and feature a
                                                handful of helpful subcomponents, sizes, and more.</p>

                                            <div class="modal bs-example-modal" tabindex="-1" role="dialog">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title mt-0">Modal title</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>One fine body&hellip;</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->


                                            <div class="row">

                                                <div class="col-md-4 m-t-30">
                                                    <div class=" text-center">
                                                        <p class="text-muted">Standard modal</p>
                                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#myModal">Standard modal</button>
                                                    </div>

                                                    <!-- sample modal content -->
                                                    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title mt-0" id="myModalLabel">Modal Heading</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5>Overflowing text to show scroll behavior</h5>
                                                                    <p>Cras mattis consectetur purus sit amet fermentum.
                                                                        Cras justo odio, dapibus ac facilisis in,
                                                                        egestas eget quam. Morbi leo risus, porta ac
                                                                        consectetur ac, vestibulum at eros.</p>
                                                                    <p>Praesent commodo cursus magna, vel scelerisque
                                                                        nisl consectetur et. Vivamus sagittis lacus vel
                                                                        augue laoreet rutrum faucibus dolor auctor.</p>
                                                                    <p>Aenean lacinia bibendum nulla sed consectetur.
                                                                        Praesent commodo cursus magna, vel scelerisque
                                                                        nisl consectetur et. Donec sed odio dui. Donec
                                                                        ullamcorper nulla non metus auctor
                                                                        fringilla.</p>
                                                                    <p>Cras mattis consectetur purus sit amet fermentum.
                                                                        Cras justo odio, dapibus ac facilisis in,
                                                                        egestas eget quam. Morbi leo risus, porta ac
                                                                        consectetur ac, vestibulum at eros.</p>
                                                                    <p>Praesent commodo cursus magna, vel scelerisque
                                                                        nisl consectetur et. Vivamus sagittis lacus vel
                                                                        augue laoreet rutrum faucibus dolor auctor.</p>
                                                                    <p>Aenean lacinia bibendum nulla sed consectetur.
                                                                        Praesent commodo cursus magna, vel scelerisque
                                                                        nisl consectetur et. Donec sed odio dui. Donec
                                                                        ullamcorper nulla non metus auctor
                                                                        fringilla.</p>
                                                                    <p>Cras mattis consectetur purus sit amet fermentum.
                                                                        Cras justo odio, dapibus ac facilisis in,
                                                                        egestas eget quam. Morbi leo risus, porta ac
                                                                        consectetur ac, vestibulum at eros.</p>
                                                                    <p>Praesent commodo cursus magna, vel scelerisque
                                                                        nisl consectetur et. Vivamus sagittis lacus vel
                                                                        augue laoreet rutrum faucibus dolor auctor.</p>
                                                                    <p>Aenean lacinia bibendum nulla sed consectetur.
                                                                        Praesent commodo cursus magna, vel scelerisque
                                                                        nisl consectetur et. Donec sed odio dui. Donec
                                                                        ullamcorper nulla non metus auctor
                                                                        fringilla.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                                                                </div>
                                                            </div><!-- /.modal-content -->
                                                        </div><!-- /.modal-dialog -->
                                                    </div><!-- /.modal -->
                                                </div>

                                                <div class="col-md-4 m-t-30">
                                                    <div class="text-center">
                                                        <p class="text-muted">Large modal</p>
                                                        <!-- Large modal -->
                                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>
                                                    </div>


                                                    <!--  Modal content for the above example -->
                                                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Large modal</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Cras mattis consectetur purus sit amet fermentum.
                                                                        Cras justo odio, dapibus ac facilisis in,
                                                                        egestas eget quam. Morbi leo risus, porta ac
                                                                        consectetur ac, vestibulum at eros.</p>
                                                                    <p>Praesent commodo cursus magna, vel scelerisque
                                                                        nisl consectetur et. Vivamus sagittis lacus vel
                                                                        augue laoreet rutrum faucibus dolor auctor.</p>
                                                                    <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.
                                                                        Praesent commodo cursus magna, vel scelerisque
                                                                        nisl consectetur et. Donec sed odio dui. Donec
                                                                        ullamcorper nulla non metus auctor
                                                                        fringilla.</p>
                                                                </div>
                                                            </div><!-- /.modal-content -->
                                                        </div><!-- /.modal-dialog -->
                                                    </div><!-- /.modal -->
                                                </div>

                                                <div class="col-md-4 m-t-30">
                                                    <div class="text-center">
                                                        <p class="text-muted">Small modal</p>
                                                        <!-- Small modal -->
                                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>
                                                    </div>

                                                    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-sm">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title mt-0" id="mySmallModalLabel">Small modal</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Cras mattis consectetur purus sit amet fermentum.
                                                                        Cras justo odio, dapibus ac facilisis in,
                                                                        egestas eget quam. Morbi leo risus, porta ac
                                                                        consectetur ac, vestibulum at eros.</p>
                                                                    <p>Praesent commodo cursus magna, vel scelerisque
                                                                        nisl consectetur et. Vivamus sagittis lacus vel
                                                                        augue laoreet rutrum faucibus dolor auctor.</p>
                                                                    <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.
                                                                        Praesent commodo cursus magna, vel scelerisque
                                                                        nisl consectetur et. Donec sed odio dui. Donec
                                                                        ullamcorper nulla non metus auctor
                                                                        fringilla.</p>
                                                                </div>
                                                            </div><!-- /.modal-content -->
                                                        </div><!-- /.modal-dialog -->
                                                    </div><!-- /.modal -->
                                                </div>

                                            </div> <!-- end row -->


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

        <!-- App js -->
        <script src="public/assets/js/app.js"></script>

    </body>
</html>