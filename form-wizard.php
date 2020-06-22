<?php include 'layouts/header.php'; ?>

<!--Morris Chart CSS -->
<link rel="stylesheet" href="public/plugins/jquery-steps/jquery.steps.css">

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
                                    <h3 class="page-title">Wizard</h3>
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
                                <div class="col-sm-12">
                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Jquery Steps Wizard</h4>
                                            <p class="text-muted m-b-30 font-14">A powerful jQuery wizard plugin that
                                                supports accessibility and HTML5</p>

                                            <form id="form-horizontal" class="form-horizontal form-wizard-wrapper">
                                                <h3>Seller Details</h3>
                                                <fieldset>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label for="txtFirstNameBilling" class="col-lg-3 col-form-label">Contact Person</label>
                                                                <div class="col-lg-9">
                                                                    <input id="txtFirstNameBilling" name="txtFirstNameBilling" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label for="txtLastNameBilling" class="col-lg-3 col-form-label">Mobile No.</label>
                                                                <div class="col-lg-9">
                                                                    <input id="txtLastNameBilling" name="txtLastNameBilling" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label for="txtCompanyBilling" class="col-lg-3 col-form-label">Landline No.</label>
                                                                <div class="col-lg-9">
                                                                    <input id="txtCompanyBilling" name="txtCompanyBilling" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label for="txtEmailAddressBilling" class="col-lg-3 col-form-label">Email Address</label>
                                                                <div class="col-lg-9">
                                                                    <input id="txtEmailAddressBilling" name="txtEmailAddressBilling" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label for="txtAddress1Billing" class="col-lg-3 col-form-label">Address 1</label>
                                                                <div class="col-lg-9">
                                                                    <textarea id="txtAddress1Billing" name="txtAddress1Billing" rows="4" class="form-control"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label for="txtAddress2Billing" class="col-lg-3 col-form-label">Warehouse Address</label>
                                                                <div class="col-lg-9">
                                                                    <textarea id="txtAddress2Billing" name="txtAddress2Billing" rows="4" class="form-control"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label for="txtCityBilling" class="col-lg-3 col-form-label">Company Type</label>
                                                                <div class="col-lg-9">
                                                                    <input id="txtCityBilling" name="txtCityBilling" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label for="txtStateProvinceBilling" class="col-lg-3 col-form-label">Live Market A/C</label>
                                                                <div class="col-lg-9">
                                                                    <input id="txtStateProvinceBilling" name="txtStateProvinceBilling" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label for="txtTelephoneBilling" class="col-lg-3 col-form-label">Product Category</label>
                                                                <div class="col-lg-9">
                                                                    <input id="txtTelephoneBilling" name="txtTelephoneBilling" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label for="txtFaxBilling" class="col-lg-3 col-form-label">Product Sub Category</label>
                                                                <div class="col-lg-9">
                                                                    <input id="txtFaxBilling" name="txtFaxBilling" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <h3>Company Document</h3>
                                                <fieldset>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label for="txtFirstNameShipping" class="col-lg-3 col-form-label">PAN Card</label>
                                                                <div class="col-lg-9">
                                                                    <input id="txtFirstNameShipping" name="txtFirstNameShipping" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label for="txtLastNameShipping" class="col-lg-3 col-form-label">VAT/TIN No.</label>
                                                                <div class="col-lg-9">
                                                                    <input id="txtLastNameShipping" name="txtLastNameShipping" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label for="txtCompanyShipping" class="col-lg-3 col-form-label">CST No.</label>
                                                                <div class="col-lg-9">
                                                                    <input id="txtCompanyShipping" name="txtCompanyShipping" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Service Tax No.</label>
                                                                <div class="col-lg-9">
                                                                    <input id="txtEmailAddressShipping" name="txtEmailAddressShipping" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label for="txtCityShipping" class="col-lg-3 col-form-label">Company UIN</label>
                                                                <div class="col-lg-9">
                                                                    <input id="txtCityShipping" name="txtCityShipping" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label for="txtStateProvinceShipping" class="col-lg-3 col-form-label">Declaration</label>
                                                                <div class="col-lg-9">
                                                                    <input id="txtStateProvinceShipping" name="txtStateProvinceShipping" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </fieldset>
                                                <h3>Bank Details</h3>
                                                <fieldset>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label for="txtNameCard" class="col-lg-3 col-form-label">Name on Card</label>
                                                                <div class="col-lg-9">
                                                                    <input id="txtNameCard" name="txtNameCard" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label for="ddlCreditCardType" class="col-lg-3 col-form-label">Credit Card Type</label>
                                                                <div class="col-lg-9">
                                                                    <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control">
                                                                        <option value="">--Please Select--</option>
                                                                        <option value="AE">American Express</option>
                                                                        <option value="VI">Visa</option>
                                                                        <option value="MC">MasterCard</option>
                                                                        <option value="DI">Discover</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label for="txtCreditCardNumber" class="col-lg-3 col-form-label">Credit Card Number</label>
                                                                <div class="col-lg-9">
                                                                    <input id="txtCreditCardNumber" name="txtCreditCardNumber" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label for="txtCardVerificationNumber" class="col-lg-3 col-form-label">Card Verification Number</label>
                                                                <div class="col-lg-9">
                                                                    <input id="txtCardVerificationNumber" name="txtCardVerificationNumber" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label for="txtExpirationDate" class="col-lg-3 col-form-label">Expiration Date</label>
                                                                <div class="col-lg-9">
                                                                    <input id="txtExpirationDate" name="txtExpirationDate" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <h3>Confirm Detail</h3>
                                                <fieldset>
                                                    <div class="p-3">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                            <label class="custom-control-label" for="customCheck1">I agree with the Terms and Conditions.</label>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </form>


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
        
        <script src="public/plugins/jquery-steps/jquery.steps.min.js"></script>

        <!-- App js -->
        <script src="public/assets/js/app.js"></script>

        <script>
            $(function ()
            {
                $("#form-horizontal").steps({
                    headerTag: "h3",
                    bodyTag: "fieldset",
                    transitionEffect: "slide"
                });
            });
        </script>

    </body>
</html>