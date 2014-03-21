<?php session_start();



  include("include/config.php");



?>







<!DOCTYPE html>



<html lang="en">



<head>



<title>Country Representatives</title>



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



		   <?php $page=5; ?>		



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



                              <h2 class="color2"><strong>R</strong>epresentatives<span></span></h2>



								  <figure><img src="images/page4_img1.jpg" alt=""></figure>



							  </div>



							  



						  </section>



							<section class="col1 pad_left1">



								<a href="howtojoin.php">



								<h2 class="color2"><strong></strong><span></span></h2>



								<div class="pad_bot1"><figure><img src="images/page4_img2.jpg" alt=""></figure></div>



								</a>



						  </section>



							<section class="col1 pad_left1">



								<a href="faqs.php">
								<h2 class="color3"><strong></strong></h2>



								<div class="pad_bot1"><figure><img src="images/page4_img3.jpg" alt=""></figure></div>



								</a>



							</section>



						</div>



					</div>



				</div>	



			</div>



			  <div class="wrapper">
			    <table width="100%" border="0" cellspacing="0" cellpadding="0">
			      <tr>
			        <td width="3%">&nbsp;</td>
			        <td width="23%"><strong>Country</strong></td>
			        <td width="24%"><strong>Representatives</strong></td>
			        <td width="50%"><strong>Email</strong></td>
		          </tr>
			      <tr>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
		          </tr>
                  
            <?php $q=mysql_query("select * from countryRep"); while($data=mysql_fetch_array($q)){ ?>  
			      <tr>
			        <td>&nbsp;</td>
			        <td><?php echo $data['cname']?></td>
			        <td><?php echo $data['name']?></td>
			        <td><a href="mailto:<?php echo $data['caddress']?>"><?php echo $data['caddress']?></a></td>
		          </tr>
				  <tr><td colspan="2">&nbsp;</td></tr>
				  <?php } ?>
                  
                  
		        </table>
			    <p class="pad_left2">&nbsp;</p>
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