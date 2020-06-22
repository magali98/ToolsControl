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
                                    <h3 class="page-title">Weather Icons</h3>
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
                                                class="wi wi-moonrise"&gt;&lt;/i&gt;</code>.
                                            </p>

                                            <div class="row icon-demo-content">
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-day-cloudy-high"></i> wi wi-day-cloudy-high
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moonrise"></i>wi wi-moonrise
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-na"></i>wi wi-na
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-volcano"></i>wi wi-volcano
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-day-light-wind"></i>wi wi-day-light-wind
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moonset"></i>wi wi-moonset
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-flood"></i>wi wi-flood
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-train"></i>wi wi-train
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-day-sleet"></i>wi wi-day-sleet
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-night-sleet"></i>wi wi-night-sleet
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-sandstorm"></i>wi wi-sandstorm
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-small-craft-advisory"></i>wi wi-small-craft-advisory
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-day-haze"></i>wi wi-day-haze
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-night-alt-sleet"></i>wi wi-night-alt-sleet
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-tsunami"></i>wi wi-tsunami
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-gale-warning"></i>wi wi-gale-warning
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-night-cloudy-high"></i>wi wi-night-cloudy-high
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-raindrop"></i>wi wi-raindrop
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-earthquake"></i>wi wi-earthquake
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-storm-warning"></i>wi wi-storm-warning
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-night-alt-partly-cloudy"></i>wi wi-night-alt-partly-cloudy
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-barometer"></i>wi wi-barometer
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-fire"></i>wi wi-fire
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-hurricane-warning"></i>wi wi-hurricane-warning
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-sleet"></i>wi wi-sleet
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-humidity"></i>wi wi-humidity
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-day-sunny"></i> wi wi-day-sunny
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-day-cloudy"></i> wi wi-day-cloudy
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-day-cloudy-gusts"></i> wi wi-day-cloudy-gusts
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-day-cloudy-windy"></i> wi wi-day-cloudy-windy
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-day-fog"></i> wi wi-day-fog
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-day-hail"></i> wi wi-day-hail
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-day-haze"></i> wi wi-day-haze
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-day-lightning"></i> wi wi-day-lightning
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-day-rain"></i> wi wi-day-rain
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-day-rain-mix"></i> wi wi-day-rain-mix
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-day-rain-wind"></i> wi wi-day-rain-wind
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-day-showers"></i> wi wi-day-showers
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-day-sleet"></i> wi wi-day-sleet
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-day-sleet-storm"></i> wi wi-day-sleet-storm
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-day-snow"></i> wi wi-day-snow
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-day-snow-thunderstorm"></i> wi wi-day-snow-thunderstorm
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-day-snow-wind"></i> wi wi-day-snow-wind
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-day-sprinkle"></i> wi wi-day-sprinkle
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-day-storm-showers"></i> wi wi-day-storm-showers
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-day-sunny-overcast"></i> wi wi-day-sunny-overcast
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-day-thunderstorm"></i> wi wi-day-thunderstorm
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-day-windy"></i> wi wi-day-windy
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-solar-eclipse"></i> wi wi-solar-eclipse
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-hot"></i> wi wi-hot
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-day-cloudy-high"></i> wi wi-day-cloudy-high
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-day-light-wind"></i> wi wi-day-light-wind
                                                </div>

                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-night-clear"></i> wi wi-night-clear
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-night-alt-cloudy"></i> wi wi-night-alt-cloudy
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-night-alt-cloudy-gusts"></i> wi wi-night-alt-cloudy-gusts
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-night-alt-cloudy-windy"></i> wi wi-night-alt-cloudy-windy
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-night-alt-hail"></i> wi wi-night-alt-hail
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-night-alt-lightning"></i> wi wi-night-alt-lightning
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-night-alt-rain"></i> wi wi-night-alt-rain
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-night-alt-rain-mix"></i> wi wi-night-alt-rain-mix
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-night-alt-rain-wind"></i> wi wi-night-alt-rain-wind
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-night-alt-showers"></i> wi wi-night-alt-showers
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-night-alt-sleet"></i> wi wi-night-alt-sleet
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-night-alt-sleet-storm"></i> wi wi-night-alt-sleet-storm
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-night-alt-snow"></i> wi wi-night-alt-snow
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-night-alt-snow-thunderstorm"></i> wi wi-night-alt-snow-thunderstorm
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-night-alt-snow-wind"></i> wi wi-night-alt-snow-wind
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-night-alt-sprinkle"></i> wi wi-night-alt-sprinkle
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-night-alt-storm-showers"></i> wi wi-night-alt-storm-showers
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-night-alt-thunderstorm"></i> wi wi-night-alt-thunderstorm
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-night-cloudy"></i> wi wi-night-cloudy
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-night-cloudy-gusts"></i> wi wi-night-cloudy-gusts
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-night-cloudy-windy"></i> wi wi-night-cloudy-windy
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-night-fog"></i> wi wi-night-fog
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-night-hail"></i> wi wi-night-hail
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-night-lightning"></i> wi wi-night-lightning
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-night-partly-cloudy"></i> wi wi-night-partly-cloudy
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-night-rain"></i> wi wi-night-rain
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-night-rain-mix"></i> wi wi-night-rain-mix
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-night-rain-wind"></i> wi wi-night-rain-wind
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-night-showers"></i> wi wi-night-showers
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-night-sleet"></i> wi wi-night-sleet
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-night-sleet-storm"></i> wi wi-night-sleet-storm
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-night-snow"></i> wi wi-night-snow
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-night-snow-thunderstorm"></i> wi wi-night-snow-thunderstorm
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-night-snow-wind"></i> wi wi-night-snow-wind
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-night-sprinkle"></i> wi wi-night-sprinkle
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-night-storm-showers"></i> wi wi-night-storm-showers
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-night-thunderstorm"></i> wi wi-night-thunderstorm
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-lunar-eclipse"></i> wi wi-lunar-eclipse
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-stars"></i> wi wi-stars
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-storm-showers"></i> wi wi-storm-showers
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-thunderstorm"></i> wi wi-thunderstorm
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-night-alt-cloudy-high"></i> wi wi-night-alt-cloudy-high
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-night-cloudy-high"></i> wi wi-night-cloudy-high
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-night-alt-partly-cloudy"></i> wi wi-night-alt-partly-cloudy
                                                </div>

                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-cloud"></i> wi wi-cloud
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-cloudy"></i> wi wi-cloudy
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-cloudy-gusts"></i> wi wi-cloudy-gusts
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-cloudy-windy"></i> wi wi-cloudy-windy
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-fog"></i> wi wi-fog
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-hail"></i> wi wi-hail
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-rain"></i> wi wi-rain
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-rain-mix"></i> wi wi-rain-mix
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-rain-wind"></i> wi wi-rain-wind
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-showers"></i> wi wi-showers
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-sleet"></i> wi wi-sleet
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-snow"></i> wi wi-snow
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-sprinkle"></i> wi wi-sprinkle
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-storm-showers"></i> wi wi-storm-showers
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-thunderstorm"></i> wi wi-thunderstorm
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-snow-wind"></i> wi wi-snow-wind
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-snow"></i> wi wi-snow
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-smog"></i> wi wi-smog
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-smoke"></i> wi wi-smoke
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-lightning"></i> wi wi-lightning
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-raindrops"></i> wi wi-raindrops
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-raindrop"></i> wi wi-raindrop
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-dust"></i> wi wi-dust
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-snowflake-cold"></i> wi wi-snowflake-cold
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-windy"></i> wi wi-windy
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-strong-wind"></i> wi wi-strong-wind
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-sandstorm"></i> wi wi-sandstorm
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-earthquake"></i> wi wi-earthquake
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-fire"></i> wi wi-fire
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-flood"></i> wi wi-flood
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-meteor"></i> wi wi-meteor
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-tsunami"></i> wi wi-tsunami
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-volcano"></i> wi wi-volcano
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-hurricane"></i> wi wi-hurricane
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-tornado"></i> wi wi-tornado
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-small-craft-advisory"></i> wi wi-small-craft-advisory
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-gale-warning"></i> wi wi-gale-warning
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-storm-warning"></i> wi wi-storm-warning
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-hurricane-warning"></i> wi wi-hurricane-warning
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-wind-direction"></i> wi wi-wind-direction
                                                </div>

                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-alien"></i> wi wi-alien
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-celsius"></i> wi wi-celsius
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-fahrenheit"></i> wi wi-fahrenheit
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-degrees"></i> wi wi-degrees
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-thermometer"></i> wi wi-thermometer
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-thermometer-exterior"></i> wi wi-thermometer-exterior
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-thermometer-internal"></i> wi wi-thermometer-internal
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-cloud-down"></i> wi wi-cloud-down
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-cloud-up"></i> wi wi-cloud-up
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-cloud-refresh"></i> wi wi-cloud-refresh
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-horizon"></i> wi wi-horizon
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-horizon-alt"></i> wi wi-horizon-alt
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-sunrise"></i> wi wi-sunrise
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-sunset"></i> wi wi-sunset
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moonrise"></i> wi wi-moonrise
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moonset"></i> wi wi-moonset
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-refresh"></i> wi wi-refresh
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-refresh-alt"></i> wi wi-refresh-alt
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-umbrella"></i> wi wi-umbrella
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-barometer"></i> wi wi-barometer
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-humidity"></i> wi wi-humidity
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-na"></i> wi wi-na
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-train"></i> wi wi-train
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi "></i> wi
                                                </div>

                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-new"></i> wi wi-moon-new
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-waxing-cresent-1"></i> wi wi-moon-waxing-cresent-1
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-waxing-cresent-2"></i> wi wi-moon-waxing-cresent-2
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-waxing-cresent-3"></i> wi wi-moon-waxing-cresent-3
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-waxing-cresent-4"></i> wi wi-moon-waxing-cresent-4
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-waxing-cresent-5"></i> wi wi-moon-waxing-cresent-5
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-waxing-cresent-6"></i> wi wi-moon-waxing-cresent-6
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-first-quarter"></i> wi wi-moon-first-quarter
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-waxing-gibbous-1"></i> wi wi-moon-waxing-gibbous-1
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-waxing-gibbous-2"></i> wi wi-moon-waxing-gibbous-2
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-waxing-gibbous-3"></i> wi wi-moon-waxing-gibbous-3
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-waxing-gibbous-4"></i> wi wi-moon-waxing-gibbous-4
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-waxing-gibbous-5"></i> wi wi-moon-waxing-gibbous-5
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-waxing-gibbous-6"></i> wi wi-moon-waxing-gibbous-6
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-full"></i> wi wi-moon-full
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-waning-gibbous-1"></i> wi wi-moon-waning-gibbous-1
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-waning-gibbous-2"></i> wi wi-moon-waning-gibbous-2
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-waning-gibbous-3"></i> wi wi-moon-waning-gibbous-3
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-waning-gibbous-4"></i> wi wi-moon-waning-gibbous-4
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-waning-gibbous-5"></i> wi wi-moon-waning-gibbous-5
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-waning-gibbous-6"></i> wi wi-moon-waning-gibbous-6
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-third-quarter"></i> wi wi-moon-third-quarter
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-waning-crescent-1"></i> wi wi-moon-waning-crescent-1
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-waning-crescent-2"></i> wi wi-moon-waning-crescent-2
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-waning-crescent-3"></i> wi wi-moon-waning-crescent-3
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-waning-crescent-4"></i> wi wi-moon-waning-crescent-4
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-waning-crescent-5"></i> wi wi-moon-waning-crescent-5
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-waning-crescent-6"></i> wi wi-moon-waning-crescent-6
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-alt-new"></i> wi wi-moon-alt-new
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-alt-waxing-cresent-1"></i> wi wi-moon-alt-waxing-cresent-1
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-alt-waxing-cresent-2"></i> wi wi-moon-alt-waxing-cresent-2
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-alt-waxing-cresent-3"></i> wi wi-moon-alt-waxing-cresent-3
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-alt-waxing-cresent-4"></i> wi wi-moon-alt-waxing-cresent-4
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-alt-waxing-cresent-5"></i> wi wi-moon-alt-waxing-cresent-5
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-alt-waxing-cresent-6"></i> wi wi-moon-alt-waxing-cresent-6
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-alt-first-quarter"></i> wi wi-moon-alt-first-quarter
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-alt-waxing-gibbous-1"></i> wi wi-moon-alt-waxing-gibbous-1
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-alt-waxing-gibbous-2"></i> wi wi-moon-alt-waxing-gibbous-2
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-alt-waxing-gibbous-3"></i> wi wi-moon-alt-waxing-gibbous-3
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-alt-waxing-gibbous-4"></i> wi wi-moon-alt-waxing-gibbous-4
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-alt-waxing-gibbous-5"></i> wi wi-moon-alt-waxing-gibbous-5
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-alt-waxing-gibbous-6"></i> wi wi-moon-alt-waxing-gibbous-6
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-alt-full"></i> wi wi-moon-alt-full
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-alt-waning-gibbous-1"></i> wi wi-moon-alt-waning-gibbous-1
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-alt-waning-gibbous-2"></i> wi wi-moon-alt-waning-gibbous-2
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-alt-waning-gibbous-3"></i> wi wi-moon-alt-waning-gibbous-3
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-alt-waning-gibbous-4"></i> wi wi-moon-alt-waning-gibbous-4
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-alt-waning-gibbous-5"></i> wi wi-moon-alt-waning-gibbous-5
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-alt-waning-gibbous-6"></i> wi wi-moon-alt-waning-gibbous-6
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-alt-third-quarter"></i> wi wi-moon-alt-third-quarter
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-alt-waning-crescent-1"></i> wi wi-moon-alt-waning-crescent-1
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-alt-waning-crescent-2"></i> wi wi-moon-alt-waning-crescent-2
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-alt-waning-crescent-3"></i> wi wi-moon-alt-waning-crescent-3
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-alt-waning-crescent-4"></i> wi wi-moon-alt-waning-crescent-4
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-alt-waning-crescent-5"></i> wi wi-moon-alt-waning-crescent-5
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-moon-alt-waning-crescent-6"></i> wi wi-moon-alt-waning-crescent-6
                                                </div>

                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-time-1"></i> wi wi-time-1
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-time-2"></i> wi wi-time-2
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-time-3"></i> wi wi-time-3
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-time-4"></i> wi wi-time-4
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-time-5"></i> wi wi-time-5
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-time-6"></i> wi wi-time-6
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-time-7"></i> wi wi-time-7
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-time-8"></i> wi wi-time-8
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-time-9"></i> wi wi-time-9
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-time-10"></i> wi wi-time-10
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-time-11"></i> wi wi-time-11
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-time-12"></i> wi wi-time-12
                                                </div>

                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-direction-up"></i> wi wi-direction-up
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-direction-up-right"></i> wi wi-direction-up-right
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-direction-right"></i> wi wi-direction-right
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-direction-down-right"></i> wi wi-direction-down-right
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-direction-down"></i> wi wi-direction-down
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-direction-down-left"></i> wi wi-direction-down-left
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-direction-left"></i> wi wi-direction-left
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="wi wi-direction-up-left"></i> wi wi-direction-up-left
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