<?php require_once('Connections/conexion.php'); ?>
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
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['usuario'])) {
  $loginUsername=$_POST['usuario'];
  $password=$_POST['passwd'];
  $MM_fldUserAuthorization = "acceso";
  $MM_redirectLoginSuccess = "index_admin.php";
  $MM_redirectLoginFailed = "index_error.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_conexion, $conexion);
  	
  $LoginRS__query=sprintf("SELECT email, password, acceso FROM Usuarios WHERE email=%s AND password=%s",
  GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $conexion) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
    
    $loginStrGroup  = mysql_result($LoginRS,0,'acceso');
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!DOCTYPE html>
<html lang="Es_mx">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Responsive bootstrap landing template">
        <meta name="author" content="Themesbrand">

        <link rel="shortcut icon" href="images/favicon.ico">

        <title>-- Tools Control --</title>

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
        
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- materialdesign icons CSS -->
        <link href="css/materialdesignicons.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet">

    </head>


    <body class="bg-custom">
    
        <section class="">
            <div class="container-fluid">
                <div class="col-lg-12">
                   
                </div>
            </div>
        </section>
    
        <!-- START HOME  -->
        <section class="bg-custom section">
            <div class="login-table">
                <div class="login-table-cell">
                    <div class="container">
                        <div class="row justify-content-center mt-4">
                            <div class="col-lg-4">
                                <!--<div class="text-center">
                                    <h1 class="black-text">| Tools Control |</h1>
                                    <p class="text-white-50 text-center">Inicia sesión para continuar.</p>
                                </div>  -->
                                <div class="bg-white p-4 mt-4 rounded">
                                    <div class="text-center">
                                        <h1 class="black-text">| Tools Control |</h1>
                                        <p class="text-black-50 text-center">Inicia sesión para continuar.</p>
                                    </div>
                                    <form METHOD="POST" class="login-form" action="<?php echo $loginFormAction; ?>" name="login">
                                        <div class="row">
                                            <div class="col-lg-12 mt-4">
                                                <input type="email" class="form-control" placeholder="xxxx@itesm.mx" required="" name="usuario">
                                            </div>
                                            <div class="col-lg-12 mt-4">
                                                <input type="password" class="form-control" placeholder="Password" required="" name="passwd">
                                            </div>
                                            <div class="col-lg-12 mt-4">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1">Recordarme</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mt-4 mb-3">
                                                <button class="btn btn-custom w-100">Iniciar sesión</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="text-center mt-3">
                                    <p><a class="text-white text-center text-capitalize font-weight-bold">¿ No tienes una cuenta ?</a></p>
                                    <p><small class="text-white mr-2">Contacta al administrador </small> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END HOME -->

        

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>

    </body>
</html>