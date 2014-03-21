<?php
session_start();
$_SESSION['name'] = "";
$_SESSION['email'] = "";
$_SESSION['signerror'] = "";	
$_SESSION['signsuss'] = '';
session_destroy();
header("location: index.php");
exit;
?>