<?php  session_start();


  include("include/config.php");


if($_SESSION[did]=='')


{


	header("Location:index.php");


	exit();


}





if(isset($_POST[submit]))


	{				


		extract($_POST);


		


	  if($username!=$old_username)


	 	{ 


		 $chk_username_query =	mysql_query("select * from donor_register where donor_username = '".$username."'");


	 	 $chk_username_cnt = mysql_num_rows($chk_username_query);


			if($chk_username_cnt > 0)


			 {


				$err = "Username alreday available";  


			 }


		}else if($email!=$old_email)


	 	{ 


	  $chk_email_query =	mysql_query("select * from donor_register where donor_email = '".$email."'");


	  $chk_email_cnt = mysql_num_rows($chk_username_query);


			if($chk_email_cnt > 0)


			  {


				 $err = "Email Id alreday available";  


			  }


		}


	  else	 


	  {


		       $set="set donor_first_name='$leader_fname',


						donor_last_name='$leader_lname',


						donor_address='$address',


						donor_phone='$phone',


						donor_email='$email',


						donor_username='$username'";


					mysql_query("update donor_register $set where donor_register_id=".$_SESSION[did]);					


			 $err = "Profile updated successfully.";  					 


	   }


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

<!--<script type="text/javascript" src="js/jquery-1.6.js"></script>-->

<script src="js/jquery-1.7.2.min.js"></script>

<script src="js/lightbox.js"></script>

<link rel="stylesheet" href="lightbox.css" type="text/css" media="screen" />



<script type="text/javascript" src="js/cufon-yui.js"></script>



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





function sortthelist(countryid)

{

	 if(countryid == "all")

     {

		 window.location = 'viewneeds.php';

     }

	 else

	 {

		 window.location = 'viewneeds.php?c='+countryid;

	 }

}



function show_hide(val)

{

	if(val == "hide")

	{

	$('#map').fadeOut(2000);

	$('#hidspan').fadeOut(2000);

	$('#showpan').fadeIn(2000);

	$('#zoombtn').hide();

	}

	else

	{

	$('#map').fadeIn(2000);

	$('#showpan').fadeOut(2000);

	$('#hidspan').fadeIn(2000);	

	$('#zoombtn').show();	

	}

}



function show_zoom()

{

	$("#map").click();

}

</script>





<link rel="stylesheet" type="text/css" href="css/anylinkmenu.css" />

<link rel="stylesheet" type="text/css" href="css/pagination.css" />





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


                    <?php include("left_menu.php"); ?>


						


						<section class="col2 pad_left1">


					                            


                                                <h2 class="color2"><strong>P</strong>rofile</h2>


					<?php 


					      $query = mysql_query("select * from donor_register where donor_register_id = '".$_SESSION[did]."'"); 


					      $info = mysql_fetch_array($query);						 


					?>	


                        <span class="error_msg">  <?php if($err!='') { echo $err; } ?> </span>


                        <br/>





							<form id="MemberForm" method="post">


						<div>


<div class="wrapper"><span>First Name: <font style="color:#FF0000">*</font> </span><span id="sprytextfield2">


  <span style="padding-left:24px;">  
  <input name="leader_fname" type="text" class="input" id="leader_fname" value="<?php echo $info['donor_first_name']; ?>" size="47" style="height:30px; margin-bottom:10px;"></span>


  </span></div>


                      <div class="wrapper"><span>Last Name: <font style="color:#FF0000">*</font> </span><span id="sprytextfield3">


                    <span style="padding-left:25px;">    
<input name="leader_lname" type="text" class="input" id="leader_lname" value="<?php echo $info['donor_last_name']; ?>" size="47" style="height:30px; margin-bottom:10px;"></span>


</span></div>


              <div class="wrapper"><span>Address: <font style="color:#FF0000">*</font></span><span id="sprytextfield4">


               <span style="padding-left:40px;"> 
               
               <textarea  name="address" id="address" cols="36" rows="5" style="margin-bottom:10px;"><?php echo $info['donor_address']; ?></textarea>
               
              
               
               </span>


                </span></div>


    <div class="wrapper"><span>Phone: <font style="color:#FF0000">*</font> </span><span id="sprytextfield5">


     <span style="padding-left:50px;">   
     <input name="phone" type="text" class="input" id="phone" value="<?php echo $info['donor_phone']; ?>" size="47" style="height:30px; margin-bottom:10px;"></span>


  </span></div>                            


                            <div class="wrapper"><span>Email: <font style="color:#FF0000">*</font> </span><span id="sprytextfield6">


                             <span style="padding-left:57px;">   
<input name="email" type="text" class="input" id="email" value="<?php echo $info['donor_email']; ?>"  size="47" style="height:30px; margin-bottom:10px;"></span>


                           <input type="hidden" class="input" name="old_email" id="old_email" value="<?php echo $info['donor_email']; ?>"> 


                           </span></div>


<div class="wrapper"><span>Username: <font style="color:#FF0000">*</font> </span><span id="sprytextfield7">


 <span style="padding-left:27px;">   
 <input name="username" type="text" class="input" id="username" value="<?php echo $info['donor_username']; ?>" size="47" style="height:30px; margin-bottom:10px;"> </span>


   <input type="hidden" class="input" name="old_username" id="old_username" value="<?php echo $info['donor_username']; ?>">


</span></div>


                           <br/> 


                            <input type="submit" class="button2 color3" name="submit" id="submit" value="Submit" >                          


							<!--<a href="#" class="button2 color3" onClick="document.getElementById('MemberForm').submit()">Send</a>-->


							<a href="#" class="button2 color3" onClick="document.getElementById('MemberForm').reset()">Clear</a>


						</div>


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


var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["blur"]});


var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none");


var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {validateOn:["blur"]});


var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "none", {validateOn:["blur"]});


var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "none", {validateOn:["blur"]});


var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6", "none", {validateOn:["blur"]});


var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7", "none", {validateOn:["blur"]});


</script>


</body>


</html>