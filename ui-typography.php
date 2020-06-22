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
                                    <h3 class="page-title">Typography</h3>
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

                                            <h4 class="mt-0 header-title">Headings</h4>
                                            <p class="text-muted m-b-30 font-14">All HTML headings, <code
                                                    class="highlighter-rouge">&lt;h1&gt;</code> through <code
                                                    class="highlighter-rouge">&lt;h6&gt;</code>, are available.</p>

                                            <h1>h1. Bootstrap heading <small class="text-muted font-14">Semibold 2.5rem (40px)</small></h1>
                                            <h2>h2. Bootstrap heading <small class="text-muted font-14">Semibold 2rem (32px)</small></h2>
                                            <h3>h3. Bootstrap heading <small class="text-muted font-14">Semibold 1.75rem (28px)</small></h3>
                                            <h4>h4. Bootstrap heading <small class="text-muted font-14">Semibold 1.5rem (24px)</small></h4>
                                            <h5>h5. Bootstrap heading <small class="text-muted font-14">Semibold 1.25rem (20px)</small></h5>
                                            <h6>h6. Bootstrap heading <small class="text-muted font-14">Semibold 1rem (16px)</small></h6>
                                        </div>
                                    </div>

                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Inline text elements</h4>
                                            <p class="text-muted m-b-30 font-14">Styling for common inline HTML5 elements.</p>

                                            <p>You can use the mark tag to <mark>highlight</mark> text.</p>
                                            <p><del>This line of text is meant to be treated as deleted text.</del></p>
                                            <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
                                            <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
                                            <p><u>This line of text will render as underlined</u></p>
                                            <p><small>This line of text is meant to be treated as fine print.</small></p>
                                            <p><strong>This line rendered as bold text.</strong></p>
                                            <p><em>This line rendered as italicized text.</em></p>
                                        </div>
                                    </div>

                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Unstyled List</h4>
                                            <p class="text-muted m-b-30 font-14">Remove the default <code
                                                    class="highlighter-rouge">list-style</code> and left margin on list
                                                items (immediate children only). <strong>This only applies to immediate
                                                    children list items</strong>, meaning you will need to add the class
                                                for any nested lists as well.</p>

                                            <ul class="list-unstyled">
                                                <li>Integer molestie lorem at massa</li>
                                                <li>Nulla volutpat aliquam velit
                                                    <ul>
                                                        <li>Phasellus iaculis neque</li>
                                                        <li>Purus sodales ultricies</li>
                                                        <li>Vestibulum laoreet porttitor sem</li>
                                                    </ul>
                                                </li>
                                                <li>Faucibus porta lacus fringilla vel</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div> <!-- end col -->

                                <div class="col-lg-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Display headings</h4>
                                            <p class="text-muted m-b-30 font-14">Traditional heading elements are designed to work best in the meat of your page content. </p>

                                            <h1 class="display-1">Display 1</h1>
                                            <h1 class="display-2">Display 2</h1>
                                            <h1 class="display-3">Display 3</h1>
                                            <h1 class="display-4">Display 4</h1>

                                        </div>
                                    </div>

                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Blockquotes</h4>
                                            <p class="text-muted m-b-30 font-14">For quoting blocks of content from
                                                another source within your document. Wrap <code
                                                        class="highlighter-rouge">&lt;blockquote
                                                    class="blockquote"&gt;</code> around any <abbr
                                                        title="HyperText Markup Language">HTML</abbr> as the quote.</p>

                                            <blockquote class="blockquote font-18">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                            </blockquote>

                                            <blockquote class="blockquote blockquote-reverse font-18">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                            </blockquote>
                                        </div>
                                    </div>

                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Inline List</h4>
                                            <p class="text-muted m-b-30 font-14">Remove a list’s bullets and apply some
                                                light <code class="highlighter-rouge">margin</code> with a combination
                                                of two classes, <code class="highlighter-rouge">.list-inline</code> and
                                                <code class="highlighter-rouge">.list-inline-item</code>.</p>

                                            <ul class="list-inline">
                                                <li class="list-inline-item">Lorem ipsum</li>
                                                <li class="list-inline-item">Phasellus iaculis</li>
                                                <li class="list-inline-item">Nulla volutpat</li>
                                            </ul>

                                        </div>
                                    </div>

                                </div> <!-- end col -->
                            </div> <!-- end row -->

                            <div class="row">
                                <div class="col-12">

                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Description list alignment</h4>
                                            <p class="text-muted m-b-30 font-14">Align terms and descriptions
                                                horizontally by using our grid system’s predefined classes (or semantic
                                                mixins). For longer terms, you can optionally add a <code
                                                        class="highlighter-rouge">.text-truncate</code> class to
                                                truncate the text with an ellipsis.</p>

                                            <dl class="row mb-0">
                                                <dt class="col-sm-3">Description lists</dt>
                                                <dd class="col-sm-9">A description list is perfect for defining terms.</dd>

                                                <dt class="col-sm-3">Euismod</dt>
                                                <dd class="col-sm-9">Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                                                <dd class="col-sm-9 offset-sm-3">Donec id elit non mi porta gravida at eget metus.</dd>

                                                <dt class="col-sm-3">Malesuada porta</dt>
                                                <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>

                                                <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
                                                <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>

                                                <dt class="col-sm-3">Nesting</dt>
                                                <dd class="col-sm-9">
                                                    <dl class="row mb-0">
                                                        <dt class="col-sm-4">Nested definition list</dt>
                                                        <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
                                                    </dl>
                                                </dd>
                                            </dl>

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