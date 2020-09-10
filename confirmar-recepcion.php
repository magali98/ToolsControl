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

$MM_restrictGoTo = "index_almacen2.php";
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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "cambio status")) {
  $updateSQL = sprintf("UPDATE Solicitud SET status=%s, devolucion=%s WHERE id=%s",
                       GetSQLValueString($_POST['status'], "int"),
                       GetSQLValueString($_POST['fecha-devolucion'], "text"),
                       GetSQLValueString($_POST['id'], "int"));

  mysql_select_db($database_conexion, $conexion);
  $Result1 = mysql_query($updateSQL, $conexion) or die(mysql_error());

  $updateGoTo = "index_almacen1.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
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

mysql_select_db($database_conexion, $conexion);
$query_consultar_notificaciones = "SELECT * FROM Solicitud";
$consultar_notificaciones = mysql_query($query_consultar_notificaciones, $conexion) or die(mysql_error());
$row_consultar_notificaciones = mysql_fetch_assoc($consultar_notificaciones);
$totalRows_consultar_notificaciones = mysql_num_rows($consultar_notificaciones);

mysql_select_db($database_conexion, $conexion);
$query_Solicitudes_almacen1 = "SELECT * FROM Solicitud";
$Solicitudes_almacen1 = mysql_query($query_Solicitudes_almacen1, $conexion) or die(mysql_error());
$row_Solicitudes_almacen1 = mysql_fetch_assoc($Solicitudes_almacen1);
$totalRows_Solicitudes_almacen1 = mysql_num_rows($Solicitudes_almacen1);

$colname_cambio_status = "-1";
if (isset($_GET['oper'])) {
  $colname_cambio_status = $_GET['oper'];
}
mysql_select_db($database_conexion, $conexion);
$query_cambio_status = sprintf("SELECT * FROM Solicitud WHERE id = %s", GetSQLValueString($colname_cambio_status, "int"));
$cambio_status = mysql_query($query_cambio_status, $conexion) or die(mysql_error());
$row_cambio_status = mysql_fetch_assoc($cambio_status);
$totalRows_cambio_status = mysql_num_rows($cambio_status);
?>
<?php include 'layouts/header.php'; ?>
    <!-- C3 charts css -->
<link href="public/plugins/c3/c3.min.css" rel="stylesheet" type="text/css" />

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
                                
                                <!-- notification-->
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <i class="ion-ios7-bell noti-icon"></i>
                                        <span class="badge badge-danger noti-icon-badge"><?php echo $totalRows_consultar_notificaciones ?></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h5>Notificaciones (<?php echo $totalRows_consultar_notificaciones ?>)</h5>
                                        </div>
                                        <?php do { ?>
                                          
                                          <!-- item-->
                                          <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                            <div class="notify-icon bg-success"><i class="ion-ios7-bell noti-icon"></i></div>
                                            <p class="notify-details"><b>Solicitud de material</b><small class="text-muted">Entrega de material pendiente.</small></p>
                                          </a>
                                          <?php } while ($row_consultar_notificaciones = mysql_fetch_assoc($consultar_notificaciones)); ?>
<!-- item
                                        
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

                    


                     <!-- INFORMACION TABLA -->

                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-body">
                                            <h4 class="mt-0 m-b-30 header-title">Esperando devolución:</h4>
												
											<center> <h4> INFORMACIÓN ADICIONAL</h4></center>
											<center>
											<div class="col-lg-6">
                                    			<div class="card m-b-20">
                                        			<div class="card-body">

                                            			<div class="table-responsive">
                                                			<table class="table mb-0">
                                                   			
                                                   			 <tr>
                                                       			 <th>Nombre:</th>
                                                       			 <th><?php echo $row_cambio_status['nombre']; ?></th>
                                                       			 
                                                   			 </tr>
                                                   			 
                                                   			 <tbody>
                                                   				 <tr>
                                                        			<th scope="row">Productos: </th>
                                                       				 <td><?php echo $row_cambio_status['productos']; ?></td>
                                                       				 
                                                   				 </tr>
                                                   				 <tr>
                                                       				 <th scope="row">Fecha de solicitud: </th>
                                                       				 <td><?php echo $row_cambio_status['fecha_solicitud']; ?></td>
                                                       				 
                                                   				 </tr>
                                                   				 <tr>
                                                       				 <th scope="row">Estatus: </th>
																	 <?php if($row_cambio_status['status'] == 0 )
																	 
																	{
																		$imprime = 'PRESTAMO';
																	}
																	 else{
																		 $imprime = 'OK';
																	 }
																	 
																	 
																	 ?>
                                                       				 <td><?php echo $imprime;  ?></td>
                                                       				 
																	 <?php $lafechadedevolucion = date("d / m / Y"); ?>
                                                   				 </tr>
																 <!-- FORM -->
																 <tr>
                                                       				 <th scope="row">
																		 <form method="POST" action="<?php echo $editFormAction; ?>" name="cambio status">
																			 <input type="hidden" name="fecha-devolucion" value="<?php echo $lafechadedevolucion ; ?>">
																			 <input type="hidden" name="status" value="1">
																			 <input type="hidden" name="id" value="<?php echo $row_cambio_status['id']; ?>">
																		 	<button type="submit" class="btn btn-secondary btn-sm waves-effect">Recibir</button>
																		 	<input type="hidden" name="MM_update" value="cambio status"> 
																		 </form>
																		 
																	 </th>
                                                       				 <td> <a href="index_almacen1.php"> Volver </a></td>
                                                       				 
                                                   				 </tr>
                                                   			 </tbody>
                                               			 </table>
                                           			 </div>

                                        		</div>
														
                                    		</div>
                               		 </div> <!-- end col -->
											</center>
											<!-- FIN EDICION DATOS -->
                                           
                                        </div>
                                    </div>
                                </div>
								
								 <!-- <img src="images/Dashboard.png" width="700px">	-->
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

mysql_free_result($consultar_notificaciones);

mysql_free_result($Solicitudes_almacen1);

mysql_free_result($cambio_status);
?>
