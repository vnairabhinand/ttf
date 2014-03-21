<?php 

session_start();

include("include/config.php");



function curPageURL() {

 $pageURL = 'http';

 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}

 $pageURL .= "://";

 if ($_SERVER["SERVER_PORT"] != "80") {

  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];

 } else {

  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];

 }

 return $pageURL;

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

<script>

var config = {

base: "<?php echo BASEURL; ?>"

};







</script>









<script type="text/javascript" src="js/jquery-1.6.js"></script>

<script type="text/javascript" src="js/paypalbutton.js"></script

><script type="text/javascript" src="js/cufon-yui.js"></script>



<script type="text/javascript" src="js/cufon-replace.js"></script> 



<script type="text/javascript" src="js/Vegur_700.font.js"></script>



<script type="text/javascript" src="js/Vegur_400.font.js"></script>



<script type="text/javascript" src="js/Vegur_300.font.js"></script>



<script type="text/javascript" src="js/atooltip.jquery.js"></script>



<script type="text/javascript" src="js/script.js"></script>



<script type="text/javascript" src="js/tabs.js"></script>

<script type="text/javascript" src="js/menucontents.js"></script>



<script type="text/javascript" src="js/anylinkmenu.js"></script>

<script type="text/javascript">



//anylinkmenu.init("menu_anchors_class") //Pass in the CSS class of anchor links (that contain a sub menu)

anylinkmenu.init("menuanchorclass")



</script>

<script>

$(document).ready(function(){

  $("#pay").click(function(){

   //alert("The paragraph was clicked.");

  	var amount =$('input[name=new_amount]').val();

	

 	if(amount <= 600)

 	{

		

		$('input[name=amount]').val('600.00');

		$(".paypal-button").submit();

	}

	else

	{

		

		//alert(amount);

		

		$('input[name=amount]').val(amount);

		

		$(".paypal-button").submit();

	}

 	

  });

  

  $("#pay_guest").click(function(){

   //alert("The paragraph was clicked.");

  	var amount =$('input[name=new_amount]').val();

	

 	if(amount <= 25)

 	{

		

		$('input[name=amount]').val('25.00');

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



</head>



<body id="page3">



	<div class="body1">



		<div class="main">



<!-- header -->



			<header>



             <?php $page = 2; ?>



			<?php include("menu.php"); ?>	



            



			</header><div class="ic"><div class="inner_copy"></div></div>



<!-- / header -->



<!-- content --><div class="box1" style="padding:1px;">



						



                    </div>







			<article id="content" class="tabs">



				<div class="wrapper">



				     



                    <section class="col1">
                  <?php  if(isset($_GET['status']))
{
echo "<span style=\"margin-left:135px; font-size:14px; color:green; \">Your payment is Successfull.Thank you for donating</span>"; 
}
?>
                    </section>

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