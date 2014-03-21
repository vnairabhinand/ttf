<?php session_start();

  include("include/config.php");

?>



<!DOCTYPE html>

<html lang="en">



<head>

<title>Submit</title>

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

<body id="page2">

	<div class="body1">

		<div class="main">

<!-- header -->

			<header>

			  <?php $page=8; ?>		

              <?php include("menu.php"); ?>             

			</header>

<!-- / header -->

<!-- content -->

			<article id="content">

				<div class="wrapper">

					

				</div>

				<div class="wrapper">

					<div class="wrapper">

						

						<p class="pad_left2" style=" padding-top:65px; padding-bottom:15px;">

							              The staff of Especially The Family are eager to work with local church leaders to help identify and meet specific needs. At the current time, we are only accepting need profiles from church leaders who have their names listed on the ICOC church locator page (<a href="http://www.dtodayinfo.net/">http://www.dtodayinfo.net/</a>). These leaders can also e-mail us to designate someone else they trust in their congregation to facilitate this activity. </p>

                       

					</div>

					<p class="pad_left2">If you would like to submit a need profile, please send an e-mail to <a href="mailto:info@especiallythefamily.org">info@especiallythefamily.org</a>.  Once we confirm your identity, we will send you the form and information you need to submit a need profile for approval.</p>

                    

                    <p class="pad_left2">We look forward to working together with you! </p>

                    

				</div>

				<!--<div class="wrapper">

							<<section class="col1">

								<ul class="list1">

									<li><a href="#">Sed ut perspiciatis unde omnis</a></li>

									<li class="color2"><a href="#">Iste natus error sit voluptatem accus</a></li>

									<li class="color3"><a href="#">Antium doloremque totam remiam</a></li>

								</ul>	

							</section>

							<section class="col1 pad_left1">

								<ul class="list1">

									<li><a href="#">Eaque ipsa quae ab illo inventore</a></li>

									<li class="color2"><a href="#">Veritatis et quasi architecto beatae</a></li>

									<li class="color3"><a href="#">Dicta sunt explicabo enim ipsam</a></li>

								</ul>

							</section>

							<section class="col1 pad_left1">

								<ul class="list1">

									<li><a href="#">Voluptatem quia voluptas sit</a></li>

									<li class="color2"><a href="#">Aspernatur aut odit aut fugit sed quia</a></li>

									<li class="color3"><a href="#">Consequuntur magni dolores eos</a></li>

								</ul>

							</section>

						</div><div class="wrapper">

					<div class="box2">

						

					</div>

				</div> -->

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