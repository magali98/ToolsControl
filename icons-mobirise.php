<?php include 'layouts/header.php'; ?>

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
                                    <h3 class="page-title">Mobirise Icons</h3>
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
                                            <p class="text-muted m-b-30 font-14">Use <code>&lt;i
                                                class="mbri-mobirise"&gt;&lt;/i&gt;</code>.
                                            </p>

                                            <div class="row icon-demo-content">
                                                <div class="col-12">
                                                    <h6 class="m-b-20">Mobile-friendly</h6>
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-mobirise"></i> mbri-mobirise
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-mobile"></i> mbri-mobile
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-mobile2"></i> mbri-mobile2
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-tablet"></i> mbri-tablet
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-tablet-vertical"></i> mbri-tablet-vertical
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-watch"></i> mbri-watch
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-devices"></i> mbri-devices
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-laptop"></i> mbri-laptop
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-desktop"></i> mbri-desktop
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-responsive"></i> mbri-responsive
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-touch-swipe"></i> mbri-touch-swipe
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-touch"></i> mbri-touch
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-browse"></i> mbri-browse
                                                </div>


                                                <div class="col-12">
                                                    <h6 class="m-b-20">Shopping</h6>
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-shopping-bag"></i> mbri-shopping-bag
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-shopping-basket"></i> mbri-shopping-basket
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-shopping-cart"></i> mbri-shopping-cart
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-cart-add"></i> mbri-cart-add
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-cart-full"></i> mbri-cart-full
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-cash"></i> mbri-cash
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-delivery"></i> mbri-delivery
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-credit-card"></i> mbri-credit-card
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-sale"></i> mbri-sale
                                                </div>


                                                <div class="col-12">
                                                    <h6 class="m-b-20">Navigation</h6>
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-left"></i> mbri-left
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-right"></i> mbri-right
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-up"></i> mbri-up
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-down"></i> mbri-down
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-arrow-prev"></i> mbri-arrow-prev
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-arrow-next"></i> mbri-arrow-next
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-arrow-up"></i> mbri-arrow-up
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-arrow-down"></i> mbri-arrow-down
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-plus"></i> mbri-plus
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-close"></i> mbri-close
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-menu"></i> mbri-menu
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-success"></i> mbri-success
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-play"></i> mbri-play
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-more-horizontal"></i> mbri-more-horizontal
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-more-vertical"></i> mbri-more-vertical
                                                </div>


                                                <div class="col-12">
                                                    <h6 class="m-b-20">Symbols</h6>
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-home"></i> mbri-home
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-star"></i> mbri-star
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-hearth"></i> mbri-hearth
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-idea"></i> mbri-idea
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-magic-stick"></i> mbri-magic-stick
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-flag"></i> mbri-flag
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-target"></i> mbri-target
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-speed"></i> mbri-speed
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-help"></i> mbri-help
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-letter"></i> mbri-letter
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-info"></i> mbri-info
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-question"></i> mbri-question
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-features"></i> mbri-features
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-briefcase"></i> mbri-briefcase
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-sun"></i> mbri-sun
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-sun2"></i> mbri-sun2
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-smile-face"></i> mbri-smile-face
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-sad-face"></i> mbri-sad-face
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-alert"></i> mbri-alert
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-timer"></i> mbri-timer
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-clock"></i> mbri-clock
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-growing-chart"></i> mbri-growing-chart
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-cursor-click"></i> mbri-cursor-click
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-protect"></i> mbri-protect
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-camera"></i> mbri-camera
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-globe"></i> mbri-globe
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-globe-2"></i> mbri-globe-2
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-bookmark"></i> mbri-bookmark
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-rocket"></i> mbri-rocket
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-paper-plane"></i> mbri-paper-plane
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-hot-cup"></i> mbri-hot-cup
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-calendar"></i> mbri-calendar
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-search"></i> mbri-search
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-zoom-out"></i> mbri-zoom-out
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-android"></i> mbri-android
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-apple"></i> mbri-apple
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-windows"></i> mbri-windows
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-bootstrap"></i> mbri-bootstrap
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-github"></i> mbri-github
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-like"></i> mbri-like
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-wifi"></i> mbri-wifi
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-gift"></i> mbri-gift
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-database"></i> mbri-database
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-paperclip"></i> mbri-paperclip
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-print"></i> mbri-print
                                                </div>


                                                <div class="col-12">
                                                    <h6 class="m-b-20">Editing</h6>
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-align-left"></i> mbri-align-left
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-align-center"></i> mbri-align-center
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-align-right"></i> mbri-align-right
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-align-justify"></i> mbri-align-justify
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-undo"></i> mbri-undo
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-redo"></i> mbri-redo
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-new-file"></i> mbri-new-file
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-file"></i> mbri-file
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-share"></i> mbri-share
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-save"></i> mbri-save
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-folder"></i> mbri-folder
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-opened-folder"></i> mbri-opened-folder
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-edit"></i> mbri-edit
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-edit2"></i> mbri-edit2
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-change-style"></i> mbri-change-style
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-setting"></i> mbri-setting
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-setting2"></i> mbri-setting2
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-setting3"></i> mbri-setting3
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-refresh"></i> mbri-refresh
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-trash"></i> mbri-trash
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-drag-n-drop"></i> mbri-drag-n-drop
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-drag-n-drop2"></i> mbri-drag-n-drop2
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-up-down"></i> mbri-up-down
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-left-right"></i> mbri-left-right
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-layers"></i> mbri-layers
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-code"></i> mbri-code
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-bold"></i> mbri-bold
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-italic"></i> mbri-italic
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-underline"></i> mbri-underline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-add-submenu"></i> mbri-add-submenu
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-bulleted-list"></i> mbri-bulleted-list
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-numbered-list"></i> mbri-numbered-list
                                                </div>


                                                <div class="col-12">
                                                    <h6 class="m-b-20">Site Elements</h6>
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-photo"></i> mbri-photo
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-photos"></i> mbri-photos
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-video-play"></i> mbri-video-play
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-video"></i> mbri-video
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-music"></i> mbri-music
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-pin"></i> mbri-pin
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-map-pin"></i> mbri-map-pin
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-chat"></i> mbri-chat
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-image-gallery"></i> mbri-image-gallery
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-image-slider"></i> mbri-image-slider
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-cust-feedback"></i> mbri-cust-feedback
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-contact-form"></i> mbri-contact-form
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-link"></i> mbri-link
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-unlink"></i> mbri-unlink
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-quote-left"></i> mbri-quote-left
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-quote-right"></i> mbri-quote-right
                                                </div>



                                                <div class="col-12">
                                                    <h6 class="m-b-20">Account</h6>
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-user"></i> mbri-user
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-user2"></i> mbri-user2
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-users"></i> mbri-users
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-key"></i> mbri-key
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-lock"></i> mbri-lock
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-unlock"></i> mbri-unlock
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-login"></i> mbri-login
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-logout"></i> mbri-logout
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-cloud"></i> mbri-cloud
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-download"></i> mbri-download
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-upload"></i> mbri-upload
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-to-ftp"></i> mbri-to-ftp
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-to-local-drive"></i> mbri-to-local-drive
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-preview"></i> mbri-preview
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-error"></i> mbri-error
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-pages"></i> mbri-pages
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-sites"></i> mbri-sites
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-extension"></i> mbri-extension
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-website-theme"></i> mbri-website-theme
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="mbri-update"></i> mbri-update
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
        
        <!-- App js -->
        <script src="public/assets/js/app.js"></script>

    </body>
</html>