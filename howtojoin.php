<?php session_start();



  include("include/config.php");

?> 

<!DOCTYPE html>



<html lang="en">



<head>



<title>How To Join</title>



<meta charset="utf-8">



<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">



<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">



<link rel="stylesheet" href="css/style.css" type="text/css" media="all">



<script>



var config = {

base: "<?php echo BASEURL; ?>"

};

</script>

<!--<script type="text/javascript" src="js/jquery-1.6.js"></script>-->

<script src="js/jquery-1.7.2.min.js"></script>



<script type="text/javascript" src="js/cufon-yui.js"></script>



<script type="text/javascript" src="js/cufon-replace.js"></script> 



<script type="text/javascript" src="js/Vegur_700.font.js"></script>



<script type="text/javascript" src="js/Vegur_400.font.js"></script>



<script type="text/javascript" src="js/Vegur_300.font.js"></script>



<script type="text/javascript" src="js/atooltip.jquery.js"></script>



<script type="text/javascript" src="js/script.js"></script>

<script type="text/javascript" src="js/menucontents.js"></script>



<script type="text/javascript" src="js/anylinkmenu.js"></script>

<script type="text/javascript" src="js/script.js"></script>

<script>

anylinkmenu.init("menuanchorclass");



</script>



<script>

$(document).ready(function(){

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

<link rel="stylesheet" type="text/css" href="css/anylinkmenu.css" />

</head>



<body id="page4">



<div class="body1">



	<div class="main">



<!-- header -->



		<header>



		  <?php $page=6; ?>		



          <?php include("menu.php"); ?>            



		</header>



<!-- / header -->



<!-- content -->



		<article id="content">



			<div class="wrapper">



				<div class="box1">



					<div class="line1">



						<div class="line2 wrapper">



							<section class="col1">



								<a href="howitworks.php"><h2><strong>H</strong>ow It Work<span></span>s</h2>



								<div class="pad_bot1"><figure><img src="images/page4_img1.jpg" alt=""></figure></div>



								</a>



					    </section>



							<section class="col1 pad_left1">



								



								<a href="howtojoin.php"><h2 class="color2"><strong>H</strong>ow to Join<span></span></h2>



								<div class="pad_bot1"><figure><img src="images/page4_img2.jpg" alt=""></figure></div>



								</a>



						  </section>



							<section class="col1 pad_left1">



								<a href="faqs.php"><h2 class="color3"><strong>F</strong>AQs<span></span></h2>



								<div class="pad_bot1"><figure><img src="images/page4_img3.jpg" alt=""></figure></div>



								</a>



							</section>



						</div>



					</div>



				</div>	



			</div>



			<div class="wrapper">



	

    <div class="pad_left2">

				  <h4><span><cufon class="cufon cufon-canvas" alt="How " style="width: 74px; height: 35px;"><canvas width="104" height="39" style="width: 104px; height: 39px; top: -3px; left: -2px;"></canvas><cufontext>How </cufontext></cufon></span><cufon class="cufon cufon-canvas" alt="to " style="width: 35px; height: 35px;"><canvas width="63" height="38" style="width: 63px; height: 38px; top: -2px; left: -1px;"></canvas><cufontext>to </cufontext></cufon><cufon class="cufon cufon-canvas" alt="Join" style="width: 54px; height: 35px;"><canvas width="72" height="38" style="width: 72px; height: 38px; top: -2px; left: -1px;"></canvas><cufontext>Join</cufontext></cufon></h4>

					

					<ul class="bul">

                   

                      <p align="center" style="font-size:15px; font-style:italic;">You can begin the registration process with ETF by drawing your cursor over the "Register" button at the top right of the page and selecting "Church" or "Donor". </p>

                      Donors:<br>

                      <ul>

                        <li>In  the process of registering to become a donor, you will be asked to commit to  giving support of $50 per month over a period of one year, which will equal  $600 a year. This can be paid for at once, or monthly, either by credit card or  by check through US mail.</li>

                        <li>After  you have registered and donated, you will receive a receipt for tax purposes as well as a thank  you letter with additional information. You may log back in at any time to view  your account status or to select additional needs to meet. <br>

                        </li>

                       <!-- <li><center><a href="#"><img src="images/donorbtb.png " align="middle" ></a></center></li>-->

                      </ul>

                      

                     <br>

                       Churches:

                      <ul>

                      <li>In the process of registering your church with  ETF, you will be asked to submit general information about your congregation  and the needs you have in your congregation. </li>

                            <li>If you already have specific needs in your  congregation, you can submit profiles of those needs for ETF to review. </li>

                        <!--<li><center><a href="#"><img src="images/memberbtb.png " align="middle" ></a></center></li>-->

                      </ul>

                       <br>  

                    

                    </ul>

                    <p>

                    <span>



                    </span>

                 



                    </p>

				</div>

    

    

    

    



			</div>



			



		</article>









<!-- / content -->



<!-- footer -->



	 <?php include("footer.php"); ?>	



<!-- / footer -->



	</div>



</div>



<script type="text/javascript">Cufon.now();</script>



</body>







</html>