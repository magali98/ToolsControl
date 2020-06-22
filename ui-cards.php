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
                                    <h3 class="page-title">Cards</h3>
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
                                <div class="col-md-6 col-lg-6 col-xl-3">

                                    <!-- Simple card -->
                                    <div class="card m-b-20">
                                        <img class="card-img-top img-fluid" src="public/assets/images/small/img-1.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title font-20 mt-0">Card title</h4>
                                            <p class="card-text">Some quick example text to build on the card title and make
                                                up the bulk of the card's content.</p>
                                            <a href="#" class="btn btn-primary waves-effect waves-light">Button</a>
                                        </div>
                                    </div>

                                </div><!-- end col -->

                                <div class="col-md-6 col-lg-6 col-xl-3">

                                    <div class="card m-b-20">
                                        <img class="card-img-top img-fluid" src="public/assets/images/small/img-2.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title font-20 mt-0">Card title</h4>
                                            <p class="card-text">Some quick example text to build on the card title and make
                                                up the bulk of the card's content.</p>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Cras justo odio</li>
                                            <li class="list-group-item">Dapibus ac facilisis in</li>
                                        </ul>
                                        <div class="card-body">
                                            <a href="#" class="card-link">Card link</a>
                                            <a href="#" class="card-link">Another link</a>
                                        </div>
                                    </div>

                                </div><!-- end col -->

                                <div class="col-md-6 col-lg-6 col-xl-3">

                                    <div class="card m-b-20">
                                        <img class="card-img-top img-fluid" src="public/assets/images/small/img-3.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build on the card title and make
                                                up the bulk of the card's content.</p>
                                        </div>
                                    </div>

                                </div><!-- end col -->


                                <div class="col-md-6 col-lg-6 col-xl-3">

                                    <div class="card m-b-20">
                                        <div class="card-body">
                                            <h4 class="card-title font-20 mt-0">Card title</h4>
                                            <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                                        </div>
                                        <img class="img-fluid" src="public/assets/images/small/img-4.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build on the card title and make
                                                up the bulk of the card's content.</p>
                                            <a href="#" class="card-link">Card link</a>
                                            <a href="#" class="card-link">Another link</a>
                                        </div>
                                    </div>

                                </div><!-- end col -->
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card m-b-20 card-body">
                                        <h3 class="card-title font-20 mt-0">Special title treatment</h3>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional
                                            content.</p>
                                        <a href="#" class="btn btn-primary waves-effect waves-light">Go somewhere</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card m-b-20 card-body">
                                        <h3 class="card-title font-20 mt-0">Special title treatment</h3>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional
                                            content.</p>
                                        <a href="#" class="btn btn-primary waves-effect waves-light">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card m-b-20 card-body">
                                        <h4 class="card-title font-20 mt-0">Special title treatment</h4>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional
                                            content.</p>
                                        <a href="#" class="btn btn-primary waves-effect waves-light">Go somewhere</a>
                                    </div>
                                </div>

                                <div class="col-lg-4 ">
                                    <div class="card m-b-20 card-body text-center">
                                        <h4 class="card-title font-20 mt-0">Special title treatment</h4>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional
                                            content.</p>
                                        <a href="#" class="btn btn-primary waves-effect waves-light">Go somewhere</a>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="card m-b-20 card-body text-right">
                                        <h4 class="card-title font-20 mt-0">Special title treatment</h4>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional
                                            content.</p>
                                        <a href="#" class="btn btn-primary waves-effect waves-light">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->


                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card m-b-20">
                                        <h5 class="card-header mt-0">Featured</h5>
                                        <div class="card-body">
                                            <h4 class="card-title font-20 mt-0">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to
                                                additional content.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="card m-b-20">
                                        <div class="card-header">
                                            Quote
                                        </div>
                                        <div class="card-body">
                                            <blockquote class="card-blockquote mb-0">
                                                <p class="font-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                    erat a ante.</p>
                                                <footer class="blockquote-footer text-muted">
                                                    Someone famous in <cite title="Source Title">Source Title</cite>
                                                </footer>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="card m-b-20">
                                        <div class="card-header">
                                            Featured
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title font-20 mt-0">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to
                                                additional content.</p>
                                            <a href="#" class="btn btn-primary waves-effect waves-light">Go somewhere</a>
                                        </div>
                                        <div class="card-footer text-muted">
                                            2 days ago
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->


                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card m-b-20">
                                        <img class="card-img-top img-fluid" src="public/assets/images/small/img-5.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title font-20 mt-0">Card title</h4>
                                            <p class="card-text">This is a wider card with supporting text below as a
                                                natural lead-in to additional content. This content is a little bit
                                                longer.</p>
                                            <p class="card-text">
                                                <small class="text-muted">Last updated 3 mins ago</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="card m-b-20">
                                        <div class="card-body">
                                            <h4 class="card-title font-20 mt-0">Card title</h4>
                                            <p class="card-text">This is a wider card with supporting text below as a
                                                natural lead-in to additional content. This content is a little bit
                                                longer.</p>
                                            <p class="card-text">
                                                <small class="text-muted">Last updated 3 mins ago</small>
                                            </p>
                                        </div>
                                        <img class="card-img-bottom img-fluid" src="public/assets/images/small/img-6.jpg" alt="Card image cap">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="card m-b-20 card-inverse">
                                        <img class="card-img img-fluid" src="public/assets/images/small/img-7.jpg" alt="Card image">
                                        <div class="card-img-overlay">
                                            <h4 class="card-title font-20 mt-0">Card title</h4>
                                            <p class="card-text">This is a wider card with supporting text below as a
                                                natural lead-in to additional content. This content is a little bit
                                                longer.</p>
                                            <p class="card-text">
                                                <small class="text-muted">Last updated 3 mins ago</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card m-b-20 text-white" style="background-color: #333; border-color: #333;">
                                        <div class="card-body">
                                            <h3 class="card-title font-20 mt-0">Special title treatment</h3>
                                            <p class="card-text">With supporting text below as a natural lead-in to
                                                additional content.</p>
                                            <a href="#" class="btn btn-primary">Button</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="card m-b-20 text-white card-primary">
                                        <div class="card-body">
                                            <blockquote class="card-blockquote mb-0">
                                                <p class="font-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                    erat a ante.</p>
                                                <footer class="blockquote-footer text-white">
                                                    Someone famous in <cite title="Source Title">Source Title</cite>
                                                </footer>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="card m-b-20 text-white card-success">
                                        <div class="card-body">
                                            <blockquote class="card-blockquote mb-0">
                                                <p class="font-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                    erat a ante.</p>
                                                <footer class="blockquote-footer text-white">
                                                    Someone famous in <cite title="Source Title">Source Title</cite>
                                                </footer>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->


                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card m-b-20 text-white card-info">
                                        <div class="card-body">
                                            <blockquote class="card-blockquote mb-0">
                                                <p class="font-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                    erat a ante.</p>
                                                <footer class="blockquote-footer text-white">
                                                    Someone famous in <cite title="Source Title">Source Title</cite>
                                                </footer>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="card m-b-20 text-white card-warning">
                                        <div class="card-body">
                                            <blockquote class="card-blockquote mb-0">
                                                <p class="font-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                    erat a ante.</p>
                                                <footer class="blockquote-footer text-white">
                                                    Someone famous in <cite title="Source Title">Source Title</cite>
                                                </footer>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="card m-b-20 text-white card-danger">
                                        <div class="card-body">
                                            <blockquote class="card-blockquote mb-0">
                                                <p class="font-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                    erat a ante.</p>
                                                <footer class="blockquote-footer text-white">
                                                    Someone famous in <cite title="Source Title">Source Title</cite>
                                                </footer>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card m-b-20 text-white card-dark">
                                        <div class="card-body">
                                            <blockquote class="card-blockquote mb-0">
                                                <p class="font-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                    erat a ante.</p>
                                                <footer class="blockquote-footer text-white">
                                                    Someone famous in <cite title="Source Title">Source Title</cite>
                                                </footer>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="card m-b-20 text-white card-pink">
                                        <div class="card-body">
                                            <blockquote class="card-blockquote mb-0">
                                                <p class="font-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                    erat a ante.</p>
                                                <footer class="blockquote-footer text-white">
                                                    Someone famous in <cite title="Source Title">Source Title</cite>
                                                </footer>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="card m-b-20 text-white card-purple">
                                        <div class="card-body">
                                            <blockquote class="card-blockquote mb-0">
                                                <p class="font-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                    erat a ante.</p>
                                                <footer class="blockquote-footer text-white">
                                                    Someone famous in <cite title="Source Title">Source Title</cite>
                                                </footer>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card m-b-20 text-white card-indigo">
                                        <div class="card-body">
                                            <blockquote class="card-blockquote mb-0">
                                                <p class="font-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                    erat a ante.</p>
                                                <footer class="blockquote-footer text-white">
                                                    Someone famous in <cite title="Source Title">Source Title</cite>
                                                </footer>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="card m-b-20 text-white card-teal">
                                        <div class="card-body">
                                            <blockquote class="card-blockquote mb-0">
                                                <p class="font-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                    erat a ante.</p>
                                                <footer class="blockquote-footer text-white">
                                                    Someone famous in <cite title="Source Title">Source Title</cite>
                                                </footer>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="card m-b-20 text-white card-lime">
                                        <div class="card-body">
                                            <blockquote class="card-blockquote mb-0">
                                                <p class="font-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                    erat a ante.</p>
                                                <footer class="blockquote-footer text-white">
                                                    Someone famous in <cite title="Source Title">Source Title</cite>
                                                </footer>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card m-b-20 text-white card-orange">
                                        <div class="card-body">
                                            <blockquote class="card-blockquote mb-0">
                                                <p class="font-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                    erat a ante.</p>
                                                <footer class="blockquote-footer text-white">
                                                    Someone famous in <cite title="Source Title">Source Title</cite>
                                                </footer>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="card m-b-20 text-white card-brown">
                                        <div class="card-body">
                                            <blockquote class="card-blockquote mb-0">
                                                <p class="font-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                    erat a ante.</p>
                                                <footer class="blockquote-footer text-white">
                                                    Someone famous in <cite title="Source Title">Source Title</cite>
                                                </footer>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="card m-b-20 text-white card-blue-grey">
                                        <div class="card-body">
                                            <blockquote class="card-blockquote mb-0">
                                                <p class="font-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                    erat a ante.</p>
                                                <footer class="blockquote-footer text-white">
                                                    Someone famous in <cite title="Source Title">Source Title</cite>
                                                </footer>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->


                            <div class="row">
                                <div class="col-12">
                                    <div class="card-group">
                                        <div class="card m-b-20">
                                            <img class="card-img-top img-fluid" src="public/assets/images/small/img-1.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title font-20 mt-0">Card title</h4>
                                                <p class="card-text">This is a wider card with supporting text below as a
                                                    natural lead-in to additional content. This content is a little bit
                                                    longer.</p>
                                                <p class="card-text">
                                                    <small class="text-muted">Last updated 3 mins ago</small>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card m-b-20">
                                            <img class="card-img-top img-fluid" src="public/assets/images/small/img-2.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title font-20 mt-0">Card title</h4>
                                                <p class="card-text">This card has supporting text below as a natural
                                                    lead-in to additional content.</p>
                                                <p class="card-text">
                                                    <small class="text-muted">Last updated 3 mins ago</small>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card m-b-20">
                                            <img class="card-img-top img-fluid" src="assets/images/small/img-3.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title font-20 mt-0">Card title</h4>
                                                <p class="card-text">This is a wider card with supporting text below as a
                                                    natural lead-in to additional content. This card has even longer content
                                                    than the first to show that equal height action.</p>
                                                <p class="card-text">
                                                    <small class="text-muted">Last updated 3 mins ago</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->


                            <div class="row">
                                <div class="col-12">
                                    <h4 class="m-t-20 m-b-20">Decks</h4>
                                    <div class="card-deck-wrapper">
                                        <div class="card-deck">
                                            <div class="card m-b-20">
                                                <img class="card-img-top img-fluid" src="public/assets/images/small/img-4.jpg" alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title font-20 mt-0">Card title</h4>
                                                    <p class="card-text">This is a longer card with supporting text below as
                                                        a natural lead-in to additional content. This content is a little
                                                        bit longer.</p>
                                                    <p class="card-text">
                                                        <small class="text-muted">Last updated 3 mins ago</small>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card m-b-20">
                                                <img class="card-img-top img-fluid" src="public/assets/images/small/img-5.jpg" alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title font-20 mt-0">Card title</h4>
                                                    <p class="card-text">This card has supporting text below as a natural
                                                        lead-in to additional content.</p>
                                                    <p class="card-text">
                                                        <small class="text-muted">Last updated 3 mins ago</small>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card m-b-20">
                                                <img class="card-img-top img-fluid" src="public/assets/images/small/img-6.jpg" alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title font-20 mt-0">Card title</h4>
                                                    <p class="card-text">This is a wider card with supporting text below as
                                                        a natural lead-in to additional content. This card has even longer
                                                        content than the first to show that equal height action.</p>
                                                    <p class="card-text">
                                                        <small class="text-muted">Last updated 3 mins ago</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->


                            <div class="row">
                                <div class="col-12">
                                    <h4 class="m-t-20 m-b-20">Columns</h4>
                                    <div class="card-columns">
                                        <div class="card m-b-20">
                                            <img class="card-img-top img-fluid" src="public/assets/images/small/img-1.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title font-20 mt-0">Card title that wraps to a new line</h4>
                                                <p class="card-text">This is a longer card with supporting text below as a
                                                    natural lead-in to additional content. This content is a little bit
                                                    longer.</p>
                                            </div>
                                        </div>
                                        <div class="card m-b-20 card-body">
                                            <blockquote class="card-blockquote mb-0">
                                                <p class="font-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                    erat a ante.</p>
                                                <footer class="blockquote-footer text-muted">
                                                    <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                                                </footer>
                                            </blockquote>
                                        </div>
                                        <div class="card m-b-20">
                                            <img class="card-img-top img-fluid" src="public/assets/images/small/img-2.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title font-20 mt-0">Card title</h4>
                                                <p class="card-text">This card has supporting text below as a natural
                                                    lead-in to additional content.</p>
                                                <p class="card-text">
                                                    <small class="text-muted">Last updated 3 mins ago</small>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card m-b-20 card-body text-white card-primary">
                                            <blockquote class="card-blockquote mb-0">
                                                <p class="font-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                    erat a ante.</p>
                                                <footer class="blockquote-footer text-white">
                                                    <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                                                </footer>
                                            </blockquote>
                                        </div>
                                        <div class="card m-b-20 card-body">
                                            <h4 class="card-title font-20 mt-0">Card title</h4>
                                            <p class="card-text">This card has supporting text below as a natural lead-in to
                                                additional content.</p>
                                            <p class="card-text">
                                                <small class="text-muted">Last updated 3 mins ago</small>
                                            </p>
                                        </div>
                                        <div class="card m-b-20">
                                            <img class="card-img img-fluid" src="public/assets/images/small/img-3.jpg" alt="Card image cap">
                                        </div>
                                        <div class="card m-b-20 card-body text-xs-right">
                                            <blockquote class="card-blockquote mb-0">
                                                <p class="font-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                    erat a ante.</p>
                                                <footer class="blockquote-footer text-muted">
                                                    <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                                                </footer>
                                            </blockquote>
                                        </div>
                                        <div class="card m-b-20 card-body">
                                            <h4 class="card-title font-20 mt-0">Card title</h4>
                                            <p class="card-text">This is a wider card with supporting text below as a
                                                natural lead-in to additional content. This card has even longer content
                                                than the first to show that equal height action.</p>
                                            <p class="card-text">
                                                <small class="text-muted">Last updated 3 mins ago</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

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