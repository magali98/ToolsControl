<?php include 'layouts/header.php'; ?>

    <!-- Select 2 -->
    <link href="public/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

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
                                    <input class="search-input" type="search" placeholder="Buscar" />
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
                                <!-- language
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
                                </li> -->
                                <!-- notification-->
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <i class="ion-ios7-bell noti-icon"></i>
                                        <span class="badge badge-danger noti-icon-badge">2</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h5>Notificaciones (2)</h5>
                                        </div>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                            <div class="notify-icon bg-success"><i class="ion-ios7-bell noti-icon"></i></div>
                                            <p class="notify-details"><b>Solicitud de material</b><small class="text-muted">Entrega de material pendiente.</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-warning"><i class="ion-ios7-bell noti-icon"></i></div>
                                            <p class="notify-details"><b>Solicitud de material</b><small class="text-muted">Entrega de material pendiente.</small></p>
                                        </a>

                                        <!-- item
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info"><i class="mdi mdi-martini"></i></div>
                                            <p class="notify-details"><b>Your item is shipped</b><small class="text-muted">It is a long established fact that a reader will</small></p>
                                        </a>

                                        
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            View All
                                        </a>
-->
                                    </div>
                                </li>
                                <!-- User-->
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <img src="public/assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                        <a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> Perfil</a>
                                      <!--  <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted"></i> My Wallet</a> -->
                                        <a class="dropdown-item" href="#"><span class="badge badge-success pull-right m-t-5"></span><i class="dripicons-gear text-muted"></i> Configurar</a>
                                      <!--  <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted"></i> Lock screen</a> -->
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#"><i class="dripicons-exit text-muted"></i> Salir</a>
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
                                    <h3 class="page-title">Agregar Usuario</h3>
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

                                            <h4 class="mt-0 header-title">Información</h4>
                                            <p class="text-muted m-b-30 font-14">Completar todos los campos listados a continuación:</p>

                                            <form>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="productname">Email: </label>
                                                            <input id="productname" name="productname" type="text" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="manufacturername">Password:</label>
                                                            <input id="manufacturername" name="manufacturername" type="password" class="form-control">
                                                        </div>
                                                    </div>

                                                 <!--   <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="productdesc">Descripción</label>
                                                            <textarea class="form-control" id="productdesc" rows="5"></textarea>
                                                        </div>
                                                    </div>  -->
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                       <!-- <div class="form-group">
                                                            <label for="manufacturerbrand">Costo</label>
                                                            <input id="manufacturerbrand" name="manufacturerbrand" type="text" class="form-control">
                                                        </div>  -->
                                                       <!-- <div class="form-group">
                                                            <label for="price">Price</label>
                                                            <input id="price" name="price" type="text" class="form-control">
                                                        </div> -->

                                                        <div class="form-group">
                                                            <label class="control-label">Carrera:</label>
                                                            <select class="form-control select2">
                                                                <option>Seleccionar</option>
                                                                <option value="AK">PROCESOS INDUSTRIALES</option>
                                                                <option value="HI">MECATRONICA</option>
                                            
                                                            </select>
                                                        </div>
                                                       <!-- <div class="form-group">
                                                            <label class="control-label">Features</label>

                                                            <select class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose ...">
                                                                <option value="AK">Alaska</option>
                                                                <option value="HI">Hawaii</option>
                                                                <option value="CA">California</option>
                                                                <option value="NV">Nevada</option>
                                                                <option value="OR">Oregon</option>
                                                                <option value="WA">Washington</option>
                                                            </select>

                                                        </div> -->
                                                    </div>

                                                   <!-- <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Product Image</label> <br/>
                                                            <img src="public/assets/images/products/1.jpg" alt="product img" class="img-fluid" style="max-width: 200px;" />
                                                            <br/>
                                                            <button type="button" class="btn btn-purple m-t-10 waves-effect waves-light">Change Image</button>
                                                        </div>
                                                    </div> -->
                                                </div>

                                                <button type="submit" class="btn btn-success waves-effect waves-light">Agregar</button>
                                                <button type="submit" class="btn btn-secondary waves-effect">Cancelar</button>
                                            </form>

                                        </div>
                                    </div>

                                   <!-- <div class="card">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Meta Data</h4>
                                            <p class="text-muted m-b-30 font-14">Fill all information below</p>

                                            <form>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="metatitle">Meta title</label>
                                                            <input id="metatitle" name="productname" type="text" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="metakeywords">Meta Keywords</label>
                                                            <input id="metakeywords" name="manufacturername" type="text" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="metadescription">Meta Description</label>
                                                            <textarea class="form-control" id="metadescription" rows="5"></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <button type="submit" class="btn btn-success waves-effect waves-light">Save Changes</button>
                                                <button type="submit" class="btn btn-secondary waves-effect">Cancel</button>

                                            </form>

                                        </div> -->
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

        <!-- select2 js -->
        <script src="public/plugins/select2/js/select2.min.js"></script>

        <!-- App js -->
        <script src="public/assets/js/app.js"></script>

        <script>
            // Select2
            $(".select2").select2();
        </script>

    </body>
</html>