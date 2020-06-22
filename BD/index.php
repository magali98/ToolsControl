<?php
  session_start();
  if(isset($_SESSION['email']) ) {
    header('location: c.php');
  } else {
    header('location: error.php');
  }



 ?>
