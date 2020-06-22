<?php include 'layouts/header.php'; ?>

<?php include 'layouts/headerStyle.php'; ?>

    <body class="fixed-left">

        <?php include 'layouts/loader.php'; ?>

        <!-- Begin page -->
        <div id="wrapper">

            <?php include 'layouts/navbar.php'; ?>

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
                                        English <img src="assets/images/flags/us_flag.jpg" class="ml-2" height="16" alt=""/>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right language-switch">
                                        <a class="dropdown-item" href="#"><img src="assets/images/flags/germany_flag.jpg" alt="" height="16"/><span> German </span></a>
                                        <a class="dropdown-item" href="#"><img src="assets/images/flags/italy_flag.jpg" alt="" height="16"/><span> Italian </span></a>
                                        <a class="dropdown-item" href="#"><img src="assets/images/flags/french_flag.jpg" alt="" height="16"/><span> French </span></a>
                                        <a class="dropdown-item" href="#"><img src="assets/images/flags/spain_flag.jpg" alt="" height="16"/><span> Spanish </span></a>
                                        <a class="dropdown-item" href="#"><img src="assets/images/flags/russia_flag.jpg" alt="" height="16"/><span> Russian </span></a>
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
                                        <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
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
                                    <h3 class="page-title">Buttons</h3>
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

                                            <h4 class="mt-0 header-title">Examples</h4>
                                            <p class="text-muted m-b-30 font-14">Bootstrap includes six predefined button styles, each serving its own semantic purpose.</p>

                                            <div class="button-items">
                                                <button type="button" class="btn btn-primary waves-effect waves-light">Primary</button>

                                                <button type="button" class="btn btn-secondary waves-effect">Secondary</button>

                                                <button type="button" class="btn btn-success waves-effect waves-light">Success</button>

                                                <button type="button" class="btn btn-info waves-effect waves-light">Info</button>

                                                <button type="button" class="btn btn-warning waves-effect waves-light">Warning</button>

                                                <button type="button" class="btn btn-danger waves-effect waves-light">Danger</button>

                                                <button type="button" class="btn btn-dark waves-effect waves-light">Dark</button>

                                                <button type="button" class="btn btn-link waves-effect">Link</button>

                                                <button type="button" class="btn btn-light waves-effect">Light</button>

                                                <button type="button" class="btn btn-purple waves-effect waves-light">Purple</button>

                                                <button type="button" class="btn btn-pink waves-effect waves-light">Pink</button>

                                                <button type="button" class="btn btn-brown waves-effect waves-light">Brown</button>

                                                <button type="button" class="btn btn-blue-grey waves-effect waves-light">Blue-grey</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Outline buttons</h4>
                                            <p class="text-muted m-b-30 font-14">In need of a button, but not the hefty
                                                background colors they bring? Replace the default modifier classes with
                                                the <code class="highlighter-rouge">.btn-outline-*</code> ones to remove
                                                all background images and colors on any button.</p>

                                            <div class="button-items">
                                                <button type="button" class="btn btn-outline-primary waves-effect waves-light">Primary</button>
                                                <button type="button" class="btn btn-outline-secondary waves-effect">Secondary</button>
                                                <button type="button" class="btn btn-outline-success waves-effect waves-light">Success</button>
                                                <button type="button" class="btn btn-outline-info waves-effect waves-light">Info</button>
                                                <button type="button" class="btn btn-outline-warning waves-effect waves-light">Warning</button>
                                                <button type="button" class="btn btn-outline-danger waves-effect waves-light">Danger</button>
                                                <button type="button" class="btn btn-outline-dark waves-effect waves-light">Dark</button>
                                                <button type="button" class="btn btn-outline-pink waves-effect waves-light">Pink</button>
                                                <button type="button" class="btn btn-outline-purple waves-effect waves-light">Purple</button>
                                                <button type="button" class="btn btn-outline-light waves-effect waves-light">Light</button>
                                                <button type="button" class="btn btn-outline-brown waves-effect waves-light">Brown</button>
                                                <button type="button" class="btn btn-outline-blue-grey waves-effect waves-light">Blue Grey</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Button tags</h4>
                                            <p class="text-muted m-b-30 font-14">The <code class="highlighter-rouge">.btn</code>
                                                classes are designed to be used with the <code
                                                        class="highlighter-rouge">&lt;button&gt;</code> element.
                                                However, you can also use these classes on <code
                                                        class="highlighter-rouge">&lt;a&gt;</code> or <code
                                                        class="highlighter-rouge">&lt;input&gt;</code> elements (though
                                                some browsers may apply a slightly different rendering).</p>

                                            <div class="button-items">
                                                <a class="btn btn-primary waves-effect waves-light" href="#" role="button">Link</a>
                                                <button class="btn btn-success waves-effect waves-light" type="submit">Button</button>
                                                <input class="btn btn-info" type="button" value="Input">
                                                <input class="btn btn-purple" type="submit" value="Submit">
                                                <input class="btn btn-brown" type="reset" value="Reset">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Sizes</h4>
                                            <p class="text-muted m-b-30 font-14">Fancy larger or smaller buttons? Add
                                                <code class="highlighter-rouge">.btn-lg</code> or <code
                                                        class="highlighter-rouge">.btn-sm</code> for additional sizes.
                                            </p>

                                            <div class="button-items">
                                                <button type="button" class="btn btn-primary btn-lg waves-effect waves-light">Large button</button>
                                                <button type="button" class="btn btn-secondary btn-lg waves-effect">Large button</button>
                                                <button type="button" class="btn btn-pink btn-sm waves-effect waves-light">Small button</button>
                                                <button type="button" class="btn btn-secondary btn-sm waves-effect">Small button</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Block Buttons</h4>
                                            <p class="text-muted m-b-30 font-14">Create block level buttons—those that
                                                span the full width of a parent—by adding <code
                                                        class="highlighter-rouge">.btn-block</code>.</p>

                                            <div class="button-items">
                                                <button type="button" class="btn btn-primary btn-lg btn-block waves-effect waves-light">Block level button</button>
                                                <button type="button" class="btn btn-secondary btn-sm btn-block waves-effect">Block level button</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Toggle states</h4>
                                            <p class="text-muted m-b-30 font-14">Add <code class="highlighter-rouge">data-toggle="button"</code>
                                                to toggle a button’s <code class="highlighter-rouge">active</code>
                                                state. If you’re pre-toggling a button, you must manually add the <code
                                                        class="highlighter-rouge">.active</code> class
                                                <strong>and</strong> <code
                                                        class="highlighter-rouge">aria-pressed="true"</code> to the
                                                <code class="highlighter-rouge">&lt;button&gt;</code>.
                                            </p>

                                            <div class="button-items">
                                                <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="button" aria-pressed="false" autocomplete="off">
                                                    Single toggle
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Checkbox buttons</h4>
                                            <p class="text-muted m-b-30 font-14">Bootstrap’s <code
                                                    class="highlighter-rouge">.button</code> styles can be applied to
                                                other elements, such as <code class="highlighter-rouge">
                                                    &lt;label&gt;</code>s, to provide checkbox or radio style button
                                                toggling. Add <code
                                                        class="highlighter-rouge">data-toggle="buttons"</code> to a
                                                <code class="highlighter-rouge">.btn-group</code> containing those
                                                modified buttons to enable toggling in their respective styles.</p>
                                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                <label class="btn btn-secondary active">
                                                    <input type="checkbox" checked autocomplete="off"> Checked-1
                                                </label>
                                                <label class="btn btn-secondary active">
                                                    <input type="checkbox" checked autocomplete="off"> Checked-2
                                                </label>
                                                <label class="btn btn-secondary active">
                                                    <input type="checkbox" checked autocomplete="off"> Checked-3
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Radio buttons</h4>
                                            <p class="text-muted m-b-30 font-14">Bootstrap’s <code
                                                    class="highlighter-rouge">.button</code> styles can be applied to
                                                other elements, such as <code class="highlighter-rouge">
                                                    &lt;label&gt;</code>s, to provide checkbox or radio style button
                                                toggling. Add <code
                                                        class="highlighter-rouge">data-toggle="buttons"</code> to a
                                                <code class="highlighter-rouge">.btn-group</code> containing those
                                                modified buttons to enable toggling in their respective styles.</p>
                                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                <label class="btn btn-primary active">
                                                    <input type="radio" name="options" id="option1" autocomplete="off" checked> Active
                                                </label>
                                                <label class="btn btn-primary">
                                                    <input type="radio" name="options" id="option2" autocomplete="off"> Radio
                                                </label>
                                                <label class="btn btn-primary">
                                                    <input type="radio" name="options" id="option3" autocomplete="off"> Radio
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Button group</h4>
                                            <p class="text-muted m-b-30 font-14">Wrap a series of buttons with <code
                                                    class="highlighter-rouge">.btn</code> in <code
                                                    class="highlighter-rouge">.btn-group</code>.</p>

                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-secondary">Left</button>
                                                <button type="button" class="btn btn-secondary">Middle</button>
                                                <button type="button" class="btn btn-secondary">Right</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Button toolbar</h4>
                                            <p class="text-muted m-b-30 font-14">Combine sets of button groups into
                                                button toolbars for more complex components. Use utility classes as
                                                needed to space out groups, buttons, and more.</p>

                                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                                <div class="btn-group mr-2" role="group" aria-label="First group">
                                                    <button type="button" class="btn btn-secondary">1</button>
                                                    <button type="button" class="btn btn-secondary">2</button>
                                                    <button type="button" class="btn btn-secondary">3</button>
                                                    <button type="button" class="btn btn-secondary">4</button>
                                                </div>
                                                <div class="btn-group mr-2" role="group" aria-label="Second group">
                                                    <button type="button" class="btn btn-secondary">5</button>
                                                    <button type="button" class="btn btn-secondary">6</button>
                                                    <button type="button" class="btn btn-secondary">7</button>
                                                </div>
                                                <div class="btn-group" role="group" aria-label="Third group">
                                                    <button type="button" class="btn btn-secondary">8</button>
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

                                            <h4 class="mt-0 header-title">Sizing</h4>
                                            <p class="text-muted m-b-30 font-14">Instead of applying button sizing
                                                classes to every button in a group, just add <code
                                                        class="highlighter-rouge">.btn-group-*</code> to each <code
                                                        class="highlighter-rouge">.btn-group</code>, including each one
                                                when nesting multiple groups.</p>

                                            <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-secondary">Left</button>
                                                <button type="button" class="btn btn-secondary">Middle</button>
                                                <button type="button" class="btn btn-secondary">Right</button>
                                            </div>

                                            <br/>

                                            <div class="btn-group m-t-10" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-secondary">Left</button>
                                                <button type="button" class="btn btn-secondary">Middle</button>
                                                <button type="button" class="btn btn-secondary">Right</button>
                                            </div>

                                            <br/>

                                            <div class="btn-group btn-group-sm m-t-10" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-secondary">Left</button>
                                                <button type="button" class="btn btn-secondary">Middle</button>
                                                <button type="button" class="btn btn-secondary">Right</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Vertical variation</h4>
                                            <p class="text-muted m-b-30 font-14">Make a set of buttons appear vertically
                                                stacked rather than horizontally. Split button dropdowns are not
                                                supported here.</p>

                                            <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                                                <button type="button" class="btn btn-secondary">Button</button>
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupVerticalDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropdown
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-secondary">Button</button>
                                                <button type="button" class="btn btn-secondary">Button</button>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->
                <?php include 'layouts/footer.php'; ?>


            </div>
        </div>
        <!-- END wrapper -->

        <?php include 'layouts/footerScript.php'; ?>

        <!-- App js -->
        <script src="public/assets/js/app.js"></script>

    </body>
</html>