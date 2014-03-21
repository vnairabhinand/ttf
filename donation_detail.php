<?php 
					 
session_start();

include("include/config.php");

 if($_SESSION['did'] < 1 ) { header("location:viewneeds.php?log=log"); exit(); } 

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



					<?php 

					
					$q=mysql_query("select * from member_donation_request where member_donation_request_id=".$_REQUEST[mdr]); 



						while($data=mysql_fetch_array($q)){



					?>



                    			<h4><span><?php //echo date("F d",strtotime($data['approve_date'])); ?> </span><?php //echo date("Y",strtotime($data['approve_date'])); ?>

<?php

if(isset($_GET['status']))

{

echo "<span style=\"margin-left:135px; font-size:14px; color:green; \">Your payment is Successfull.Thank you for donating</span>";	

}

?>

<span style="float:right;font-size:19px;">Amount : $<?php echo $data['amount']; ?></span></h4>



<p class="pad_bot2"><strong style="font-size:18px"><?php echo $data['title']; ?></strong>
<?php if(!empty($data['img'])) { ?><div style="float:right"> <img src="upload/<?php echo $data['img']; ?>" width="400" height="400" ></div><br>  <?php } ?>
Country: <?php
function get_country($country_id)

{



$select = "SELECT cname FROM countries WHERE cid ='$country_id' "; 

$rs = mysql_query($select);

$ros = mysql_fetch_array($rs);

$country_name = $ros['cname'];

return $country_name;

}

  echo get_country($data['country']);  ?>
<?php if(isset($_GET['guest'])): ?>

<span style="text-align:right; float:right;"> &nbsp;&nbsp; $&nbsp;<input type="text" style="border:1px solid; width:70px;  text-align:center;" name="new_amount" onKeyUp="intOnly(this)" onKeyPress="intOnly(this)"  value="25.00">&nbsp;&nbsp;<img src="images/paypal_donate_button.jpg" id="pay_guest" style="width:132px;height:70px; cursor:pointer;"></span>

<span style="text-align:right; float:right; visibility:hidden;" >

<script 

    data-env="sandbox" 

    data-callback="<?php echo BASEURL; ?>payment_callback.php" 

    data-tax="0" 

    data-shipping="0" 

    data-amount="0" 

    data-quantity="0" 

    data-name="Donate"

    data-image_url="<?php echo BASEURL; ?>images/bg.jpg"

    data-return="<?php echo BASEURL; ?>payment_callback.php?donor=<?php echo "guest"; ?>&need_reuest_id=<?php echo $data['member_donation_request_id']; ?>"

    data-rm="2" 

    data-button="donate" src="js/paypalbutton.js?merchant=buisiness_etf@paypal.com"

></script>

</span>





<?php endif; ?>

<?php if($_SESSION['did'] != ""){?>

<span style="text-align:right; float:right;"><!--Minimum Donation for one year is $600--> &nbsp;&nbsp; $&nbsp;<input type="text" style="border:1px solid; width:70px;  text-align:center;" name="new_amount" onKeyUp="intOnly(this)" onKeyPress="intOnly(this)"  value="600.00">&nbsp;&nbsp;<img src="images/paypal_donate_button.jpg" id="pay" style="width:132px;height:70px; cursor:pointer;"></span>

<span style="text-align:right; float:right; visibility:hidden;" >

<script 

    data-env="sandbox" 

    data-callback="<?php echo BASEURL; ?>payment_callback.php" 

    data-tax="0" 

    data-shipping="0" 

    data-amount="0" 

    data-quantity="0" 

    data-name="Donate"

    data-image_url="<?php echo BASEURL; ?>images/bg.jpg"

    data-return="<?php echo BASEURL; ?>payment_callback.php?donor=<?php echo $_SESSION['did']; ?>&need_reuest_id=<?php echo $data['member_donation_request_id']; ?>"

    data-rm="2" 

    data-button="donate" src="js/paypalbutton.js?merchant=buisiness_etf@paypal.com"

></script>

</span>



<?php } 

else

{

	if(!isset($_GET['guest'])):

?>

<span style="text-align:right; float:right; color:#ffa626;" >If you would like to donate  please register as donor. We will not publish any donor data.<br/>Still you want to donate and not register <a href="<?php echo curPageURL()."&guest=yes"; ?>">click here</a></span>

<?php

	endif;

}

?>

</p>

                                <p><!--Collected : $--> <?php //echo $data['collected_amount']; ?></p>



							<p class="pad_bot1" align="justify"><?php echo $data['description']; ?></p>



<!--							<div style="float:right;"><a href="donate_page.php?amt=<?php echo $data['amount']; ?>&dmr=<?php echo $data['member_donation_request_id']; ?>"><img src="images/donate1.jpg" style="text-align:right;"></a></div>	-->		



					<?php } ?>	



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