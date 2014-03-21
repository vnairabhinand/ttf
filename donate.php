<?php session_start();
  include("include/config.php");
  extract($_POST);
  mysql_query("insert into guest_payment(guest_payment_id,guest_payment_first_name,guest_payment_last_name,guest_payment_email,guest_payment_amount,member_donation_request_id)
  				value(null,'".$leader_fname."','".$leader_lname."','".$email."','".$amount."',".$dmr.")");
  $gpi=mysql_insert_id();				
				
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>View Needs</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.6.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script> 
<script type="text/javascript" src="js/Vegur_700.font.js"></script>
<script type="text/javascript" src="js/Vegur_400.font.js"></script>
<script type="text/javascript" src="js/Vegur_300.font.js"></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/tabs.js"></script>
<!--[if lt IE 9]>
	<script type="text/javascript" src="js/html5.js"></script>
	<style type="text/css">
		.box1 figure {behavior:url(js/PIE.htc)}
	</style>
<![endif]-->
<!--[if lt IE 7]>
		<div style='clear:both;text-align:center;position:relative'>
			<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0" alt="" /></a>
		</div>
<![endif]-->
<style>
#MemberForm .input
{
	background-color: #CCCCCC;
    color: #000000;
    font: 12px "Trebuchet MS",Arial,Helvetica,sans-serif;
    height: 14px;
    padding: 3px 5px;
    width: 324px;
}	
	
}
</style>
</head>
<body id="page3">
	<div class="body1">
		<div class="main">
<!-- header -->
			<header>
             <?php $page = 2; ?>
			<?php include("menu.php"); ?>	
            
			</header><div class="ic"><div class="inner_copy">All <a href="http://www.magentothemesworld.com/" title="Best Magento Templates">premium Magento themes</a> at magentothemesworld.com!</div></div>
<!-- / header -->
<!-- content -->
			<article id="content" class="tabs">
				<div class="wrapper">
					<div class="box1">
						<table width="100%" align="center">
                        <tr><td style="padding-left:8px;"><h2>Guest Donation</h2>
                        
                        
		    </td></tr>
                        
                        <tr><td style="padding-left:8px;text-align:center">
                        
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" id="payPalForm">
                        <input type="hidden" name="item_number" value="<?php echo $gpi; ?>">
                        <input type="hidden" name="cmd" value="_xclick">
                        <input type="hidden" name="no_note" value="1">
                        <input type="hidden" name="business" value="mohinichevli@gmail.com">
                        <input type="hidden" name="currency_code" value="USD">
                        <input type="hidden" name="rm" value="2">
                        <input type="hidden" name="return" value="http://keystrokesinc.info/especiallythefamily/gthankyou.php">
                        <input type="hidden" name="cancel_return" value="http://keystrokesinc.info/especiallythefamily/gcancel.php">
                        <input type="hidden" name="item_name" id="item_name"   value="Donation"/>
                        <input type="hidden" name="amount" id="amount"  value="<?php echo $_REQUEST[amount]; ?>"/>
                        <input type="hidden" name="quantity" id="quantity" value="" />
                        <input type="submit" class="button2"  name="Continue1" value="Paynow"  >
                        </form>
                        
                        
		    </td></tr></table>
					
                    </div>
                   	
				
              
                </div>
				
       
			</article>
<!-- / content -->
<!-- footer -->
		<?php include("footer.php"); ?>	
<!-- / footer -->
		</div>
	</div>
<script type="text/javascript">Cufon.now(); tabs.init();</script>
</body>

</html>