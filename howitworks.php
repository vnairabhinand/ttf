<?php session_start();

  include("include/config.php");

?>



<!DOCTYPE html>

<html lang="en">

<head>

<title>HOW IT WORKS</title>

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

<script type="text/javascript" src="js/atooltip.jquery.js"></script>

<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/menucontents.js"></script>

<script type="text/javascript" src="js/anylinkmenu.js"></script>
<script type="text/javascript">

//anylinkmenu.init("menu_anchors_class") //Pass in the CSS class of anchor links (that contain a sub menu)
anylinkmenu.init("menuanchorclass")

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

<body id="page4">

<div class="body1">

	<div class="main">

<!-- header -->

		<header>	

           <?php $page=3; ?>		

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



							  <div class="pad_bot1">

                              <h2 class="color2"><strong>H</strong>ow It Works<span></span></h2>

								  <figure><img src="images/page4_img1.jpg" alt=""></figure>

							  </div>

							  

						  </section>

							<section class="col1 pad_left1">

								<a href="howtojoin.php">

								<h2 class="color2"><strong>H</strong>ow to Join<span></span></h2>

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

  <h4><span><cufon class="cufon cufon-canvas" alt="How " style="width: 74px; height: 35px;"><canvas width="104" height="39" style="width: 104px; height: 39px; top: -3px; left: -2px;"></canvas><cufontext>How </cufontext></cufon></span><cufon class="cufon cufon-canvas" alt="it" style="width: 35px; height: 35px;"><canvas width="63" height="38" style="width: 63px; height: 38px; top: -2px; left: -1px;"></canvas><cufontext>it </cufontext></cufon><cufon class="cufon cufon-canvas" alt="Works" style="width: 54px; height: 35px;"><canvas width="72" height="38" style="width: 72px; height: 38px; top: -2px; left: -1px;"></canvas><cufontext>Works</cufontext></cufon></h4>
	

					<h4><span>Donors:</span></h4>

					  Donors are people from anywhere in the world who wish to donate  money to ETF to be distributed to people in need in developing countries. When  you sign up to become an ETF donor you will be able to make a tax-deductible  donation by credit card, or by check through U.S. mail. 100% of your donation  will go directly to meeting the needs indicated on the website. Upon receipt of  your tax-deductible donation, ETF will transfer the funds via a money gram  service to the appropriate ETF member. ETF volunteers work with the local  members to monitor the ongoing needs. You may receive a thank you letter, and  you may be asked in the future to meet the same need if it is of a recurring  nature. Upon registration, or by later logging into your account, you may also  select the option of making your support anonymous.</p>

                      

                     <h4><span>Churches:</span></h4>

                     After registering, church leaders (or highly trusted individuals designated by the church leader) will be able to log in on behalf of their church to help ETF facilitate resources to meet the needs of the people in their church. When you register your church with ETF you will be able to upload profiles of the specific needs people have in your congregation. You will then be in charge of receiving and distributing funds from ETF to the appropriate people in your church.</p>

<strong style="font-style:italic">

				<br/><br/>Acts 4: 33-35 <p>

&quot; God’s grace was so powerfully at work in them all that there were no needy persons among them. For from time to time those who owned land or houses sold them, brought the money from the sales and put it at the apostles’ feet, and it was distributed to anyone who had need. &quot;

</p>

		</strong>

     

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