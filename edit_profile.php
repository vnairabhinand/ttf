<?php  session_start();


  include("include/config.php");


if($_SESSION[mid]=='')


{


	header("Location:index.php");


	exit();


}





if(isset($_POST[submit]))


	{				


		extract($_POST);


		


	  if($username!=$old_username)


	 	{ 


		 $chk_username_query =	mysql_query("select * from member_register where member_username = '".$username."'");


	 	 $chk_username_cnt = mysql_num_rows($chk_username_query);


			if($chk_username_cnt > 0)


			 {


				$err = "Username alreday available";  


			 }


		}else if($email!=$old_email)


	 	{ 


	  $chk_email_query =	mysql_query("select * from member_register where member_email = '".$email."'");


	  $chk_email_cnt = mysql_num_rows($chk_username_query);


			if($chk_email_cnt > 0)


			  {


				 $err = "Email Id alreday available";  


			  }


		}


	  else	 


	  {


		       $set="set church_name='$church_name',


						member_first_name='$leader_fname',


						member_last_name='$leader_lname',


						member_address='$address',


						member_phone='$phone',


						member_email='$email',


						member_username='$username'";


					mysql_query("update member_register $set where member_register_id=".$_SESSION[mid]);					


			 $err = "Profile updated successfully.";  					 


	   }


	}


?>





<!DOCTYPE html>


<html lang="en">


<head>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<title>Welcome to especiallythefamily - Register </title>


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


					                            <h2 class="color2"><strong>E</strong>dit Profile</h2>


					<?php 


					      $query = mysql_query("select * from member_register where member_register_id = '".$_SESSION[mid]."'"); 


					      $info = mysql_fetch_array($query);						 


					?>	


                        <span class="error_msg">  <?php if($err!='') { echo $err; } ?> </span>


                        <br/>





							<form id="MemberForm" method="post">
<div style=" padding:20px; -webkit-box-shadow: 0px 0px 7px rgba(45, 50, 50, 1);-moz-box-shadow:    0px 0px 7px rgba(45, 50, 50, 1);box-shadow:   0px 0px 7px rgba(45, 50, 50, 1); -moz-border-radius: 10px;
-webkit-border-radius: 5px;border-radius: 5px;  -khtml-border-radius: 5px; height:auto; margin-bottom:30px; padding-bottom:20px;">
<table width="500" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <td width="164">Church Name: <font style="color:#FF0000">*</font></td>
    <td width="323"><input name="church_name" type="text" class="input" id="church_name" value="<?php echo $info['church_name'];  ?>"  size="47" style="height:30px; margin-bottom:10px;"></td>
  </tr>
  <tr>
    <td>First Name: <font style="color:#FF0000">*</font></td>
    <td width="323"><input name="leader_fname" type="text" class="input" id="leader_fname" value="<?php echo $info['member_first_name']; ?>"  size="47" style="height:30px; margin-bottom:10px;"></td>
  </tr>
  <tr>
    <td>Last Name: <font style="color:#FF0000">*</font></td>
    <td width="323"><input name="leader_lname" type="text" class="input" id="leader_lname" value="<?php echo $info['member_last_name']; ?>"  size="47" style="height:30px; margin-bottom:10px;"></td>
  </tr>
  <tr>
    <td>Address: <font style="color:#FF0000">*</font></td>
    <td width="323">
    <textarea cols="36" rows="5" style="margin-bottom:10px;" name="address" id="address"><?php echo $info['member_address']; ?></textarea>
  
    </td>
  </tr>
  <tr>
    <td>Phone: <font style="color:#FF0000">*</font></td>
    <td width="323"><input name="phone" type="text" class="input" id="phone" value="<?php echo $info['member_phone']; ?>"  size="47" style="height:30px; margin-bottom:10px;"></td>
  </tr>
  <tr>
    <td>Email: <font style="color:#FF0000">*</font></td>
    <td width="323">
    <input name="email" type="text" class="input" id="email" value="<?php echo $info['member_email']; ?>"  size="47" style="height:30px; margin-bottom:10px;">
    <input type="hidden" class="input" name="old_email" id="old_email" value="<?php echo $info['member_email']; ?>"></td>
  </tr>
  <tr>
    <td>Username: <font style="color:#FF0000">*</font></td>
    <td width="323" rowspan="2">
    <input name="username" type="text" class="input" id="username" value="<?php echo $info['member_username']; ?>"  size="47" style="height:30px; margin-bottom:10px;">
    <input type="hidden" class="input" name="old_username" id="old_username" value="<?php echo $info['member_username']; ?>">
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>

</table>


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
</body>


</html>