<?php  include("include/config.php");  $d=1;

if(!empty($_POST))
	{				
		extract($_POST);
		$chk_username_query =	mysql_query("select * from donor_register where donor_username = '".$username."'");
		$chk_username_cnt = mysql_num_rows($chk_username_query);
		$chk_email_query =	mysql_query("select * from donor_register where donor_email = '".$email."'");
		$chk_email_cnt = mysql_num_rows($chk_username_query);
		
		if($chk_username_cnt > 0)
		{
header("Location:donor_registration.php?err=Username already available");			  
		}
		else if($chk_email_cnt > 0)
		{
header("Location:donor_registration.php?err=Email Id alreday available");						
 
		}else{

			$set="set donor_first_name='$leader_fname',
						donor_last_name='$leader_lname',
						donor_address='$address',
						donor_phone='$phone',
						donor_email='$email',
						donor_username='$username',
						donor_password= '$password'";
						$chars = "109182273364455566477388299100abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ~!@#$%^&*()";
						srand((double)microtime()*1000000);
						$i = 0;
						$vcode='';
						while($i<8)
						{
							$num=rand()%33;
							$tmp = substr($chars,$num,1);
							$vcode = $vcode.$tmp;
							$i++;
						}
							$verify_code = $vcode;
							//Verification Code:'.$verify_code.'
							
if($chk == 1) {
			mysql_query("insert into donor_register $set,mdate=CURRENT_TIMESTAMP,verification_code='$verify_code',is_verify=0,is_approve=0,Iagree=1");
			$donor_id = mysql_insert_id();
			$ecoded = base64_encode($donor_id);
			header("Location:payment.php?ses=$ecoded");	
			
	   } }
	}

?>

