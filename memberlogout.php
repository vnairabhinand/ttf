<?php session_start();
  include("include/config.php");
  
  session_destroy();
  header("location:memberlogin.php");
?>
