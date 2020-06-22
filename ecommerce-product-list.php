<?php include 'layouts/header.php'; ?>

        <!-- DataTables -->
        <link href="public/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="public/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
     
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
                                    <h3 class="page-title">Products List</h3>
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
                                    <div class="card">
                                        <div class="card-body">
                                            <table id="datatable" class="table table-striped dt-responsive nowrap table-vertical" width="100%" cellspacing="0">
                                                <thead>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>Product Name</th>
                                                    <th>Added Date</th>
                                                    <th>Amount</th>
                                                    <th>No. of Units</th>
                                                    <th>Stock</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="product-list-img">
                                                        <img src="public/assets/images/products/1.jpg" class="img-fluid" alt="tbl">
                                                    </td>
                                                    <td>
                                                        <h6 class="mt-0 m-b-5">Riverston Glass Chair</h6>
                                                        <p class="m-0 font-14">Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</p>
                                                    </td>
                                                    <td>22/05/2017</td>
                                                    <td>$521</td>
                                                    <td>5841</td>
                                                    <td>
                                                        <div class="progress" style="height: 5px;">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="product-list-img">
                                                        <img src="public/assets/images/products/2.jpg" class="img-fluid" alt="tbl">
                                                    </td>
                                                    <td>
                                                        <h6 class="mt-0 m-b-5">Shine Company Catalina</h6>
                                                        <p class="m-0 font-14">Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</p>
                                                    </td>
                                                    <td>28/03/2017</td>
                                                    <td>$210</td>
                                                    <td>841</td>
                                                    <td>
                                                        <div class="progress" style="height: 5px;">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="product-list-img">
                                                        <img src="public/assets/images/products/3.jpg" class="img-fluid" alt="tbl">
                                                    </td>
                                                    <td>
                                                        <h6 class="mt-0 m-b-5">Trex Outdoor Furniture Cape</h6>
                                                        <p class="m-0 font-14">Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</p>
                                                    </td>
                                                    <td>22/05/2017</td>
                                                    <td>$652</td>
                                                    <td>120</td>
                                                    <td>
                                                        <div class="progress" style="height: 5px;">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 35%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="product-list-img">
                                                        <img src="public/assets/images/products/4.jpg" class="img-fluid" alt="tbl">
                                                    </td>
                                                    <td>
                                                        <h6 class="mt-0 m-b-5">Oasis Bathroom Teak Corner</h6>
                                                        <p class="m-0 font-14">Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</p>
                                                    </td>
                                                    <td>11/05/2017</td>
                                                    <td>$85</td>
                                                    <td>320</td>
                                                    <td>
                                                        <div class="progress" style="height: 5px;">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 65%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="product-list-img">
                                                        <img src="public/assets/images/products/5.jpg" class="img-fluid" alt="tbl">
                                                    </td>
                                                    <td>
                                                        <h6 class="mt-0 m-b-5">Condimentum Posuere</h6>
                                                        <p class="m-0 font-14">Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</p>
                                                    </td>
                                                    <td>18/04/2017</td>
                                                    <td>$8512</td>
                                                    <td>201</td>
                                                    <td>
                                                        <div class="progress" style="height: 5px;">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 79%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="product-list-img">
                                                        <img src="public/assets/images/products/6.jpg" class="img-fluid" alt="tbl">
                                                    </td>
                                                    <td>
                                                        <h6 class="mt-0 m-b-5">Micro Board</h6>
                                                        <p class="m-0 font-14">Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</p>
                                                    </td>
                                                    <td>02/03/2017</td>
                                                    <td>$521</td>
                                                    <td>321</td>
                                                    <td>
                                                        <div class="progress" style="height: 5px;">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="product-list-img">
                                                        <img src="public/assets/images/products/7.jpg" class="img-fluid" alt="tbl">
                                                    </td>
                                                    <td>
                                                        <h6 class="mt-0 m-b-5">BeoPlay Speaker</h6>
                                                        <p class="m-0 font-14">Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</p>
                                                    </td>
                                                    <td>12/05/2017</td>
                                                    <td>$22</td>
                                                    <td>5410</td>
                                                    <td>
                                                        <div class="progress" style="height: 5px;">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 95%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="product-list-img">
                                                        <img src="public/assets/images/products/8.jpg" class="img-fluid" alt="tbl">
                                                    </td>
                                                    <td>
                                                        <h6 class="mt-0 m-b-5">Travelers Leather Bag</h6>
                                                        <p class="m-0 font-14">Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</p>
                                                    </td>
                                                    <td>18/04/2017</td>
                                                    <td>$98</td>
                                                    <td>556</td>
                                                    <td>
                                                        <div class="progress" style="height: 5px;">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 45%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="product-list-img">
                                                        <img src="public/assets/images/products/1.jpg" class="img-fluid" alt="tbl">
                                                    </td>
                                                    <td>
                                                        <h6 class="mt-0 m-b-5">Riverston Glass Chair</h6>
                                                        <p class="m-0 font-14">Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</p>
                                                    </td>
                                                    <td>22/05/2017</td>
                                                    <td>$521</td>
                                                    <td>5841</td>
                                                    <td>
                                                        <div class="progress" style="height: 5px;">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="product-list-img">
                                                        <img src="public/assets/images/products/2.jpg" class="img-fluid" alt="tbl">
                                                    </td>
                                                    <td>
                                                        <h6 class="mt-0 m-b-5">Shine Company Catalina</h6>
                                                        <p class="m-0 font-14">Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</p>
                                                    </td>
                                                    <td>28/03/2017</td>
                                                    <td>$210</td>
                                                    <td>841</td>
                                                    <td>
                                                        <div class="progress" style="height: 5px;">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="product-list-img">
                                                        <img src="public/assets/images/products/3.jpg" class="img-fluid" alt="tbl">
                                                    </td>
                                                    <td>
                                                        <h6 class="mt-0 m-b-5">Trex Outdoor Furniture Cape</h6>
                                                        <p class="m-0 font-14">Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</p>
                                                    </td>
                                                    <td>22/05/2017</td>
                                                    <td>$652</td>
                                                    <td>120</td>
                                                    <td>
                                                        <div class="progress" style="height: 5px;">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 35%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="product-list-img">
                                                        <img src="public/assets/images/products/4.jpg" class="img-fluid" alt="tbl">
                                                    </td>
                                                    <td>
                                                        <h6 class="mt-0 m-b-5">Oasis Bathroom Teak Corner</h6>
                                                        <p class="m-0 font-14">Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</p>
                                                    </td>
                                                    <td>11/05/2017</td>
                                                    <td>$85</td>
                                                    <td>320</td>
                                                    <td>
                                                        <div class="progress" style="height: 5px;">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 65%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="product-list-img">
                                                        <img src="public/assets/images/products/5.jpg" class="img-fluid" alt="tbl">
                                                    </td>
                                                    <td>
                                                        <h6 class="mt-0 m-b-5">Condimentum Posuere</h6>
                                                        <p class="m-0 font-14">Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</p>
                                                    </td>
                                                    <td>18/04/2017</td>
                                                    <td>$8512</td>
                                                    <td>201</td>
                                                    <td>
                                                        <div class="progress" style="height: 5px;">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 79%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="product-list-img">
                                                        <img src="public/assets/images/products/6.jpg" class="img-fluid" alt="tbl">
                                                    </td>
                                                    <td>
                                                        <h6 class="mt-0 m-b-5">Micro Board</h6>
                                                        <p class="m-0 font-14">Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</p>
                                                    </td>
                                                    <td>02/03/2017</td>
                                                    <td>$521</td>
                                                    <td>321</td>
                                                    <td>
                                                        <div class="progress" style="height: 5px;">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="product-list-img">
                                                        <img src="public/assets/images/products/7.jpg" class="img-fluid" alt="tbl">
                                                    </td>
                                                    <td>
                                                        <h6 class="mt-0 m-b-5">BeoPlay Speaker</h6>
                                                        <p class="m-0 font-14">Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</p>
                                                    </td>
                                                    <td>12/05/2017</td>
                                                    <td>$22</td>
                                                    <td>5410</td>
                                                    <td>
                                                        <div class="progress" style="height: 5px;">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 95%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="product-list-img">
                                                        <img src="public/assets/images/products/8.jpg" class="img-fluid" alt="tbl">
                                                    </td>
                                                    <td>
                                                        <h6 class="mt-0 m-b-5">Travelers Leather Bag</h6>
                                                        <p class="m-0 font-14">Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</p>
                                                    </td>
                                                    <td>18/04/2017</td>
                                                    <td>$98</td>
                                                    <td>556</td>
                                                    <td>
                                                        <div class="progress" style="height: 5px;">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 45%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                                    </td>
                                                </tr>

                                                </tbody>
                                            </table>

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

        <!-- Datatable js -->
        <script src="public/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="public/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Responsive examples -->
        <script src="public/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="public/plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- App js -->
        <script src="public/assets/js/app.js"></script>

        <script>
            $(document).ready(function () {
                $('#datatable').DataTable();
            });
        </script>

    </body>
</html>