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
                                    <h3 class="page-title">Consultar Productos</h3>
                                </li>
                            </ul>

                            <div class="clearfix"></div>
                        </nav>
                    </div>

                    <div class="page-content-wrapper">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <table id="datatable" class="table table-striped dt-responsive nowrap table-vertical" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Nombre</th>
                                                        <th>Cantidad</th>
                                                        <th>Descripción</th>
                                                        <th>Costo</th>
                                                        <th>Fecha de alta</th>
                                                        <th>Acción</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>UT0001</td>
                                                        <td>Martillo cabeza de metal</td>
                                                        <td>5</td>
                                                        <td>Martillo mango de plastico y cabeza metalica</td>
                                                        <td>$250</td>
                                                        <td>29/05/2020</td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>UT0002</td>
                                                        <td>Electrodos 220</td>
                                                        <td>25</td>
                                                        <td>
                                                            Electrodo 220 para soldar</td>
                                                        <td>$25</td>
                                                        <td>29/05/2020</td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>UT0003</td>
                                                        <td>Flexometro Amarillo</td>
                                                        <td>4</td>
                                                        <td>Flexometro amarillo 3.5 metros</td>
                                                        <td>$180</td>
                                                        <td>29/05/2020</td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>UT0004</td>
                                                        <td>Caretas de seguridad</td>
                                                        <td>18</td>
                                                        <td>Careta de seguridad Poliestireno</td>
                                                        <td>$400</td>
                                                        <td>29/05/2020</td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>UT0005</td>
                                                        <td>Desarmador cruz</td>
                                                        <td>15</td>
                                                        <td>Desarmador Cruz Plastico</td>
                                                        <td>$41</td>
                                                        <td>29/05/2020</td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>UT0006</td>
                                                        <td>Desarmador plano</td>
                                                        <td>6</td>
                                                        <td>Desarmador plano plastico</td>
                                                        <td>$41</td>
                                                        <td>29/05/2020</td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>UT0007</td>
                                                        <td>Desarmador estrella</td>
                                                        <td>11</td>
                                                        <td>Desarmador estrella plastico</td>
                                                        <td>$50</td>
                                                        <td>29/05/2020</td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>UT0008</td>
                                                        <td>Aire comprimido</td>
                                                        <td>5</td>
                                                        <td>Lata aire comprimido</td>
                                                        <td>$110</td>
                                                        <td>29/05/2020</td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>UT0009</td>
                                                        <td>Llave 1/5</td>
                                                        <td>7</td>
                                                        <td>Llave metalica</td>
                                                        <td>$58</td>
                                                        <td>29/05/2020</td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>UT0010</td>
                                                        <td>Llave 2/3</td>
                                                        <td>5</td>
                                                        <td>Llave metalica</td>
                                                        <td>$41</td>
                                                        <td>29/05/2020</td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>UT0011</td>
                                                        <td>Soplete</td>
                                                        <td>4</td>
                                                        <td>Sopletes metalicos</td>
                                                        <td>$175</td>
                                                        <td>29/05/2020</td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>UT0012</td>
                                                        <td>Bateria 50,000 M</td>
                                                        <td>6</td>
                                                        <td>Bateria</td>
                                                        <td>$456</td>
                                                        <td>29/05/2020</td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>UT0013</td>
                                                        <td>Tuvo de ensayo</td>
                                                        <td>11</td>
                                                        <td>Tuvo de ensayo cristal</td>
                                                        <td>$47</td>
                                                        <td>29/05/2020</td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>UT0014</td>
                                                        <td>Cargadores</td>
                                                        <td>5</td>
                                                        <td>Cargadores varios</td>
                                                        <td>$56</td>
                                                        <td>29/05/2020</td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>UT0015</td>
                                                        <td>Tripie</td>
                                                        <td>4</td>
                                                        <td>Tripie plastico y metal</td>
                                                        <td>$121</td>
                                                        <td>29/05/2020</td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>UT0016</td>
                                                        <td>Programas</td>
                                                        <td>12</td>
                                                        <td>Programas varios</td>
                                                        <td>$841</td>
                                                        <td>29/05/2020</td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>UT0017</td>
                                                        <td>Gas</td>
                                                        <td>2</td>
                                                        <td>Latas de gas</td>
                                                        <td>$51</td>
                                                        <td>29/05/2020</td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>UT0018</td>
                                                        <td>Latas</td>
                                                        <td>10</td>
                                                        <td>Latas varias</td>
                                                        <td>$123</td>
                                                        <td>29/05/2020</td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>UT0019</td>
                                                        <td>Conectores</td>
                                                        <td>12</td>
                                                        <td>Conectores Varios</td>
                                                        <td>$94</td>
                                                        <td>29/05/2020</td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>UT0020</td>
                                                        <td>Boligrafos</td>
                                                        <td>9</td>
                                                        <td>Boligrafos varios</td>
                                                        <td>$22</td>
                                                        <td>29/05/2020</td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>UT0021</td>
                                                        <td>Extensión</td>
                                                        <td>5</td>
                                                        <td>Extensiones varias 2m.</td>
                                                        <td>$49</td>
                                                        <td>29/05/2020</td>
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