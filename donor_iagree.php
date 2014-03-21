<?php include("include/config.php");

		 $chk_username_query =	mysql_query("select * from donor_register where member_username = '".$username."'");

?>