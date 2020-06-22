<?php include 'layouts/header.php'; ?>

        <!--Magnific Popup CSS -->
        <link rel="stylesheet" href="../plugins/magnific-popup/magnific-popup.css">
        
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
                                    <h3 class="page-title">Gallery</h3>
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
                                <div class="col-lg-3 col-md-6">
                                    <a href="public/assets/images/gallery/work-1.jpg" class="gallery-popup" title="Open Imagination">
                                        <div class="project-item">
                                            <div class="overlay-container">
                                                <img src="public/assets/images/gallery/work-1.jpg" alt="img" class="gallery-thumb-img">
                                                <div class="project-item-overlay">
                                                    <h4>Open Imagination</h4>
                                                    <p>
                                                        <img src="public/assets/images/users/avatar-1.jpg" alt="user" class="thumb-sm rounded-circle" />
                                                        <span class="ml-2">Curtis Marion</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <a href="public/assets/images/gallery/work-2.jpg" class="gallery-popup" title="Locked Steel Gate">
                                        <div class="project-item">
                                            <div class="overlay-container">
                                                <img src="public/assets/images/gallery/work-2.jpg" alt="img" class="gallery-thumb-img">
                                                <div class="project-item-overlay">
                                                    <h4>Locked Steel Gate</h4>
                                                    <p>
                                                        <img src="public/assets/images/users/avatar-2.jpg" alt="user" class="thumb-sm rounded-circle" />
                                                        <span class="ml-2">Curtis Marion</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <a href="public/assets/images/gallery/work-3.jpg" class="gallery-popup" title="Mac Sunglasses">
                                        <div class="project-item">
                                            <div class="overlay-container">
                                                <img src="public/assets/images/gallery/work-3.jpg" alt="img" class="gallery-thumb-img">
                                                <div class="project-item-overlay">
                                                    <h4>Mac Sunglasses</h4>
                                                    <p>
                                                        <img src="public/assets/images/users/avatar-3.jpg" alt="user" class="thumb-sm rounded-circle" />
                                                        <span class="ml-2">Curtis Marion</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <a href="public/assets/images/gallery/work-4.jpg" class="gallery-popup" title="Morning Dew">
                                        <div class="project-item">
                                            <div class="overlay-container">
                                                <img src="public/assets/images/gallery/work-4.jpg" alt="img" class="gallery-thumb-img">
                                                <div class="project-item-overlay">
                                                    <h4>Morning Dew</h4>
                                                    <p>
                                                        <img src="public/assets/images/users/avatar-4.jpg" alt="user" class="thumb-sm rounded-circle" />
                                                        <span class="ml-2">Curtis Marion</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <a href="public/assets/images/gallery/work-5.jpg" class="gallery-popup" title="Console Activity">
                                        <div class="project-item">
                                            <div class="overlay-container">
                                                <img src="public/assets/images/gallery/work-5.jpg" alt="img" class="gallery-thumb-img">
                                                <div class="project-item-overlay">
                                                    <h4>Console Activity</h4>
                                                    <p>
                                                        <img src="public/assets/images/users/avatar-5.jpg" alt="user" class="thumb-sm rounded-circle" />
                                                        <span class="ml-2">Curtis Marion</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <a href="public/assets/images/gallery/work-6.jpg" class="gallery-popup" title="Shake It!">
                                        <div class="project-item">
                                            <div class="overlay-container">
                                                <img src="public/assets/images/gallery/work-6.jpg" alt="img" class="gallery-thumb-img">
                                                <div class="project-item-overlay">
                                                    <h4>Shake It!</h4>
                                                    <p>
                                                        <img src="public/assets/images/users/avatar-6.jpg" alt="user" class="thumb-sm rounded-circle" />
                                                        <span class="ml-2">Curtis Marion</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <a href="public/assets/images/gallery/work-7.jpg" class="gallery-popup" title="Backpack Content">
                                        <div class="project-item">
                                            <div class="overlay-container">
                                                <img src="public/assets/images/gallery/work-7.jpg" alt="img" class="gallery-thumb-img">
                                                <div class="project-item-overlay">
                                                    <h4>Backpack Content</h4>
                                                    <p>
                                                        <img src="public/assets/images/users/avatar-1.jpg" alt="user" class="thumb-sm rounded-circle" />
                                                        <span class="ml-2">Curtis Marion</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <a href="public/assets/images/gallery/work-8.jpg" class="gallery-popup" title="Sunset Bulb Glow">
                                        <div class="project-item">
                                            <div class="overlay-container">
                                                <img src="public/assets/images/gallery/work-8.jpg" alt="img" class="gallery-thumb-img">
                                                <div class="project-item-overlay">
                                                    <h4>Sunset Bulb Glow</h4>
                                                    <p>
                                                        <img src="public/assets/images/users/avatar-2.jpg" alt="user" class="thumb-sm rounded-circle" />
                                                        <span class="ml-2">Curtis Marion</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <a href="public/assets/images/gallery/work-9.jpg" class="gallery-popup" title="Open Imagination">
                                        <div class="project-item">
                                            <div class="overlay-container">
                                                <img src="public/assets/images/gallery/work-9.jpg" alt="img" class="gallery-thumb-img">
                                                <div class="project-item-overlay">
                                                    <h4>Open Imagination</h4>
                                                    <p>
                                                        <img src="public/assets/images/users/avatar-3.jpg" alt="user" class="thumb-sm rounded-circle" />
                                                        <span class="ml-2">Curtis Marion</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <a href="public/assets/images/gallery/work-10.jpg" class="gallery-popup" title="Console Activity">
                                        <div class="project-item">
                                            <div class="overlay-container">
                                                <img src="public/assets/images/gallery/work-10.jpg" alt="img" class="gallery-thumb-img">
                                                <div class="project-item-overlay">
                                                    <h4>Console Activity</h4>
                                                    <p>
                                                        <img src="public/assets/images/users/avatar-4.jpg" alt="user" class="thumb-sm rounded-circle" />
                                                        <span class="ml-2">Curtis Marion</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <a href="public/assets/images/gallery/work-11.jpg" class="gallery-popup" title="Open Imagination">
                                        <div class="project-item">
                                            <div class="overlay-container">
                                                <img src="public/assets/images/gallery/work-11.jpg" alt="img" class="gallery-thumb-img">
                                                <div class="project-item-overlay">
                                                    <h4>Open Imagination</h4>
                                                    <p>
                                                        <img src="public/assets/images/users/avatar-5.jpg" alt="user" class="thumb-sm rounded-circle" />
                                                        <span class="ml-2">Curtis Marion</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <a href="public/assets/images/gallery/work-12.jpg" class="gallery-popup" title="Shake It!">
                                        <div class="project-item">
                                            <div class="overlay-container">
                                                <img src="public/assets/images/gallery/work-12.jpg" alt="img" class="gallery-thumb-img">
                                                <div class="project-item-overlay">
                                                    <h4>Shake It!</h4>
                                                    <p>
                                                        <img src="public/assets/images/users/avatar-6.jpg" alt="user" class="thumb-sm rounded-circle" />
                                                        <span class="ml-2">Curtis Marion</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div><!-- container-fluid -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <?php include 'layouts/footer.php'; ?>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->

        <?php include 'layouts/footerScript.php'; ?>

        <!-- Magnific Popup -->
        <script src="public/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>

        <!-- App js -->
        <script src="public/assets/js/app.js"></script>

        <script>
            $('.gallery-popup').magnificPopup({
                type: 'image',
                closeOnContentClick: true,
                mainClass: 'mfp-fade',
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0,1] // Will preload 0 - before current, and 1 after the current image
                }
            });
        </script>

    </body>
</html>