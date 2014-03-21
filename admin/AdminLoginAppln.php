<?php
require_once("classes/config.php");
extract($_POST);
$passwords =  md5($password);
	$q=db_query("select * from admin where admin_name = '$admin_name' and password = '$passwords'");
	$tot=db_num_rows($q); 
	if($tot>0)
	{   
		$r=db_fetch_object($q);
		$_SESSION['name']=$r->admin_name;
		$_SESSION['email']=$r->email; 
				$_SESSION['status']=$r->status; 
		$_SESSION['oldpassword']= $r->password;
		header("location:home.php");
	   exit;
	}

else {
 $_SESSION['signerror']="Invalid User ID!";	 
	header("location: index.php");
	exit;
}
?>