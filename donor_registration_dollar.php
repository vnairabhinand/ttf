<?php  include("include/config.php");  $d=1;
if(isset($_POST[submit]))
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
if($Agree == 1) {
			mysql_query("insert into donor_register $set,mdate=CURRENT_TIMESTAMP,verification_code='$verify_code',is_verify=0,is_approve=0,Iagree=1");

		/*	$rid=mysql_insert_id();
			$da = base64_encode($rid);
			$daem = base64_encode($email);
			$headers	=	"From: admin@especiallythefamily.org\r\n";
			$headers	.=	"Content-Type: text/html;\n";
			$msg1	=	'<table width="100%" border="0" cellspacing="2" cellpadding="0">';
			$msg1	.=	'<tr><td align="left" valign="top" colspan="3">'."<img src='http://www.especiallythefamily.org/ETF/images/etflog.jpg' />".'</tr>';	
			$msg1	.=	'<tr><td align="left" valign="top" colspan="3">Dear '.$leader_fname." ".$leader_lname.'</tr>';
$msg1	.=	'<tr><td align="left" valign="top" colspan="3" width="13%"><strong>Thank you for registering to become a donor with Especially The Family! Please verify your account by clicking the link provided below.</strong></td></tr>';
$msg1	.=	"<tr><td align=\"left\" valign=\"top\" colspan=\"3\" width=\"13%\"><a href=\"http://www.especiallythefamily.org/ETF/"."donor_financial_input.php?&val=$da&mm=$daem\">Click here!</a></td></tr>";
			$msg1	.=	'</table>';
			$sub	=	"Your Verification link :";
			$ret = mail($email, $sub, $msg1, $headers, '-f admin@especiallythefamily.org');
     		header("Location:donor_success_register.php?f=set");*/		 
	   } }
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Welcome to especiallythefamily - Register </title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
	<script>
		var config = {
		base: "<?php echo BASEURL; ?>"
		};
	</script>

	<script type="text/javascript" src="js/jquery-1.6.js"></script>
	<script type="text/javascript" src="js/cufon-yui.js"></script>
	<script type="text/javascript" src="js/cufon-replace.js"></script> 
	<script type="text/javascript" src="js/Vegur_700.font.js"></script>
	<script type="text/javascript" src="js/Vegur_400.font.js"></script>
	<script type="text/javascript" src="js/Vegur_300.font.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/tms-0.3.js"></script>
	<script type="text/javascript" src="js/tms_presets.js"></script>
	<script type="text/javascript" src="js/backgroundPosition.js"></script>
	<script type="text/javascript" src="js/atooltip.jquery.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
	<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/menucontents.js"></script>
	<script type="text/javascript" src="js/anylinkmenu.js"></script>
	<script type="text/javascript">
	
	//anylinkmenu.init("menu_anchors_class") //Pass in the CSS class of anchor links (that contain a sub menu)
	anylinkmenu.init("menuanchorclass")
	</script>
 
<script>

$(document).ready(function(){

  $("#pay_guest").click(function(){

   //alert("The paragraph was clicked.");

  	var amount =$('input[name=new_amount]').val();
 	
	

 	if(amount <= 1)

 	{

		

		$('input[name=amount]').val('1.00');
 
		$(".paypal-button").submit();

	}

	else

	{

		

		//alert(amount);

		

		$('input[name=amount]').val(amount);
 
		$(".paypal-button").submit();

	}

 	

  });

  

  

  

  

});





function intOnly(i)

{

if(i.value.length>0)

{

i.value = i.value.replace(/[^\d]+/g, '');

}

}


</script>
	<link rel="stylesheet" type="text/css" href="css/anylinkmenu.css" />
	<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
	<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css">
</head>

<body id="page1">
	<div class="body1">
		<div class="main">
			<header>
				<?php include("menu.php"); ?>
			</header>
			
			<!-- content -->
			<article id="content">
				<div class="wrapper">
					<div class="box1">
						<div class="wrapper">

						<section class="col2 pad_left1">
							<h2 class="color2"><strong>D</strong>onor<span> Registration</span> </h2>
							<br/>

<form id="MemberForm" name="MemberForm" method="post"   onsubmit="if (this.checkbox.checked == false) { alert ('You must agree terms & conditions !'); return false; } else { return true; }">
                            <div style=" padding:20px; -webkit-box-shadow: 0px 0px 7px rgba(45, 50, 50, 1);-moz-box-shadow:    0px 0px 7px rgba(45, 50, 50, 1);box-shadow:   0px 0px 7px rgba(45, 50, 50, 1); -moz-border-radius: 10px;
-webkit-border-radius: 5px;border-radius: 5px;  -khtml-border-radius: 5px; height:auto; margin-bottom:30px; padding-bottom:20px;">
							  <div class="wrapper">
						 
								</div>
								
								<div class="wrapper">
                <form id="form1" name="form1" method="get" action="">                
  <table width="491" border="1" cellspacing="10" cellpadding="30">
  <tr>
    <td width="90" height="30" align="left">&nbsp;</td>
    <td width="245">
   <strong>Dollar 50 per Month or Dollar 600 for a Year</strong><br>
   $ <input type="text" style="border:1px solid; width:50px;  text-align:center;" name="new_amount" onKeyUp="intOnly(this)" onKeyPress="intOnly(this)" >
    </td>
  </tr>
    <tr>
    <td height="30" colspan="2" align="center">

<img src="images/paypal_donate_button.jpg" id="pay_guest" style="width:132px;height:0px; overflow:hidden; cursor:pointer; z-index:1; margin-top:-5px;"> 
 
<script 
    data-env="sandbox" 
    data-callback="<?php echo BASEURL; ?>donor_registration_dollar.php"
    data-tax="0" 
    data-shipping="0" 
    data-amount="0" 
    data-quantity="0" 
    data-name="Donate"
    data-image_url="<?php echo BASEURL; ?>images/bg.jpg"
    data-return="<?php  echo BASEURL; ?>donor_success_register.php"
    data-rm="2" 
    data-button="donate" src="js/paypalbutton.js?merchant=buisiness_etf@paypal.com">
    </script>
  </td>
  </tr>
</table></form>
 
						</div> 
					 
				</div>
			</div>	
		</div>
				<div class="wrapper">
					<div class="pad_left2 relative">
						<!--<img src="images/page6_img1.png" alt="" class="img1">-->
					</div>
				</div>
 
<!-- / content -->

<div style="margin-left:auto; margin-right:auto; padding-left:50px;"><!--<strong>Note: </strong> <br><br>$600 is the minimum gift. Still you can donate small amounts using "General Donation" option available at the end of each page--></div>
<div style="margin-left:auto; margin-right:auto"><?php include("footer.php"); ?></div>

</div>
</div>

	<script type="text/javascript">Cufon.now();</script>
	<script>
		var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["blur"]});
		var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["blur"]});
		var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {validateOn:["blur"]});
		var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "none", {validateOn:["blur"]});
		var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "none", {validateOn:["blur"]});
		var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6", "email", {validateOn:["blur"]});
		var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7", "none", {validateOn:["blur"]});
		var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1", {validateOn:["blur"]});
	</script>
</body>
</html>