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
                                    <h3 class="page-title">Tabs</h3>
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
                                <div class="col-lg-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Default Tabs</h4>
                                            <p class="text-muted m-b-30 font-14">Use the tab JavaScript plugin—include
                                                it individually or through the compiled <code class="highlighter-rouge">bootstrap.js</code>
                                                file—to extend our navigational tabs and pills to create tabbable panes
                                                of local content, even via dropdown menus.</p>

                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#home" role="tab">
                                                        <span class="d-none d-md-block">Home</span><span class="d-block d-md-none"><i class="mdi mdi-home-variant h5"></i></span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#profile" role="tab">
                                                        <span class="d-none d-md-block">Profile</span><span class="d-block d-md-none"><i class="mdi mdi-account h5"></i></span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#messages" role="tab">
                                                        <span class="d-none d-md-block">Messages</span><span class="d-block d-md-none"><i class="mdi mdi-email h5"></i></span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#settings" role="tab">
                                                        <span class="d-none d-md-block">Settings</span><span class="d-block d-md-none"><i class="mdi mdi-settings h5"></i></span>
                                                    </a>
                                                </li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div class="tab-pane active p-3" id="home" role="tabpanel">
                                                    <p class="font-14 mb-0">
                                                        Raw denim you probably haven't heard of them jean shorts Austin.
                                                        Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                        cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                        butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                                        qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                                        iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                        voluptate nisi qui.
                                                    </p>
                                                </div>
                                                <div class="tab-pane p-3" id="profile" role="tabpanel">
                                                    <p class="font-14 mb-0">
                                                        Food truck fixie locavore, accusamus mcsweeney's marfa nulla
                                                        single-origin coffee squid. Exercitation +1 labore velit, blog
                                                        sartorial PBR leggings next level wes anderson artisan four loko
                                                        farm-to-table craft beer twee. Qui photo booth letterpress,
                                                        commodo enim craft beer mlkshk aliquip jean shorts ullamco ad
                                                        vinyl cillum PBR. Homo nostrud organic, assumenda labore
                                                        aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr,
                                                        vero magna velit sapiente labore stumptown. Vegan fanny pack
                                                        odio cillum wes anderson 8-bit.
                                                    </p>
                                                </div>
                                                <div class="tab-pane p-3" id="messages" role="tabpanel">
                                                    <p class="font-14 mb-0">
                                                        Etsy mixtape wayfarers, ethical wes anderson tofu before they
                                                        sold out mcsweeney's organic lomo retro fanny pack lo-fi
                                                        farm-to-table readymade. Messenger bag gentrify pitchfork
                                                        tattooed craft beer, iphone skateboard locavore carles etsy
                                                        salvia banksy hoodie helvetica. DIY synth PBR banksy irony.
                                                        Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh
                                                        mi whatever gluten-free, carles pitchfork biodiesel fixie etsy
                                                        retro mlkshk vice blog. Scenester cred you probably haven't
                                                        heard of them, vinyl craft beer blog stumptown. Pitchfork
                                                        sustainable tofu synth chambray yr.
                                                    </p>
                                                </div>
                                                <div class="tab-pane p-3" id="settings" role="tabpanel">
                                                    <p class="font-14 mb-0">
                                                        Trust fund seitan letterpress, keytar raw denim keffiyeh etsy
                                                        art party before they sold out master cleanse gluten-free squid
                                                        scenester freegan cosby sweater. Fanny pack portland seitan DIY,
                                                        art party locavore wolf cliche high life echo park Austin. Cred
                                                        vinyl keffiyeh DIY salvia PBR, banh mi before they sold out
                                                        farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral,
                                                        mustache readymade thundercats keffiyeh craft beer marfa
                                                        ethical. Wolf salvia freegan, sartorial keffiyeh echo park
                                                        vegan.
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Justify Tabs</h4>
                                            <p class="text-muted m-b-30 font-14">Use the tab JavaScript plugin—include
                                                it individually or through the compiled <code class="highlighter-rouge">bootstrap.js</code>
                                                file—to extend our navigational tabs and pills to create tabbable panes
                                                of local content, even via dropdown menus.</p>

                                            <!-- Nav tabs -->
                                            <ul class="nav nav-pills nav-justified" role="tablist">
                                                <li class="nav-item waves-effect waves-light">
                                                    <a class="nav-link active" data-toggle="tab" href="#home-1" role="tab">
                                                        <span class="d-none d-md-block">Home</span><span class="d-block d-md-none"><i class="mdi mdi-home-variant h5"></i></span>
                                                    </a>
                                                </li>
                                                <li class="nav-item waves-effect waves-light">
                                                    <a class="nav-link" data-toggle="tab" href="#profile-1" role="tab">
                                                        <span class="d-none d-md-block">Profile</span><span class="d-block d-md-none"><i class="mdi mdi-account h5"></i></span>
                                                    </a>
                                                </li>
                                                <li class="nav-item waves-effect waves-light">
                                                    <a class="nav-link" data-toggle="tab" href="#messages-1" role="tab">
                                                        <span class="d-none d-md-block">Messages</span><span class="d-block d-md-none"><i class="mdi mdi-email h5"></i></span>
                                                    </a>
                                                </li>
                                                <li class="nav-item waves-effect waves-light">
                                                    <a class="nav-link" data-toggle="tab" href="#settings-1" role="tab">
                                                        <span class="d-none d-md-block">Settings</span><span class="d-block d-md-none"><i class="mdi mdi-settings h5"></i></span>
                                                    </a>
                                                </li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div class="tab-pane active p-3" id="home-1" role="tabpanel">
                                                    <p class="font-14 mb-0">
                                                        Raw denim you probably haven't heard of them jean shorts Austin.
                                                        Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                        cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                        butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                                        qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                                        iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                        voluptate nisi qui.
                                                    </p>
                                                </div>
                                                <div class="tab-pane p-3" id="profile-1" role="tabpanel">
                                                    <p class="font-14 mb-0">
                                                        Food truck fixie locavore, accusamus mcsweeney's marfa nulla
                                                        single-origin coffee squid. Exercitation +1 labore velit, blog
                                                        sartorial PBR leggings next level wes anderson artisan four loko
                                                        farm-to-table craft beer twee. Qui photo booth letterpress,
                                                        commodo enim craft beer mlkshk aliquip jean shorts ullamco ad
                                                        vinyl cillum PBR. Homo nostrud organic, assumenda labore
                                                        aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr,
                                                        vero magna velit sapiente labore stumptown. Vegan fanny pack
                                                        odio cillum wes anderson 8-bit.
                                                    </p>
                                                </div>
                                                <div class="tab-pane p-3" id="messages-1" role="tabpanel">
                                                    <p class="font-14 mb-0">
                                                        Etsy mixtape wayfarers, ethical wes anderson tofu before they
                                                        sold out mcsweeney's organic lomo retro fanny pack lo-fi
                                                        farm-to-table readymade. Messenger bag gentrify pitchfork
                                                        tattooed craft beer, iphone skateboard locavore carles etsy
                                                        salvia banksy hoodie helvetica. DIY synth PBR banksy irony.
                                                        Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh
                                                        mi whatever gluten-free, carles pitchfork biodiesel fixie etsy
                                                        retro mlkshk vice blog. Scenester cred you probably haven't
                                                        heard of them, vinyl craft beer blog stumptown. Pitchfork
                                                        sustainable tofu synth chambray yr.
                                                    </p>
                                                </div>
                                                <div class="tab-pane p-3" id="settings-1" role="tabpanel">
                                                    <p class="font-14 mb-0">
                                                        Trust fund seitan letterpress, keytar raw denim keffiyeh etsy
                                                        art party before they sold out master cleanse gluten-free squid
                                                        scenester freegan cosby sweater. Fanny pack portland seitan DIY,
                                                        art party locavore wolf cliche high life echo park Austin. Cred
                                                        vinyl keffiyeh DIY salvia PBR, banh mi before they sold out
                                                        farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral,
                                                        mustache readymade thundercats keffiyeh craft beer marfa
                                                        ethical. Wolf salvia freegan, sartorial keffiyeh echo park
                                                        vegan.
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Custom Tabs</h4>
                                            <p class="text-muted m-b-30 font-14">Example of custom tabs</p>

                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#home1" role="tab">
                                                        <span class="d-none d-md-block">Home</span><span class="d-block d-md-none"><i class="mdi mdi-home-variant h5"></i></span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#profile1" role="tab">
                                                        <span class="d-none d-md-block">Profile</span><span class="d-block d-md-none"><i class="mdi mdi-account h5"></i></span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#messages1" role="tab">
                                                        <span class="d-none d-md-block">Messages</span><span class="d-block d-md-none"><i class="mdi mdi-email h5"></i></span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#settings1" role="tab">
                                                        <span class="d-none d-md-block">Settings</span><span class="d-block d-md-none"><i class="mdi mdi-settings h5"></i></span>
                                                    </a>
                                                </li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div class="tab-pane active p-3" id="home1" role="tabpanel">
                                                    <p class="font-14 mb-0">
                                                        Raw denim you probably haven't heard of them jean shorts Austin.
                                                        Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                        cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                        butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                                        qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                                        iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                        voluptate nisi qui.
                                                    </p>
                                                </div>
                                                <div class="tab-pane p-3" id="profile1" role="tabpanel">
                                                    <p class="font-14 mb-0">
                                                        Food truck fixie locavore, accusamus mcsweeney's marfa nulla
                                                        single-origin coffee squid. Exercitation +1 labore velit, blog
                                                        sartorial PBR leggings next level wes anderson artisan four loko
                                                        farm-to-table craft beer twee. Qui photo booth letterpress,
                                                        commodo enim craft beer mlkshk aliquip jean shorts ullamco ad
                                                        vinyl cillum PBR. Homo nostrud organic, assumenda labore
                                                        aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr,
                                                        vero magna velit sapiente labore stumptown. Vegan fanny pack
                                                        odio cillum wes anderson 8-bit.
                                                    </p>
                                                </div>
                                                <div class="tab-pane p-3" id="messages1" role="tabpanel">
                                                    <p class="font-14 mb-0">
                                                        Etsy mixtape wayfarers, ethical wes anderson tofu before they
                                                        sold out mcsweeney's organic lomo retro fanny pack lo-fi
                                                        farm-to-table readymade. Messenger bag gentrify pitchfork
                                                        tattooed craft beer, iphone skateboard locavore carles etsy
                                                        salvia banksy hoodie helvetica. DIY synth PBR banksy irony.
                                                        Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh
                                                        mi whatever gluten-free, carles pitchfork biodiesel fixie etsy
                                                        retro mlkshk vice blog. Scenester cred you probably haven't
                                                        heard of them, vinyl craft beer blog stumptown. Pitchfork
                                                        sustainable tofu synth chambray yr.
                                                    </p>
                                                </div>
                                                <div class="tab-pane p-3" id="settings1" role="tabpanel">
                                                    <p class="font-14 mb-0">
                                                        Trust fund seitan letterpress, keytar raw denim keffiyeh etsy
                                                        art party before they sold out master cleanse gluten-free squid
                                                        scenester freegan cosby sweater. Fanny pack portland seitan DIY,
                                                        art party locavore wolf cliche high life echo park Austin. Cred
                                                        vinyl keffiyeh DIY salvia PBR, banh mi before they sold out
                                                        farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral,
                                                        mustache readymade thundercats keffiyeh craft beer marfa
                                                        ethical. Wolf salvia freegan, sartorial keffiyeh echo park
                                                        vegan.
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Custom Tabs Justified</h4>
                                            <p class="text-muted m-b-30 font-14">Example of custom tabs</p>

                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#home2" role="tab">
                                                        <span class="d-none d-md-block">Home</span><span class="d-block d-md-none"><i class="mdi mdi-home-variant h5"></i></span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#profile2" role="tab">
                                                        <span class="d-none d-md-block">Profile</span><span class="d-block d-md-none"><i class="mdi mdi-account h5"></i></span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#messages2" role="tab">
                                                        <span class="d-none d-md-block">Messages</span><span class="d-block d-md-none"><i class="mdi mdi-email h5"></i></span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#settings2" role="tab">
                                                        <span class="d-none d-md-block">Settings</span><span class="d-block d-md-none"><i class="mdi mdi-settings h5"></i></span>
                                                    </a>
                                                </li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div class="tab-pane active p-3" id="home2" role="tabpanel">
                                                    <p class="font-14 mb-0">
                                                        Raw denim you probably haven't heard of them jean shorts Austin.
                                                        Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                        cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                        butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                                        qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                                        iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                        voluptate nisi qui.
                                                    </p>
                                                </div>
                                                <div class="tab-pane p-3" id="profile2" role="tabpanel">
                                                    <p class="font-14 mb-0">
                                                        Food truck fixie locavore, accusamus mcsweeney's marfa nulla
                                                        single-origin coffee squid. Exercitation +1 labore velit, blog
                                                        sartorial PBR leggings next level wes anderson artisan four loko
                                                        farm-to-table craft beer twee. Qui photo booth letterpress,
                                                        commodo enim craft beer mlkshk aliquip jean shorts ullamco ad
                                                        vinyl cillum PBR. Homo nostrud organic, assumenda labore
                                                        aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr,
                                                        vero magna velit sapiente labore stumptown. Vegan fanny pack
                                                        odio cillum wes anderson 8-bit.
                                                    </p>
                                                </div>
                                                <div class="tab-pane p-3" id="messages2" role="tabpanel">
                                                    <p class="font-14 mb-0">
                                                        Etsy mixtape wayfarers, ethical wes anderson tofu before they
                                                        sold out mcsweeney's organic lomo retro fanny pack lo-fi
                                                        farm-to-table readymade. Messenger bag gentrify pitchfork
                                                        tattooed craft beer, iphone skateboard locavore carles etsy
                                                        salvia banksy hoodie helvetica. DIY synth PBR banksy irony.
                                                        Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh
                                                        mi whatever gluten-free, carles pitchfork biodiesel fixie etsy
                                                        retro mlkshk vice blog. Scenester cred you probably haven't
                                                        heard of them, vinyl craft beer blog stumptown. Pitchfork
                                                        sustainable tofu synth chambray yr.
                                                    </p>
                                                </div>
                                                <div class="tab-pane p-3" id="settings2" role="tabpanel">
                                                    <p class="font-14 mb-0">
                                                        Trust fund seitan letterpress, keytar raw denim keffiyeh etsy
                                                        art party before they sold out master cleanse gluten-free squid
                                                        scenester freegan cosby sweater. Fanny pack portland seitan DIY,
                                                        art party locavore wolf cliche high life echo park Austin. Cred
                                                        vinyl keffiyeh DIY salvia PBR, banh mi before they sold out
                                                        farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral,
                                                        mustache readymade thundercats keffiyeh craft beer marfa
                                                        ethical. Wolf salvia freegan, sartorial keffiyeh echo park
                                                        vegan.
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>


                            <!-- Collapse -->
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Default Collapse</h4>
                                            <p class="text-muted m-b-30 font-14">
                                                You can use a link with the <code class="highlighter-rouge">href</code>
                                                attribute, or a button with the <code class="highlighter-rouge">data-target</code>
                                                attribute. In both cases, the <code class="highlighter-rouge">data-toggle="collapse"</code>
                                                is required.
                                            </p>

                                            <p>
                                                <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                                    Link with href
                                                </a>
                                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                                    Button with data-target
                                                </button>
                                            </p>
                                            <div class="collapse show" id="collapseExample">
                                                <div class="card card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Accordion example</h4>
                                            <p class="text-muted m-b-30 font-14">Extend the default collapse behavior to create an accordion.</p>


                                            <div id="accordion">
                                                <div class="card">
                                                    <div class="card-header p-3" id="headingOne">
                                                        <h6 class="m-0">
                                                            <a href="#collapseOne" class="text-dark" data-toggle="collapse"
                                                                    aria-expanded="true"
                                                                    aria-controls="collapseOne">
                                                                Collapsible Group Item #1
                                                            </a>
                                                        </h6>
                                                    </div>

                                                    <div id="collapseOne" class="collapse show"
                                                         aria-labelledby="headingOne" data-parent="#accordion">
                                                        <div class="card-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                            accusamus terry richardson ad squid. 3 wolf moon officia
                                                            aute, non cupidatat skateboard dolor brunch. Food truck
                                                            quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                            sunt aliqua put a bird on it squid single-origin coffee
                                                            nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                            helvetica, craft beer labore wes anderson cred nesciunt
                                                            sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                                            Leggings occaecat craft beer farm-to-table, raw denim
                                                            aesthetic synth nesciunt you probably haven't heard of them
                                                            accusamus labore sustainable VHS.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header p-3" id="headingTwo">
                                                        <h6 class="m-0">
                                                            <a href="#collapseTwo" class="text-dark collapsed" data-toggle="collapse"
                                                                    aria-expanded="false"
                                                                    aria-controls="collapseTwo">
                                                                Collapsible Group Item #2
                                                            </a>
                                                        </h6>
                                                    </div>
                                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                         data-parent="#accordion">
                                                        <div class="card-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                            accusamus terry richardson ad squid. 3 wolf moon officia
                                                            aute, non cupidatat skateboard dolor brunch. Food truck
                                                            quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                            sunt aliqua put a bird on it squid single-origin coffee
                                                            nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                            helvetica, craft beer labore wes anderson cred nesciunt
                                                            sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                                            Leggings occaecat craft beer farm-to-table, raw denim
                                                            aesthetic synth nesciunt you probably haven't heard of them
                                                            accusamus labore sustainable VHS.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header p-3" id="headingThree">
                                                        <h6 class="m-0">
                                                            <a href="#collapseThree" class="text-dark collapsed" data-toggle="collapse"
                                                                    aria-expanded="false"
                                                                    aria-controls="collapseThree">
                                                                Collapsible Group Item #3
                                                            </a>
                                                        </h6>
                                                    </div>
                                                    <div id="collapseThree" class="collapse"
                                                         aria-labelledby="headingThree" data-parent="#accordion">
                                                        <div class="card-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                            accusamus terry richardson ad squid. 3 wolf moon officia
                                                            aute, non cupidatat skateboard dolor brunch. Food truck
                                                            quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                            sunt aliqua put a bird on it squid single-origin coffee
                                                            nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                            helvetica, craft beer labore wes anderson cred nesciunt
                                                            sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                                            Leggings occaecat craft beer farm-to-table, raw denim
                                                            aesthetic synth nesciunt you probably haven't heard of them
                                                            accusamus labore sustainable VHS.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
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

        <!-- App js -->
        <script src="public/assets/js/app.js"></script>

    </body>
</html>