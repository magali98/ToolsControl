<?php require_once('Connections/conexion.php'); ?>
<?php
if (!isset($_SESSION)) {
  session_start();
}
$MM_authorizedUsers = "2";
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

$MM_restrictGoTo = "index_admin.php";
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

mysql_select_db($database_conexion, $conexion);
$query_consulta_solicitud = "SELECT * FROM Solicitud WHERE status = 2";
$consulta_solicitud = mysql_query($query_consulta_solicitud, $conexion) or die(mysql_error());
$row_consulta_solicitud = mysql_fetch_assoc($consulta_solicitud);
$totalRows_consulta_solicitud = mysql_num_rows($consulta_solicitud);

mysql_select_db($database_conexion, $conexion);
$query_solicitud_2 = "SELECT * FROM Solicitud WHERE status = 2";
$solicitud_2 = mysql_query($query_solicitud_2, $conexion) or die(mysql_error());
$row_solicitud_2 = mysql_fetch_assoc($solicitud_2);
$totalRows_solicitud_2 = mysql_num_rows($solicitud_2);

mysql_select_db($database_conexion, $conexion);
$query_solicitudes_pendientes_entrega = "SELECT * FROM Solicitud WHERE status = 2";
$solicitudes_pendientes_entrega = mysql_query($query_solicitudes_pendientes_entrega, $conexion) or die(mysql_error());
$row_solicitudes_pendientes_entrega = mysql_fetch_assoc($solicitudes_pendientes_entrega);
$totalRows_solicitudes_pendientes_entrega = mysql_num_rows($solicitudes_pendientes_entrega);

mysql_select_db($database_conexion, $conexion);
$query_reporte = "SELECT * FROM Solicitud";
$reporte = mysql_query($query_reporte, $conexion) or die(mysql_error());
$row_reporte = mysql_fetch_assoc($reporte);
$totalRows_reporte = mysql_num_rows($reporte);
?>
<?php include 'layouts/header.php'; ?>

<?php include 'layouts/headerStyle.php'; ?>

    <body class="fixed-left">

        <?php include 'layouts/loader.php'; ?>

        <!-- Begin page -->
        <div id="wrapper">

        <?php include 'layouts/navbar_almacen1.php'; ?>

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
                                        <span class="badge badge-danger noti-icon-badge"><?php echo $totalRows_consulta_solicitud ?></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h5>Notificaciones ( <?php echo $totalRows_consulta_solicitud ?> )</h5>
                                        </div>

                                        <!-- item-->
                                        <?php do { ?>
                                        <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                            <div class="notify-icon bg-success"><i class="ion-ios7-bell noti-icon"></i></div>
                                            <p class="notify-details"><b>Solicitud de material</b><small class="text-muted">Entrega de material pendiente.</small></p>  
                                          </a>
                                       <?php } while ($row_consulta_solicitud = mysql_fetch_assoc($consulta_solicitud)); ?>
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
                                    <h3 class="page-title">TOTAL DE OPERACIONES</h3>
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
                     <div class="card-body">
                                            <h4 class="mt-0 m-b-30 header-title">TOTAL ENTREGAS:</h4>

                                            <div class="table-responsive">
                                                
                                                <table class="table table-vertical mb-0">
                                                    
                                                    <tbody>
														
                                                     <?php do { ?>
  
														
														<tr>
                                                        <td>
                                                          <?php $contar = $contar+1; echo($contar.'  .-'); ?>
                                                           <?php echo $row_reporte['nombre']; ?>
														<?php echo $row_reporte['apellido']; ?>
                                                          </td>
															<?php if($row_reporte['status'] == 0 )
	
																	{
																		$var_status = 'PENDIENTE';
																	}
															   	else
																{
																	if($row_reporte['status'] == 1)
																	{
																		$var_status = 'DEVUELTO';
																	}
																	
																
																	$var_status = 'SOLICITADO';
																}
															?>
                                                        <td> <?php echo $var_status; ?></td>
                                                        <td>
                                                          <?php echo $row_reporte['productos']; ?>
                                                          <!-- <p class="m-0 text-muted font-14">Articulos</p> -->
                                                          </td>
                                                        <td><?php echo $row_reporte['pickup']; ?>
                                                          
                                                          <!-- <p class="m-0 text-muted font-14">Entrega</p>  -->
                                                          </td>
                                                       		 
														 		 <td>
																	 
																	 <?php echo $row_reporte['devolucion']; ?>
                                                          		<!--	<button type="submit" class="btn btn-secondary btn-sm waves-effect" >Recibir</button> -->
                                                         		 </td>
															 
                                                   	  </tr>
                                                     
                                                      
                                                       
                                                     
  															<?php } while ($row_reporte = mysql_fetch_assoc($reporte)); ?>
                                                      
                                                      
                                                      
                                                  </tbody>
                                                  </table>
                                                 
                                            </div>
                                        </div>
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
<?php
mysql_free_result($consulta_solicitud);

mysql_free_result($solicitud_2);

mysql_free_result($solicitudes_pendientes_entrega);

mysql_free_result($reporte);
?>
