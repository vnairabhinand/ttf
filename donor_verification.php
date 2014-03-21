<?php  include("include/config.php");

$msg="";

if(isset($_POST[submit]))

	{

		extract($_POST);

		if(mysql_num_rows(mysql_query("select * from donor_register where verification_code='$vcode' and donor_register_id=".$_REQUEST[rid]))>0)

		{

			mysql_query("update donor_register set is_verify=1 where donor_register_id=".$_REQUEST[rid]);	

			$msg="You are successfully verified.";	
			echo "<script>window.location='donorlogin.php'</script>";

		}else

		{

			$msg="Verification code invalid.";		

		}

	}



?>



<!DOCTYPE html>

<html lang="en">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Welcome to especiallythefamily.org</title>

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

<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

<script type="text/javascript" src="js/tms-0.3.js"></script>

<script type="text/javascript" src="js/tms_presets.js"></script>

<script type="text/javascript" src="js/backgroundPosition.js"></script>

<script type="text/javascript" src="js/atooltip.jquery.js"></script>

<script type="text/javascript" src="js/script.js"></script>

<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>

<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>

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

					    <h2 class="color2"><strong>D</strong>onor<span>Verification</span></h2>

							<form id="MemberForm" method="post">

					      <?php if($msg!=""){ echo $msg;} ?>

                        <div class="wrapper" >

                      

                        <span style="width:118px;">Verification&nbsp;Code:</span><span id="sprytextfield1">

                        	  <input type="text" class="input" name="vcode" id="vcode">

                       	    </span></div>

                            <input type="submit" class="button2 color3" name="submit" id="submit" value="Submit" >                          

							<!--<a href="#" class="button2 color3" onClick="document.getElementById('MemberForm').submit()">Send</a>-->

							<a href="#" class="button2 color3" onClick="document.getElementById('MemberForm').reset()">Clear</a>

					

					</form>

						</section>

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

<script>

/*$(window).load(function(){

	$('.slider')._TMS({

		preset:'zabor',

		easing:'easeOutQuad',

		duration:800,

		pagination:true,

		banners:true,

		waitBannerAnimation:false,

		slideshow:6000,

		bannerShow:function(banner){

			banner

				.css({right:'-700px'})

				.stop()

				.animate({right:'0'},600, 'easeOutExpo')

		},

		bannerHide:function(banner){

			banner

				.stop()

				.animate({right:'-700'},600,'easeOutExpo')

		}

	})

	$('.pagination li').hover(function(){

		if (!$(this).hasClass('current')) {

			$(this).find('a').stop().animate({backgroundPosition:'0 0'},600,'easeOutExpo', function(){$(this).parent().css({backgroundPosition:'-20px 0'})});

		}

	},function(){

		if (!$(this).hasClass('current')) {

			$(this).css({backgroundPosition:'0 0'}).find('a').stop().animate({backgroundPosition:'-250px 0'},600,'easeOutExpo');

		}

	})

})*/

var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["blur"]});



</script>

</body>

</html>