<?php 
  session_start();
  include("include/config.php");
      
  if($_REQUEST['item_number']=='')
  {
  mysql_query("update guest_payment set guest_payment_status=1,guest_payment_data='".$_REQUEST['paypal_data']."',payer_id='".$_REQUEST['payer_id']."' where guest_payment_id=".$_REQUEST['item_number']);
  }  
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
            
			</header>
            
<!-- / header -->
<!-- content -->
			<article id="content" class="tabs">
				<div class="wrapper">
					<div class="box1">
						<table width="100%"><tr><td style="padding-left:8px;"><h2>Thank you.</h2>
                        

                        
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