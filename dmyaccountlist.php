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


					                            


                                                <h2 class="color2"><strong>S</strong>upported needs List</h2>


					<?php 


					      $query = mysql_query("select * from donor_register where donor_register_id = '".$_SESSION[did]."'"); 


					      $info = mysql_fetch_array($query);						 


					?>	


                        <span class="error_msg">  <?php if($err!='') { echo $err; } ?> </span>


                        <br/>





							<table width="121%" border="1" cellpadding="0" cellspacing="0"  >



                    <tr>







                    <th width="10%" style="border:1px solid black;">Title



                    </th>



                    



                    <th width="27%" style="border:1px solid black;">Description



                    </th>



                    



                    <th width="15%" style="border:1px solid black;">Amount



                    </th>



                    <th width="14%" style="border:1px solid black;" >Status



                    </th>



                    



                    <th width="15%" style="border:1px solid black;" >Reason



                    </th>



                    <th width="19%" style="border:1px solid black;" >Action



                    </th>



                    



                    



                    </tr>



                    



                    <?php

						$q=mysql_query("select * from transaction_details where  donor_id = '".$_SESSION[did]."'");

 

						if(mysql_num_rows($q)>0)



						{



						while($dat=mysql_fetch_array($q)){	


						$qs=mysql_query("select * from member_donation_request where  member_donation_request_id=".$dat[need_reuest_id]);
						 $data=mysql_fetch_array($qs);	



						?>



                        <tr>



                        	<td align="center" style="border:1px solid black;" ><?php echo $data[title]; ?> </td>



                        	<td align="center" style="border:1px solid black;" ><?php $truncated = substr($data[description],0,strpos($data[description],' ',10)); echo $truncated."..."; ?></td>



                            <td align="center" style="border:1px solid black;" ><?php echo $data[amount ]; ?></td>



                            <td align="center" style="border:1px solid black;" ><?php if($data[status ]==1){ echo "Approve";}else if($data[status ]==2){ echo "Rejected";  }else{ echo "Disapprove"; }?></td>







                            <td align="center" style="border:1px solid black;" ><?php echo $data[reason]; ?></td>



                            <td align="center" style="border:1px solid black;" ><a href="dmyaccountlist_view.php?did=<?php echo $data[member_donation_request_id]; ?>">view</a></td>



                        



                        </tr>



								



					<?php  	} }else{



					 ?>



                     <tr>



                     <td colspan="6" align="center" style="border:1px solid black;" >Donations Not Available</td>



                     



                     </tr>



                    



                    <?php 



						}?>



                    </table>


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