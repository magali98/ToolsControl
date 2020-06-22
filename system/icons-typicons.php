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
                                    <h3 class="page-title">Typicons Icons</h3>
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
                                            <p class="text-muted m-b-30 font-14"> Use <code>&lt;i class="typcn typcn-chart-pie-outline
                                                "&gt;&lt;/i&gt;</code>.
                                            </p>

                                            <div class="row icon-demo-content">
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-chart-pie-outline"></i> typcn typcn-chart-pie-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-chart-pie"></i> typcn typcn-chart-pie
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-chevron-left-outline"></i> typcn typcn-chevron-left-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-chevron-left"></i> typcn typcn-chevron-left
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-chevron-right-outline"></i> typcn typcn-chevron-right-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-chevron-right"></i> typcn typcn-chevron-right
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-clipboard"></i> typcn typcn-clipboard
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-cloud-storage"></i> typcn typcn-cloud-storage
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-cloud-storage-outline"></i> typcn typcn-cloud-storage-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-code-outline"></i> typcn typcn-code-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-code"></i> typcn typcn-code
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-coffee"></i> typcn typcn-coffee
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-cog-outline"></i> typcn typcn-cog-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-cog"></i> typcn typcn-cog
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-compass"></i> typcn typcn-compass
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-contacts"></i> typcn typcn-contacts
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-credit-card"></i> typcn typcn-credit-card
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-css3"></i> typcn typcn-css3
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-database"></i> typcn typcn-database
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-delete-outline"></i> typcn typcn-delete-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-delete"></i> typcn typcn-delete
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-device-desktop"></i> typcn typcn-device-desktop
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-device-laptop"></i> typcn typcn-device-laptop
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-device-phone"></i> typcn typcn-device-phone
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-device-tablet"></i> typcn typcn-device-tablet
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-directions"></i> typcn typcn-directions
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-divide-outline"></i> typcn typcn-divide-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-divide"></i> typcn typcn-divide
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-document-add"></i> typcn typcn-document-add
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-document-delete"></i> typcn typcn-document-delete
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-document-text"></i> typcn typcn-document-text
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-document"></i> typcn typcn-document
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-download-outline"></i> typcn typcn-download-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-download"></i> typcn typcn-download
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-dropbox"></i> typcn typcn-dropbox
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-edit"></i> typcn typcn-edit
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-eject-outline"></i> typcn typcn-eject-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-eject"></i> typcn typcn-eject
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-equals-outline"></i> typcn typcn-equals-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-equals"></i> typcn typcn-equals
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-export-outline"></i> typcn typcn-export-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-export"></i> typcn typcn-export
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-eye-outline"></i> typcn typcn-eye-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-eye"></i> typcn typcn-eye
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-feather"></i> typcn typcn-feather
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-film"></i> typcn typcn-film
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-filter"></i> typcn typcn-filter
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-flag-outline"></i> typcn typcn-flag-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-flag"></i> typcn typcn-flag
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-flash-outline"></i> typcn typcn-flash-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-flash"></i> typcn typcn-flash
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-flow-children"></i> typcn typcn-flow-children
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-flow-merge"></i> typcn typcn-flow-merge
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-flow-parallel"></i> typcn typcn-flow-parallel
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-flow-switch"></i> typcn typcn-flow-switch
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-folder-add"></i> typcn typcn-folder-add
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-folder-delete"></i> typcn typcn-folder-delete
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-folder-open"></i> typcn typcn-folder-open
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-folder"></i> typcn typcn-folder
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-gift"></i> typcn typcn-gift
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-globe-outline"></i> typcn typcn-globe-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-globe"></i> typcn typcn-globe
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-group-outline"></i> typcn typcn-group-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-group"></i> typcn typcn-group
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-headphones"></i> typcn typcn-headphones
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-heart-full-outline"></i> typcn typcn-heart-full-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-heart-half-outline"></i> typcn typcn-heart-half-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-heart-outline"></i> typcn typcn-heart-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-heart"></i> typcn typcn-heart
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-home-outline"></i> typcn typcn-home-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-home"></i> typcn typcn-home
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-html5"></i> typcn typcn-html5
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-image-outline"></i> typcn typcn-image-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-image"></i> typcn typcn-image
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-infinity-outline"></i> typcn typcn-infinity-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-infinity"></i> typcn typcn-infinity
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-info-large-outline"></i> typcn typcn-info-large-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-info-large"></i> typcn typcn-info-large
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-info-outline"></i> typcn typcn-info-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-info"></i> typcn typcn-info
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-input-checked-outline"></i> typcn typcn-input-checked-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-input-checked"></i> typcn typcn-input-checked
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-key-outline"></i> typcn typcn-key-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-key"></i> typcn typcn-key
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-keyboard"></i> typcn typcn-keyboard
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-leaf"></i> typcn typcn-leaf
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-lightbulb"></i> typcn typcn-lightbulb
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-link-outline"></i> typcn typcn-link-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-link"></i> typcn typcn-link
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-location-arrow-outline"></i> typcn typcn-location-arrow-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-location-arrow"></i> typcn typcn-location-arrow
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-location-outline"></i> typcn typcn-location-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-location"></i> typcn typcn-location
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-lock-closed-outline"></i> typcn typcn-lock-closed-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-lock-closed"></i> typcn typcn-lock-closed
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-lock-open-outline"></i> typcn typcn-lock-open-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-lock-open"></i> typcn typcn-lock-open
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-mail"></i> typcn typcn-mail
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-map"></i> typcn typcn-map
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-media-eject-outline"></i> typcn typcn-media-eject-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-media-eject"></i> typcn typcn-media-eject
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-media-fast-forward-outline"></i> typcn typcn-media-fast-forward-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-media-fast-forward"></i> typcn typcn-media-fast-forward
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-media-pause-outline"></i> typcn typcn-media-pause-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-media-pause"></i> typcn typcn-media-pause
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-media-play-outline"></i> typcn typcn-media-play-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-media-play-reverse-outline"></i>  typcn typcn-media-play-reverse-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-media-play-reverse"></i> typcn typcn-media-play-reverse
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-media-play"></i> typcn typcn-media-play
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-media-record-outline"></i> typcn typcn-media-record-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-media-record"></i> typcn typcn-media-record
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-media-rewind-outline"></i> typcn typcn-media-rewind-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-media-rewind"></i> typcn typcn-media-rewind
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-media-stop-outline"></i> typcn typcn-media-stop-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-media-stop"></i> typcn typcn-media-stop
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-message-typing"></i> typcn typcn-message-typing
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-message"></i> typcn typcn-message
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-messages"></i> typcn typcn-messages
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-microphone-outline"></i> typcn typcn-microphone-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-microphone"></i> typcn typcn-microphone
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-minus-outline"></i> typcn typcn-minus-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-minus"></i> typcn typcn-minus
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-mortar-board"></i> typcn typcn-mortar-board
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-news"></i> typcn typcn-news
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-notes-outline"></i> typcn typcn-notes-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-notes"></i> typcn typcn-notes
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-pen"></i> typcn typcn-pen
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-pencil"></i> typcn typcn-pencil
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-phone-outline"></i> typcn typcn-phone-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-phone"></i> typcn typcn-phone
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-pi-outline"></i> typcn typcn-pi-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-pi"></i> typcn typcn-pi
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-pin-outline"></i> typcn typcn-pin-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-pin"></i> typcn typcn-pin
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-pipette"></i> typcn typcn-pipette
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-plane-outline"></i> typcn typcn-plane-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-plane"></i> typcn typcn-plane
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-plug"></i> typcn typcn-plug
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-plus-outline"></i> typcn typcn-plus-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-plus"></i> typcn typcn-plus
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-point-of-interest-outline"></i> typcn typcn-point-of-interest-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-point-of-interest"></i> typcn typcn-point-of-interest
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-power-outline"></i> typcn typcn-power-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-power"></i> typcn typcn-power
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-printer"></i> typcn typcn-printer
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-puzzle-outline"></i> typcn typcn-puzzle-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-puzzle"></i> typcn typcn-puzzle
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-radar-outline"></i> typcn typcn-radar-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-radar"></i> typcn typcn-radar
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-refresh-outline"></i> typcn typcn-refresh-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-refresh"></i> typcn typcn-refresh
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-rss-outline"></i> typcn typcn-rss-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-rss"></i> typcn typcn-rss
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-scissors-outline"></i> typcn typcn-scissors-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-scissors"></i> typcn typcn-scissors
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-shopping-bag"></i> typcn typcn-shopping-bag
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-shopping-cart"></i> typcn typcn-shopping-cart
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-social-at-circular"></i> typcn typcn-social-at-circular
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-social-dribbble-circular"></i> typcn typcn-social-dribbble-circular
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-social-dribbble"></i> typcn typcn-social-dribbble
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-social-facebook-circular"></i> typcn typcn-social-facebook-circular
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-social-facebook"></i> typcn typcn-social-facebook
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-social-flickr-circular"></i> typcn typcn-social-flickr-circular
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-social-flickr"></i> typcn typcn-social-flickr
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-social-github-circular"></i> typcn typcn-social-github-circular
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-social-github"></i> typcn typcn-social-github
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-social-google-plus-circular"></i> typcn typcn-social-google-plus-circular
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-social-google-plus"></i> typcn typcn-social-google-plus
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-social-instagram-circular"></i> typcn typcn-social-instagram-circular
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-social-instagram"></i> typcn typcn-social-instagram
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-social-last-fm-circular"></i> typcn typcn-social-last-fm-circular
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-social-last-fm"></i> typcn typcn-social-last-fm
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-social-linkedin-circular"></i> typcn typcn-social-linkedin-circular
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-social-linkedin"></i> typcn typcn-social-linkedin
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-social-pinterest-circular"></i> typcn typcn-social-pinterest-circular
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-social-pinterest"></i> typcn typcn-social-pinterest
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-social-skype-outline"></i> typcn typcn-social-skype-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-social-skype"></i> typcn typcn-social-skype
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-social-tumbler-circular"></i> typcn typcn-social-tumbler-circular
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-social-tumbler"></i> typcn typcn-social-tumbler
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-social-twitter-circular"></i> typcn typcn-social-twitter-circular
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-social-twitter"></i> typcn typcn-social-twitter
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-social-vimeo-circular"></i> typcn typcn-social-vimeo-circular
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-social-vimeo"></i> typcn typcn-social-vimeo
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-social-youtube-circular"></i> typcn typcn-social-youtube-circular
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-social-youtube"></i> typcn typcn-social-youtube
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-sort-alphabetically-outline"></i> typcn typcn-sort-alphabetically-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-sort-alphabetically"></i> typcn typcn-sort-alphabetically
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-sort-numerically-outline"></i> typcn typcn-sort-numerically-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-sort-numerically"></i> typcn typcn-sort-numerically
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-spanner-outline"></i> typcn typcn-spanner-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-spanner"></i> typcn typcn-spanner
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-spiral"></i> typcn typcn-spiral
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-star-full-outline"></i> typcn typcn-star-full-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-star-half-outline"></i> typcn typcn-star-half-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-star-half"></i> typcn typcn-star-half
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-star-outline"></i> typcn typcn-star-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-star"></i> typcn typcn-star
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-starburst-outline"></i> typcn typcn-starburst-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-starburst"></i> typcn typcn-starburst
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-stopwatch"></i> typcn typcn-stopwatch
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-support"></i> typcn typcn-support
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-tabs-outline"></i> typcn typcn-tabs-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-tag"></i> typcn typcn-tag
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-tags"></i> typcn typcn-tags
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-th-large-outline"></i> typcn typcn-th-large-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-th-large"></i> typcn typcn-th-large
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-th-list-outline"></i> typcn typcn-th-list-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-th-list"></i> typcn typcn-th-list
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-th-menu-outline"></i> typcn typcn-th-menu-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-th-menu"></i> typcn typcn-th-menu
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-th-small-outline"></i> typcn typcn-th-small-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-th-small"></i> typcn typcn-th-small
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-thermometer"></i> typcn typcn-thermometer
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-thumbs-down"></i> typcn typcn-thumbs-down
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-thumbs-ok"></i> typcn typcn-thumbs-ok
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-thumbs-up"></i> typcn typcn-thumbs-up
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-tick-outline"></i> typcn typcn-tick-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-tick"></i> typcn typcn-tick
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-ticket"></i> typcn typcn-ticket
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-time"></i> typcn typcn-time
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-times-outline"></i> typcn typcn-times-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-times"></i> typcn typcn-times
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-trash"></i> typcn typcn-trash
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-tree"></i> typcn typcn-tree
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-upload-outline"></i> typcn typcn-upload-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-upload"></i> typcn typcn-upload
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-user-add-outline"></i> typcn typcn-user-add-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-user-add"></i> typcn typcn-user-add
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-user-delete-outline"></i> typcn typcn-user-delete-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-user-delete"></i> typcn typcn-user-delete
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-user-outline"></i> typcn typcn-user-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-user"></i> typcn typcn-user
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-vendor-android"></i> typcn typcn-vendor-android
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-vendor-apple"></i> typcn typcn-vendor-apple
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-vendor-microsoft"></i> typcn typcn-vendor-microsoft
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-video-outline"></i> typcn typcn-video-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-video"></i> typcn typcn-video
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-volume-down"></i> typcn typcn-volume-down
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-volume-mute"></i> typcn typcn-volume-mute
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-volume-up"></i> typcn typcn-volume-up
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-volume"></i> typcn typcn-volume
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-warning-outline"></i> typcn typcn-warning-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-warning"></i> typcn typcn-warning
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-watch"></i> typcn typcn-watch
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-waves-outline"></i> typcn typcn-waves-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-waves"></i> typcn typcn-waves
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-weather-cloudy"></i> typcn typcn-weather-cloudy
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-weather-downpour"></i> typcn typcn-weather-downpour
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-weather-night"></i> typcn typcn-weather-night
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-weather-partly-sunny"></i> typcn typcn-weather-partly-sunny
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-weather-shower"></i> typcn typcn-weather-shower
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-weather-snow"></i> typcn typcn-weather-snow
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-weather-stormy"></i> typcn typcn-weather-stormy
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-weather-sunny"></i> typcn typcn-weather-sunny
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-weather-windy-cloudy"></i> typcn typcn-weather-windy-cloudy
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-weather-windy"></i> typcn typcn-weather-windy
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-wi-fi-outline"></i> typcn typcn-wi-fi-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-wi-fi"></i> typcn typcn-wi-fi
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-wine"></i> typcn typcn-wine
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-world-outline"></i> typcn typcn-world-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-world"></i> typcn typcn-world
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-zoom-in-outline"></i> typcn typcn-zoom-in-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-zoom-in"></i> typcn typcn-zoom-in
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-zoom-out-outline"></i> typcn typcn-zoom-out-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-zoom-out"></i> typcn typcn-zoom-out
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-zoom-outline"></i> typcn typcn-zoom-outline
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="typcn typcn-zoom"></i> typcn typcn-zoom
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

        <!-- App js -->
        <script src="public/assets/js/app.js"></script>

    </body>
</html>