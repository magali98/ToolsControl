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
                                    <h3 class="page-title">Inbox</h3>
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
                                    <!-- Left sidebar -->
                                    <div class="email-leftbar">
                                        <a href="email-compose.php" class="btn btn-danger btn-rounded btn-custom btn-block waves-effect waves-light">Compose</a>

                                        <div class="mail-list m-t-20">
                                            <a href="#" class="active">Inbox <span class="ml-1">(18)</span></a>
                                            <a href="#">Starred</a>
                                            <a href="#">Important</a>
                                            <a href="#">Draft</a>
                                            <a href="#">Sent Mail</a>
                                            <a href="#">Trash</a>
                                        </div>


                                        <h6 class="m-t-30">Labels</h6>

                                        <div class="mail-list m-t-20">
                                            <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-info float-right mt-1 m-l-10"></span>Theme Support</a>
                                            <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-warning float-right mt-1 m-l-10"></span>Freelance</a>
                                            <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-purple float-right mt-1 m-l-10"></span>Social</a>
                                            <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-pink float-right mt-1 m-l-10"></span>Friends</a>
                                            <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-success float-right mt-1 m-l-10"></span>Family</a>
                                        </div>

                                        <h6 class="m-t-30">Chat</h6>

                                        <div class="m-t-20">
                                            <a href="#" class="media">
                                                <img class="d-flex mr-3 rounded-circle" src="public/assets/images/users/avatar-2.jpg" alt="Generic placeholder image" height="36">
                                                <div class="media-body chat-user-box">
                                                    <p class="user-title m-0">Scott Median</p>
                                                    <p class="text-muted">Hello</p>
                                                </div>
                                            </a>

                                            <a href="#" class="media">
                                                <img class="d-flex mr-3 rounded-circle" src="public/assets/images/users/avatar-3.jpg" alt="Generic placeholder image" height="36">
                                                <div class="media-body chat-user-box">
                                                    <p class="user-title m-0">Julian Rosa</p>
                                                    <p class="text-muted">What about our next..</p>
                                                </div>
                                            </a>

                                            <a href="#" class="media">
                                                <img class="d-flex mr-3 rounded-circle" src="public/assets/images/users/avatar-4.jpg" alt="Generic placeholder image" height="36">
                                                <div class="media-body chat-user-box">
                                                    <p class="user-title m-0">David Medina</p>
                                                    <p class="text-muted">Yeah everything is fine</p>
                                                </div>
                                            </a>

                                            <a href="#" class="media">
                                                <img class="d-flex mr-3 rounded-circle" src="public/assets/images/users/avatar-6.jpg" alt="Generic placeholder image" height="36">
                                                <div class="media-body chat-user-box">
                                                    <p class="user-title m-0">Jay Baker</p>
                                                    <p class="text-muted">Wow that's great</p>
                                                </div>
                                            </a>

                                        </div>
                                    </div>
                                    <!-- End Left sidebar -->


                                    <!-- Right Sidebar -->
                                    <div class="email-rightbar">
                                        <div class="btn-toolbar" role="toolbar">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary waves-light waves-effect"><i class="fa fa-inbox"></i></button>
                                                <button type="button" class="btn btn-primary waves-light waves-effect"><i class="fa fa-exclamation-circle"></i></button>
                                                <button type="button" class="btn btn-primary waves-light waves-effect"><i class="fa fa-trash-o"></i></button>
                                            </div>
                                            <div class="btn-group ml-1">
                                                <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-folder"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                    <a class="dropdown-item" href="#">Updates</a>
                                                    <a class="dropdown-item" href="#">Social</a>
                                                    <a class="dropdown-item" href="#">Team Manage</a>
                                                </div>
                                            </div>
                                            <div class="btn-group ml-1">
                                                <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-tag"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                    <a class="dropdown-item" href="#">Updates</a>
                                                    <a class="dropdown-item" href="#">Social</a>
                                                    <a class="dropdown-item" href="#">Team Manage</a>
                                                </div>
                                            </div>

                                            <div class="btn-group ml-1">
                                                <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    More
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                    <a class="dropdown-item" href="#">Mark as Unread</a>
                                                    <a class="dropdown-item" href="#">Mark as Important</a>
                                                    <a class="dropdown-item" href="#">Add to Tasks</a>
                                                    <a class="dropdown-item" href="#">Add Star</a>
                                                    <a class="dropdown-item" href="#">Mute</a>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="card m-t-20">
                                            <ul class="message-list">
                                                <li>
                                                    <a href="">
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk19">
                                                                <label for="chk19" class="toggle"></label>
                                                            </div>
                                                            <p class="title">Peter, me (3)</p><span class="star-toggle fa fa-star-o"></span>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <div class="subject">Hello &nbsp;–&nbsp; <span class="teaser">Trip home from Colombo has been arranged, then Jenna will come get me from Stockholm. :)</span>
                                                            </div>
                                                            <div class="date">Mar. 6</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk20">
                                                                <label for="chk20" class="toggle"></label>
                                                            </div>
                                                            <p class="title">me, Susanna (7)</p><span class="star-toggle fa fa-star-o"></span>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <div class="subject"><span class="badge-warning badge mr-2">Freelance</span>Since you asked... and i'm
                                                                inconceivably bored at the train station &nbsp;–&nbsp;
                                                                <span class="teaser">Alright thanks. I'll have to re-book that somehow, i'll get back to you.</span>
                                                            </div>
                                                            <div class="date">Mar. 6</div>
                                                        </div>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="">
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk6">
                                                                <label for="chk6" class="toggle"></label>
                                                            </div>
                                                            <p class="title">Web Support Dennis</p><span class="star-toggle fa fa-star-o"></span>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <div class="subject">Re: New mail settings &nbsp;–&nbsp;
                                                                <span class="teaser">Will you answer him asap?</span>
                                                            </div>
                                                            <div class="date">Mar 7</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk7">
                                                                <label for="chk7" class="toggle"></label>
                                                            </div>
                                                            <p class="title">me, Peter (2)</p><span class="star-toggle fa fa-star-o"></span>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <div class="subject"><span class="badge-info badge mr-2">Support</span>Off on Thursday &nbsp;–&nbsp;
                                                                <span class="teaser">Eff that place, you might as well stay here with us instead! Sent from my iPhone 4 &gt; 4 mar 2014 at 5:55 pm</span>
                                                            </div>
                                                            <div class="date">Mar 4</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk8">
                                                                <label for="chk8" class="toggle"></label>
                                                            </div>
                                                            <p class="title">Medium</p><span class="star-toggle fa fa-star-o"></span>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <div class="subject"><span class="badge-purple badge mr-2">Social</span>This Week's Top Stories &nbsp;–&nbsp;
                                                                <span class="teaser">Our top pick for you on Medium this week The Man Who Destroyed America’s Ego</span>
                                                            </div>
                                                            <div class="date">Feb 28</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk9">
                                                                <label for="chk9" class="toggle"></label>
                                                            </div>
                                                            <p class="title">Death to Stock</p><span class="star-toggle fa fa-star-o"></span>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <div class="subject">Montly High-Res Photos &nbsp;–&nbsp;
                                                                <span class="teaser">To create this month's pack, we hosted a party with local musician Jared Mahone here in Columbus, Ohio.</span>
                                                            </div>
                                                            <div class="date">Feb 28</div>
                                                        </div>
                                                    </a>
                                                </li>

                                                <li class="unread">
                                                    <a href="">
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk3">
                                                                <label for="chk3" class="toggle"></label>
                                                            </div>
                                                            <p class="title">Randy, me (5)</p><span class="star-toggle fa fa-star-o"></span>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <div class="subject"><span class="badge-success badge mr-2">Family</span>Last pic over my village &nbsp;–&nbsp;
                                                                <span class="teaser">Yeah i'd like that! Do you remember the video you showed me of your train ride between Colombo and Kandy? The one with the mountain view? I would love to see that one again!</span>
                                                            </div>
                                                            <div class="date">5:01 am</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk4">
                                                                <label for="chk4" class="toggle"></label>
                                                            </div>
                                                            <p class="title">Andrew Zimmer</p><span class="star-toggle fa fa-star-o"></span>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <div class="subject">Mochila Beta: Subscription Confirmed
                                                                &nbsp;–&nbsp; <span class="teaser">You've been confirmed! Welcome to the ruling class of the inbox. For your records, here is a copy of the information you submitted to us...</span>
                                                            </div>
                                                            <div class="date">Mar 8</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk5">
                                                                <label for="chk5" class="toggle"></label>
                                                            </div>
                                                            <p class="title">Infinity HR</p><span class="star-toggle fa fa-star-o"></span>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <div class="subject">Sveriges Hetaste sommarjobb &nbsp;–&nbsp;
                                                                <span class="teaser">Hej Nicklas Sandell! Vi vill bjuda in dig till "First tour 2014", ett rekryteringsevent som erbjuder jobb på 16 semesterorter iSverige.</span>
                                                            </div>
                                                            <div class="date">Mar 8</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk10">
                                                                <label for="chk10" class="toggle"></label>
                                                            </div>
                                                            <p class="title">Revibe</p><span class="star-toggle fa fa-star-o"></span>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <div class="subject"><span class="badge-pink badge mr-2">Friends</span>Weekend on Revibe &nbsp;–&nbsp;
                                                                <span class="teaser">Today's Friday and we thought maybe you want some music inspiration for the weekend. Here are some trending tracks and playlists we think you should give a listen!</span>
                                                            </div>
                                                            <div class="date">Feb 27</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk11">
                                                                <label for="chk11" class="toggle"></label>
                                                            </div>
                                                            <p class="title">Erik, me (5)</p><span class="star-toggle fa fa-star-o"></span>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <div class="subject">Regarding our meeting &nbsp;–&nbsp;
                                                                <span class="teaser">That's great, see you on Thursday!</span>
                                                            </div>
                                                            <div class="date">Feb 24</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk12">
                                                                <label for="chk12" class="toggle"></label>
                                                            </div>
                                                            <p class="title">KanbanFlow</p><span class="star-toggle fa fa-star-o"></span>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <div class="subject"><span class="badge-purple badge mr-2">Social</span>Task assigned: Clone ARP's website
                                                                &nbsp;–&nbsp; <span class="teaser">You have been assigned a task by Alex@Work on the board Web.</span>
                                                            </div>
                                                            <div class="date">Feb 24</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk13">
                                                                <label for="chk13" class="toggle"></label>
                                                            </div>
                                                            <p class="title">Tobias Berggren</p><span class="star-toggle fa fa-star-o"></span>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <div class="subject">Let's go fishing! &nbsp;–&nbsp;
                                                                <span class="teaser">Hey, You wanna join me and Fred at the lake tomorrow? It'll be awesome.</span>
                                                            </div>
                                                            <div class="date">Feb 23</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk14">
                                                                <label for="chk14" class="toggle"></label>
                                                            </div>
                                                            <p class="title">Charukaw, me (7)</p><span class="star-toggle fa fa-star-o"></span>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <div class="subject">Hey man &nbsp;–&nbsp; <span class="teaser">Nah man sorry i don't. Should i get it?</span>
                                                            </div>
                                                            <div class="date">Feb 23</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="unread">
                                                    <a href="">
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk15">
                                                                <label for="chk15" class="toggle"></label>
                                                            </div>
                                                            <p class="title">me, Peter (5)</p><span class="star-toggle fa fa-star-o"></span>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <div class="subject"><span class="badge-info badge mr-2">Support</span>Home again! &nbsp;–&nbsp; <span class="teaser">That's just perfect! See you tomorrow.</span>
                                                            </div>
                                                            <div class="date">Feb 21</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk16">
                                                                <label for="chk16" class="toggle"></label>
                                                            </div>
                                                            <p class="title">Stack Exchange</p><span class="star-toggle fa fa-star-o"></span>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <div class="subject">1 new items in your Stackexchange inbox
                                                                &nbsp;–&nbsp; <span class="teaser">The following items were added to your Stack Exchange global inbox since you last checked it.</span>
                                                            </div>
                                                            <div class="date">Feb 21</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk17">
                                                                <label for="chk17" class="toggle"></label>
                                                            </div>
                                                            <p class="title">Google Drive Team</p><span class="star-toggle fa fa-star-o"></span>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <div class="subject">You can now use your storage in Google
                                                                Drive &nbsp;–&nbsp; <span class="teaser">Hey Nicklas Sandell! Thank you for purchasing extra storage space in Google Drive.</span>
                                                            </div>
                                                            <div class="date">Feb 20</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk18">
                                                                <label for="chk18" class="toggle"></label>
                                                            </div>
                                                            <p class="title">me, Susanna (11)</p><span class="star-toggle fa fa-star-o"></span>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <div class="subject">Train/Bus &nbsp;–&nbsp; <span class="teaser">Yes ok, great! I'm not stuck in Stockholm anymore, we're making progress.</span>
                                                            </div>
                                                            <div class="date">Feb 19</div>
                                                        </div>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div> <!-- panel -->

                                        <div class="row m-t-20">
                                            <div class="col-7">
                                                Showing 1 - 20 of 1,524
                                            </div>
                                            <div class="col-5">
                                                <div class="btn-group pull-right">
                                                    <button type="button" class="btn btn-sm btn-success waves-effect"><i class="fa fa-chevron-left"></i></button>
                                                    <button type="button" class="btn btn-sm btn-success waves-effect"><i class="fa fa-chevron-right"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end Col-9 -->
                                </div>
                            </div><!-- End row -->
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