<?php
include("include/config.php");

$donor_id = base64_decode($_GET['ses']);
$chck = "SELECT * FROM donor_register WHERE donor_register_id = '$donor_id' AND after_reg_stp = 0";
$rs = mysql_query($chck);

$numrows = mysql_num_rows($rs);
//echo $numrows;
if($numrows > 0 )
{
$donor_confirmed = $donor_id;

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
	anylinkmenu.init("menuanchorclass");
	</script>
 
<script>

$(document).ready(function(){

  
  });
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

                         <div style=" padding:20px; -webkit-box-shadow: 0px 0px 7px rgba(45, 50, 50, 1);-moz-box-shadow:    0px 0px 7px rgba(45, 50, 50, 1);box-shadow:   0px 0px 7px rgba(45, 50, 50, 1); -moz-border-radius: 10px;
-webkit-border-radius: 5px;border-radius: 5px;  -khtml-border-radius: 5px; height:auto; margin-bottom:30px; padding-bottom:20px;">
							  <div class="wrapper">
						 
								</div>
								
								<div class="wrapper">
                            
  <table width="900" border="1" cellspacing="10" cellpadding="30">
  <tr>
    <td >
   <strong>Please subscribe to Especially The family from two premium options listed below:</strong><br>
   </td>
  </tr>
    <tr>
    <td height="30"  align="left">

		<div style="margin-top:20px; margin-left:105px;">
		<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top"><input type="hidden" name="cmd" value="_xclick-subscriptions"><input type="hidden" name="business" value="KCWPKUGMN9UX8"><input type="hidden" name="lc" value="US"><input type="hidden" name="item_name" value="ETF Subscription"><input type="hidden" name="no_note" value="1"><input type="hidden" name="no_shipping" value="2"><input type="hidden" name="rm" value="1"><input type="hidden" name="return" value="http://www.especiallythefamily.org/ETF/payment_success"><input type="hidden" name="src" value="1"><input type="hidden" name="currency_code" value="USD"><input type="hidden" name="bn" value="PP-SubscriptionsBF:btn_subscribeCC_LG.gif:NonHosted"><table><tr><td><input type="hidden" name="on0" value="Subscriptions">Subscriptions</td></tr><tr><td><select name="os0"><option value="Monthly Premium">Monthly Premium : $50.00 USD - monthly</option><option value="Yearly Premium">Yearly Premium : $600.00 USD - yearly</option></select></td></tr></table><input type="hidden" name="currency_code" value="USD"><input type="hidden" name="option_select0" value="Monthly Premium"><input type="hidden" name="option_amount0" value="50.00"><input type="hidden" name="option_period0" value="M"><input type="hidden" name="option_frequency0" value="1"><input type="hidden" name="option_select1" value="Yearly Premium"><input type="hidden" name="option_amount1" value="600.00"><input type="hidden" name="option_period1" value="Y"><input type="hidden" name="option_frequency1" value="1"><input type="hidden" name="option_index" value="0"><input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"><img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1"><input type="hidden" name="rm" value="2"><input type="hidden" name="return" value="http://www.especiallythefamily.org/ETF/payment_success.php?did=<?php echo $donor_confirmed; ?>"></form>
		</div>


  </td>
  </tr>
</table>
 
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