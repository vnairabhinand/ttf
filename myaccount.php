<?php session_start();


if($_SESSION[mid]=='')


{


	header("Location:index.php");


	exit();


}


  include("include/config.php");


?>





<!DOCTYPE html>


<html lang="en">





<head>


<title>My Account</title>


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


<body id="page5">


<div class="body1">


	<div class="main">


<!-- header -->


		<header>			


           <?php $page=9; ?>		


          <?php include("menu.php"); ?>  


		</header>


<!-- / header -->


<!-- content -->


		<article id="content">


			<div class="wrapper">


				<div class="box1">


					<div class="line3 wrapper">


						<?php include("left_menu.php"); ?>


                        


						<section class="col2 pad_left1">


					    


                        <h2 class="color2"><strong>P</strong>rofile</h2>


					<?php 


					      $query = mysql_query("select * from member_register where member_register_id = '".$_SESSION[mid]."'"); 


					      $info = mysql_fetch_array($query);						 


					?>	

<div style=" padding:20px; -webkit-box-shadow: 0px 0px 7px rgba(45, 50, 50, 1);-moz-box-shadow:    0px 0px 7px rgba(45, 50, 50, 1);box-shadow:   0px 0px 7px rgba(45, 50, 50, 1); -moz-border-radius: 10px;
-webkit-border-radius: 5px;border-radius: 5px;  -khtml-border-radius: 5px; height:auto; margin-bottom:30px; padding-bottom:20px;">
                       <form id="MemberForm" method="post">


						<div>


						


                        <div class="wrapper">


                           <span style="font-weight:bold">Church Name :</span>


                              <span style="padding-left:40px;"><?php echo $info['church_name']; ?></span>


                       	</div>


                                                


                          <div class="wrapper">


                           <span style="font-weight:bold">Username :</span>


                           <span style="padding-left:62px;"><?php echo $info['member_username']; ?></span>


                       	</div>


                        


                        <div class="wrapper">


                           <span style="font-weight:bold">Contact Person :</span>


                              <span style="padding-left:27px;"><?php echo $info['Contactperson']; ?></span>


                       	</div>








                        





						 <div class="wrapper">


                           <span style="font-weight:bold"> Email Address :</span>


                              <span style="padding-left:37px;"><?php echo $info['member_email']; ?></span>


                       	</div>


                        





                        <div class="wrapper">


                           <span style="font-weight:bold">Mailing Address :</span>


                             <span style="padding-left:27px;"> <?php echo $info['member_address']; ?></span>


                       	</div>








                        <div class="wrapper">


                           <span style="font-weight:bold">Phone Number :</span>


                               <span style="padding-left:32px;"><?php echo $info['member_phone']; ?></span>


                       	</div>


                        


                       


                            


						</div>


					</form></div>


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


</body>





</html>