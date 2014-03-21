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
function get_country($country_id)

{



$select = "SELECT cname FROM countries WHERE cid ='$country_id' "; 

$rs = mysql_query($select);

$ros = mysql_fetch_array($rs);

$country_name = $ros['cname'];

return $country_name;

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


					                            


                          <h2 class="color2"><strong>S</strong>upported needs List</h2>

<?php
 $q=mysql_query("select * from transaction_details where need_reuest_id  =  '".$_GET['did']."' and  	donor_id  =  '".$_SESSION[did]."'");
 $dat=mysql_fetch_array($q);	
$q=mysql_query("select * from member_donation_request where member_donation_request_id  =  '".$_GET['did']."'" ) ;
if(mysql_num_rows($q)>0)
{
$data=mysql_fetch_array($q);	
?>
<div style="-webkit-box-shadow: 0px 0px 7px rgba(45, 50, 50, 1);-moz-box-shadow:    0px 0px 7px rgba(45, 50, 50, 1);box-shadow:   0px 0px 7px rgba(45, 50, 50, 1); -moz-border-radius: 10px;
-webkit-border-radius: 5px;border-radius: 5px;  -khtml-border-radius: 5px; height:auto; margin-bottom:30px; padding-bottom:20px;">

<div style="float:left; padding:10px; margin-left:10px;"><strong>Title</strong><br><br><?php echo $data[title]; ?></div>
<div style="float:right; padding:10px; margin-left:10px;"><strong>Country</strong><br>
  <br><?php  echo get_country($data['country']); ?></div>
<div style="clear:both"></div>
<div style="float:left; padding:10px; margin-left:10px;"><strong>Amount Need</strong><br>
  <br><?php echo $data[amount]; ?></div>
<div style="float:left; padding:10px; margin-left:10px;"><strong>Amount paid</strong><br>
  <br><?php echo $dat[amount]; ?></div>
<div style="float:left; padding:10px; margin-left:10px;"><strong>Payment Date</strong><br>
  <br><?php echo $dat[paydate]; ?></div>  
<div style="float:left; padding:10px; margin-left:10px;"><strong>Status</strong><br>
  <br><?php if($data[status ]==1){ echo "Approve";}else if($data[status ]==2){ echo "Rejected";  }else{ echo "Disapprove"; }?></div>  
<div style="float:left; padding:10px; margin-left:10px;"><strong>Description</strong>
<br><?php if(!empty($data[img])) { ?><img src="upload/<?php echo $data[img]; ?>"  width="200" height="200" align="left" style="padding-top:30px; padding-right:10px;" /><?php } ?><br><?php echo $data[description]; ?>
</div>    
<div style="float:left; padding:10px; margin-left:10px;"><strong>Reason</strong><br>
  <br>
  <?php echo $data[reason]; ?></div>   
<div style="clear:both"></div>
</div>				                        

<?php } ?>


                    

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