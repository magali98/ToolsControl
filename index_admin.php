<?php require_once('Connections/conexion.php'); ?>
<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "index.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>
<?php
if (!isset($_SESSION)) {
  session_start();
}
$MM_authorizedUsers = "1";
$MM_donotCheckaccess = "false";

// *** Restrict Access To Page: Grant or deny access to this page
function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 
  // For security, start by assuming the visitor is NOT authorized. 
  $isValid = False; 

  // When a visitor has logged into this site, the Session variable MM_Username set equal to their username. 
  // Therefore, we know that a user is NOT logged in if that Session variable is blank. 
  if (!empty($UserName)) { 
    // Besides being logged in, you may restrict access to only certain users based on an ID established when they login. 
    // Parse the strings into arrays. 
    $arrUsers = Explode(",", $strUsers); 
    $arrGroups = Explode(",", $strGroups); 
    if (in_array($UserName, $arrUsers)) { 
      $isValid = true; 
    } 
    // Or, you may restrict access to only certain users based on their username. 
    if (in_array($UserGroup, $arrGroups)) { 
      $isValid = true; 
    } 
    if (($strUsers == "") && false) { 
      $isValid = true; 
    } 
  } 
  return $isValid; 
}

$MM_restrictGoTo = "index_almacen1.php";
if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {   
  $MM_qsChar = "?";
  $MM_referrer = $_SERVER['PHP_SELF'];
  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
  if (isset($_SERVER['QUERY_STRING']) && strlen($_SERVER['QUERY_STRING']) > 0) 
  $MM_referrer .= "?" . $_SERVER['QUERY_STRING'];
  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
  header("Location: ". $MM_restrictGoTo); 
  exit;
}
?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$colname_Usuario = "-1";
if (isset($_SESSION['MM_Username'])) {
  $colname_Usuario = $_SESSION['MM_Username'];
}
mysql_select_db($database_conexion, $conexion);
$query_Usuario = sprintf("SELECT nombre FROM Usuarios WHERE email = %s", GetSQLValueString($colname_Usuario, "text"));
$Usuario = mysql_query($query_Usuario, $conexion) or die(mysql_error());
$row_Usuario = mysql_fetch_assoc($Usuario);
$totalRows_Usuario = mysql_num_rows($Usuario);

mysql_select_db($database_conexion, $conexion);
$query_almacen1 = "SELECT * FROM Productos_almacen1";
$almacen1 = mysql_query($query_almacen1, $conexion) or die(mysql_error());
$row_almacen1 = mysql_fetch_assoc($almacen1);
$totalRows_almacen1 = mysql_num_rows($almacen1);

mysql_select_db($database_conexion, $conexion);
$query_contar_usuarios = "SELECT * FROM Usuarios";
$contar_usuarios = mysql_query($query_contar_usuarios, $conexion) or die(mysql_error());
$row_contar_usuarios = mysql_fetch_assoc($contar_usuarios);
$totalRows_contar_usuarios = mysql_num_rows($contar_usuarios);
?>
<?php include 'layouts/header.php'; ?>
    <!-- C3 charts css -->
<link href="public/plugins/c3/c3.min.css" rel="stylesheet" type="text/css" />

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
                                        <a class="dropdown-item" href="<?php echo $logoutAction ?>"><i class="dripicons-exit text-muted"></i> Salir</a>
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
                                    <h3 class="page-title">Bienvenido: <?php echo $row_Usuario['nombre']; ?>   </h3>
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
                                <div class="col-md-6 col-xl-3">
                                    <div class="mini-stat clearfix bg-white">
                                        <span class="mini-stat-icon bg-purple mr-0 float-right"><i class="mdi mdi-basket"></i></span>
                                        <div class="mini-stat-info">
                                            <span class="counter text-purple"><?php echo $totalRows_almacen1 ?> </span>
                                            Productos disponibles
                                        </div>
                                        <div class="clearfix"></div>
                                        <p class=" mb-0 m-t-20 text-muted">Productos Totales: <?php echo $totalRows_almacen1 ?> <span class="pull-right"> <!--<i class="fa fa-caret-up m-r-5"></i>10.25%</span>--></p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="mini-stat clearfix bg-white">
                                        <span class="mini-stat-icon bg-blue-grey mr-0 float-right"><i class="mdi mdi-black-mesa"></i></span>
                                        <div class="mini-stat-info">
                                            <span class="counter text-blue-grey">4</span>
                                            Solicitudes Pendientes
                                        </div>
                                        <div class="clearfix"></div>
                                        <p class="text-muted mb-0 m-t-20">Total de solicitudes: 17 <span class="pull-right"></p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="mini-stat clearfix bg-white">
                                        <span class="mini-stat-icon bg-brown mr-0 float-right"><i class="mdi mdi-buffer"></i></span>
                                        <div class="mini-stat-info">
                                            <span class="counter text-brown">1</span>
                                            Usuarios Activos
                                        </div>
                                        <div class="clearfix"></div>
                                        <p class="text-muted mb-0 m-t-20">Total de usuarios: <?php echo $totalRows_contar_usuarios ?> <span class="pull-right"></p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="mini-stat clearfix bg-white">
                                        <span class="mini-stat-icon bg-teal mr-0 float-right"><i class="mdi mdi-coffee"></i></span>
                                        <div class="mini-stat-info">
                                            <span class="counter text-teal">288 Hrs.</span>
                                            Uso continuo
                                        </div>
                                        <div class="clearfix"></div>
                                        <p class="text-muted mb-0 m-t-20">Mantenimiento programado: 1,872 Hrs <span class="pull-right"></p>
                                    </div>
                                </div>
                            </div>


                      <!--      <div class="row">

                                <div class="col-xl-9">

                                    <div class="row">
                                        <div class="col-md-9 pr-md-0">
                                            <div class="card m-b-20" style="height: 486px;">
                                                <div class="card-body">
                                                    <h4 class="mt-0 header-title">Monthly Earnings</h4>

                                                    <div class="text-center">
                                                        <div class="btn-group m-t-20" role="group" aria-label="Basic example">
                                                            <button type="button" class="btn btn-secondary">Day</button>
                                                            <button type="button" class="btn btn-secondary">Month</button>
                                                            <button type="button" class="btn btn-secondary">Year</button>
                                                        </div>
                                                    </div>

                                                    <div id="combine-chart" class="m-t-20"></div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 pl-md-0">
                                            <div class=" card m-b-20" style="height: 486px;">
                                                <div class="card-body">
                                                    <div class="m-b-20">
                                                        <p>Weekly Earnings</p>
                                                        <h5>$1,542</h5>
                                                        <span class="peity-line" data-width="100%" data-peity='{ "fill": ["rgba(103,168,228,0.3)"],"stroke": ["rgba(103,168,228,0.8)"]}' data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                                                    </div>
                                                    <div class="m-b-20">
                                                        <p>Monthly Earnings</p>
                                                        <h5>$6,451</h5>
                                                        <span class="peity-line" data-width="100%" data-peity='{ "fill": ["rgba(74,193,142,0.3)"],"stroke": ["rgba(74,193,142,0.8)"]}' data-height="60">6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span>
                                                    </div>
                                                    <div class="m-b-20">
                                                        <p>Yearly Earnings</p>
                                                        <h5>$84,574</h5>
                                                        <span class="peity-line" data-width="100%" data-peity='{ "fill": ["rgba(232, 65, 38,0.3)"],"stroke": ["rgba(232, 65, 38,0.8)"]}' data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-xl-3">
                                    <div class="card m-b-20">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Sales Analytics</h4>

                                            <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                                <li class="list-inline-item">
                                                    <h5 class="mb-0">25610</h5>
                                                    <p class="text-muted font-14">Activated</p>
                                                </li>
                                                <li class="list-inline-item">
                                                    <h5 class="mb-0">56210</h5>
                                                    <p class="text-muted font-14">Pending</p>
                                                </li>
                                            </ul>

                                            <div id="donut-chart"></div>

                                        </div>
                                    </div>
                                </div>

                            </div>    -->
                            <!-- end row -->

<!--
                            <div class="row">
                                <div class="col-xl-3">
                                    <div class="card m-b-20">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title m-b-30">Recent Stock</h4>

                                            <div class="text-center">
                                                <input class="knob" data-width="120" data-height="120" data-linecap=round
                                                       data-fgColor="#ffbb44" value="80" data-skin="tron" data-angleOffset="180"
                                                       data-readOnly=true data-thickness=".1"/>

                                                <div class="clearfix"></div>
                                                <a href="#" class="btn btn-sm btn-warning m-t-20">View All Data</a>
                                                <ul class="list-inline row m-t-30 clearfix">
                                                    <li class="col-6">
                                                        <p class="m-b-5 font-18 font-600">7,541</p>
                                                        <p class="mb-0">Mobile Phones</p>
                                                    </li>
                                                    <li class="col-6">
                                                        <p class="m-b-5 font-18 font-600">125</p>
                                                        <p class="mb-0">Desktops</p>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3">
                                    <div class="card m-b-20">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title m-b-30">Purchase Order</h4>

                                            <div class="text-center">
                                                <input class="knob" data-width="120" data-height="120" data-linecap=round
                                                       data-fgColor="#4ac18e" value="68" data-skin="tron" data-angleOffset="180"
                                                       data-readOnly=true data-thickness=".1"/>

                                                <div class="clearfix"></div>
                                                <a href="#" class="btn btn-sm btn-success m-t-20">View All Data</a>
                                                <ul class="list-inline row m-t-30 clearfix">
                                                    <li class="col-6">
                                                        <p class="m-b-5 font-18 font-600">2,541</p>
                                                        <p class="mb-0">Mobile Phones</p>
                                                    </li>
                                                    <li class="col-6">
                                                        <p class="m-b-5 font-18 font-600">874</p>
                                                        <p class="mb-0">Desktops</p>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3">
                                    <div class="card m-b-20">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title m-b-30">Shipped Orders</h4>

                                            <div class="text-center">
                                                <input class="knob" data-width="120" data-height="120" data-linecap=round
                                                       data-fgColor="#8d6e63" value="39" data-skin="tron" data-angleOffset="180"
                                                       data-readOnly=true data-thickness=".1"/>

                                                <div class="clearfix"></div>
                                                <a href="#" class="btn btn-sm btn-brown m-t-20">View All Data</a>
                                                <ul class="list-inline row m-t-30 clearfix">
                                                    <li class="col-6">
                                                        <p class="m-b-5 font-18 font-600">1,154</p>
                                                        <p class="mb-0">Mobile Phones</p>
                                                    </li>
                                                    <li class="col-6">
                                                        <p class="m-b-5 font-18 font-600">89</p>
                                                        <p class="mb-0">Desktops</p>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3">
                                    <div class="card m-b-20">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title m-b-30">Cancelled Orders</h4>

                                            <div class="text-center">
                                                <input class="knob" data-width="120" data-height="120" data-linecap=round
                                                       data-fgColor="#90a4ae" value="95" data-skin="tron" data-angleOffset="180"
                                                       data-readOnly=true data-thickness=".1"/>

                                                <div class="clearfix"></div>
                                                <a href="#" class="btn btn-sm btn-blue-grey m-t-20">View All Data</a>
                                                <ul class="list-inline row m-t-30 clearfix">
                                                    <li class="col-6">
                                                        <p class="m-b-5 font-18 font-600">95</p>
                                                        <p class="mb-0">Mobile Phones</p>
                                                    </li>
                                                    <li class="col-6">
                                                        <p class="m-b-5 font-18 font-600">25</p>
                                                        <p class="mb-0">Desktops</p>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div> -->

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">
                                            <h4 class="mt-0 m-b-30 header-title">Esperando devolución:</h4>

                                            <div class="table-responsive">
                                                <table class="table table-vertical mb-0">

                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            <img src="public/assets/images/users/avatar-2.jpg" alt="user-image" class="thumb-sm rounded-circle mr-2"/>
                                                            Mtro. Raul Jaramillo
                                                        </td>
                                                        <td><i class="mdi mdi-checkbox-blank-circle text-success"></i> Ok</td>
                                                        <td>
                                                            12
                                                            <p class="m-0 text-muted font-14">Articulos</p>
                                                        </td>
                                                        <td>
                                                            17:00 Hrs.
                                                            <p class="m-0 text-muted font-14">Entrega</p>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-secondary btn-sm waves-effect">Recibir</button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <img src="public/assets/images/users/avatar-3.jpg" alt="user-image" class="thumb-sm rounded-circle mr-2"/>
                                                            Mtro. David Galarza
                                                        </td>
                                                        <td><i class="mdi mdi-checkbox-blank-circle text-warning"></i> Ok</td>
                                                        <td>
                                                            27
                                                            <p class="m-0 text-muted font-14">Articulos</p>
                                                        </td>
                                                        <td>
                                                            15:30 Hrs.
                                                            <p class="m-0 text-muted font-14">Entrega</p>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-secondary btn-sm waves-effect">Recibir</button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <img src="public/assets/images/users/avatar-4.jpg" alt="user-image" class="thumb-sm rounded-circle mr-2"/>
                                                            Mtro. Raquel Arrieta
                                                        </td>
                                                        <td><i class="mdi mdi-checkbox-blank-circle text-success"></i> Ok</td>
                                                        <td>
                                                            40
                                                            <p class="m-0 text-muted font-14">Articulos</p>
                                                        </td>
                                                        <td>
                                                            14:00 Hrs.
                                                            <p class="m-0 text-muted font-14">Entrega</p>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-secondary btn-sm waves-effect">Recibir</button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <img src="public/assets/images/users/avatar-5.jpg" alt="user-image" class="thumb-sm rounded-circle mr-2"/>
                                                            Mtro. José Arce
                                                        </td>
                                                        <td><i class="mdi mdi-checkbox-blank-circle text-danger"></i> Retraso</td>
                                                        <td>
                                                            5
                                                            <p class="m-0 text-muted font-14">Articulos</p>
                                                        </td>
                                                        <td>
                                                            12:30 Hrs.
                                                            <p class="m-0 text-muted font-14">Entrega</p>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-secondary btn-sm waves-effect">Recibir</button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <img src="public/assets/images/users/avatar-6.jpg" alt="user-image" class="thumb-sm rounded-circle mr-2"/>
                                                            Mtro. Jorge Rivera
                                                        </td>
                                                        <td><i class="mdi mdi-checkbox-blank-circle text-success"></i> Retraso</td>
                                                        <td>
                                                            24
                                                            <p class="m-0 text-muted font-14">Articulos</p>
                                                        </td>
                                                        <td>
                                                            12:00 Hrs.
                                                            <p class="m-0 text-muted font-14">Entrega</p>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-secondary btn-sm waves-effect">Recibir</button>
                                                        </td>
                                                    </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<!--
                                <div class="col-xl-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">
                                            <h4 class="mt-0 m-b-30 header-title">Latest Orders</h4>

                                            <div class="table-responsive">
                                                <table class="table table-vertical mb-0">

                                                    <tbody>
                                                    <tr>
                                                        <td>#12354781</td>
                                                        <td>
                                                            <img src="public/assets/images/products/1.jpg" alt="user-image" style="height: 46px;" class="rounded mr-2" />
                                                            Riverston Glass Chair
                                                        </td>
                                                        <td><span class="badge badge-pill badge-success">Delivered</span></td>
                                                        <td>
                                                            $185
                                                        </td>
                                                        <td>
                                                            5/12/2016
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>#52140300</td>
                                                        <td>
                                                            <img src="public/assets/images/products/2.jpg" alt="user-image" style="height: 46px;" class="rounded mr-2" />
                                                            Shine Company Catalina
                                                        </td>
                                                        <td><span class="badge badge-pill badge-success">Delivered</span></td>
                                                        <td>
                                                            $1,024
                                                        </td>
                                                        <td>
                                                            5/12/2016
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>#96254137</td>
                                                        <td>
                                                            <img src="public/assets/images/products/3.jpg" alt="user-image" style="height: 46px;" class="rounded mr-2" />
                                                            Trex Outdoor Furniture Cape
                                                        </td>
                                                        <td><span class="badge badge-pill badge-danger">Cancel</span></td>
                                                        <td>
                                                            $657
                                                        </td>
                                                        <td>
                                                            5/12/2016
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>#12365474</td>
                                                        <td>
                                                            <img src="public/assets/images/products/4.jpg" alt="user-image" style="height: 46px;" class="rounded mr-2" />
                                                            Oasis Bathroom Teak Corner
                                                        </td>
                                                        <td><span class="badge badge-pill badge-warning">Shipped</span></td>
                                                        <td>
                                                            $8451
                                                        </td>
                                                        <td>
                                                            5/12/2016
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>#85214796</td>
                                                        <td>
                                                            <img src="public/assets/images/products/5.jpg" alt="user-image" style="height: 46px;" class="rounded mr-2" />
                                                            BeoPlay Speaker
                                                        </td>
                                                        <td><span class="badge badge-pill badge-success">Delivered</span></td>
                                                        <td>
                                                            $584
                                                        </td>
                                                        <td>
                                                            5/12/2016
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                                        </td>
                                                    </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        -->
                        <!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <?php include 'layouts/footer.php'; ?>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


<?php include 'layouts/footerScript.php'; ?>

        <!-- Peity chart JS -->
<script src="public/plugins/peity-chart/jquery.peity.min.js"></script>

        <!--C3 Chart-->
<script src="public/plugins/d3/d3.min.js"></script>
<script src="public/plugins/c3/c3.min.js"></script>

        <!-- KNOB JS -->
<script src="public/plugins/jquery-knob/excanvas.js"></script>
<script src="public/plugins/jquery-knob/jquery.knob.js"></script>

        <!-- Page specific js -->
<script src="public/assets/pages/dashboard.js"></script>

        <!-- App js -->
<script src="public/assets/js/app.js"></script>
</body>
</html>
<?php
mysql_free_result($Usuario);

mysql_free_result($almacen1);

mysql_free_result($contar_usuarios);
?>
