<?php session_start();



  include("include/config.php");



?>







<!DOCTYPE html>



<html lang="en">







<head>



<title>Contact</title>



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



<body id="page5">



<div class="body1">



	<div class="main">



<!-- header -->



		<header>			



           <?php $page=5; ?>		



          <?php include("menu.php"); ?>  



		</header>



<!-- / header -->



<!-- content -->



		<article id="content">



			<div class="wrapper">



				<div class="box1">



					<div class="line1 wrapper">



						<section class="col1">



							<h2><strong>O</strong>ur<span>Info</span>	</h2>



							<p>Mailing Address:<br>



							  450 North Meandering Way<br>
Suite 1001,Fairview,<br>
TX 75069, USA<br>
Phone:+14694507630<br>







                            <p><strong>How to Contact Us:</strong>



                            info@especiallythefamily.org



							</p>



                            </section>



						<section class="col2 pad_left1">



					    <h2 class="color2"><strong>C</strong>ontact<span>Form</span></h2>



							<form id="ContactForm">



						<div>



							<div class="wrapper"><span>Your Name:</span><input type="text" class="input"></div>



							<div class="wrapper"><span>Your E-mail:</span><input type="text" class="input"></div>



							<div class="wrapper"><span>Your Website:</span><input type="text" class="input"></div>



							<div class="textarea_box"><span>Your Message:</span><textarea name="textarea" cols="1" rows="1"></textarea></div>



							<a href="#" class="button2 color3" onClick="document.getElementById('ContactForm').submit()">Send</a>



							<a href="#" class="button2 color3" onClick="document.getElementById('ContactForm').reset()">Clear</a>



						</div>


					</form>
<br><br>
<div align="center">To view the country representative contact list, please <a href="contryrep.php">click here</a></div>


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



<!-- footer -->



	   <?php include("footer.php"); ?>	



<!-- / footer -->



	</div>



</div>



<script type="text/javascript">Cufon.now();</script>



</body>







</html>