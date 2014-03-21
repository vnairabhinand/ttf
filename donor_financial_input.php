<?php  include("include/config.php");  
$vai = base64_decode($_GET['val']);
$vemil = base64_decode($_GET['mm']);

	$chk_username_query =	mysql_fetch_array(mysql_query("select * from donor_register where donor_register_id = '$vai' and  donor_email = '".$vemil."'   "));

mysql_query("update donor_register  set is_verify = '1'  where  donor_register_id = '$vai' and donor_email = '$vemil' ");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Welcome to especiallythefamily - Success Register </title>
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
							<section class="col2 pad_left1" style="width:800px">
								<span style="text-align:center;font-size:14px;font-weight:bold;line-height:1.2; font-family:Arial, Helvetica, sans-serif"><br />
								</span>
							</section>
                            <div style="text-align:left; clear:both">
                              <p> 
                              <br><span style="font-size:24px; line-height:1.5">Thank you for registering to become a donor with Especially The Family! Please allow up to 48 hours for us to approve your account. When you are approved we will send you another email letting you know you are free to log in. Thanks!</span>                              <br>
                              </p>
 
                              <br>
                            </div>
						</div>
					</div>	
				</div>

				<div class="wrapper">
					<div class="pad_left2 relative">
						<!--<img src="images/page6_img1.png" alt="" class="img1">-->
					</div>
				</div>
			</article>
		<!-- / content -->
      	<?php include("footer.php"); ?>  
		</div>
	</div>

	<script type="text/javascript">Cufon.now();</script>
</body>
</html>