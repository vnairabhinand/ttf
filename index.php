<?php session_start();

  include("include/config.php");
  //edited by manoj....@2014 march 23

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
<script type="text/javascript" src="js/menucontents.js"></script>

<script type="text/javascript" src="js/anylinkmenu.js"></script>
<script type="text/javascript">

//anylinkmenu.init("menu_anchors_class") //Pass in the CSS class of anchor links (that contain a sub menu)
anylinkmenu.init("menuanchorclass")

</script>


<link rel="stylesheet" type="text/css" href="css/anylinkmenu.css" />
</head>



<body id="page1">

<div class="body1">

	<div class="main">

     	

        <header>

          <?php $page = 1; ?>

          <?php include("menu.php"); ?>

          <?php include("slider.php"); ?>

        </header>

        

       <?php include("content.php"); ?>  

     

      <?php include("footer.php"); ?>  



</div>

</div>



<script type="text/javascript">Cufon.now();</script>

<script>

$(window).load(function(){

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

})

</script>

</body>

</html>