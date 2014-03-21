<?php session_start();
  include("include/config.php");
if($_SESSION[mid]=='')
{
	header("Location:index.php");
	exit();
}

if(isset($_POST[submit]))
	{				
		extract($_POST);
		
	  $chk_username_query =	mysql_query("select * from member_register where member_username = '".$username."'");
	  $chk_username_cnt = mysql_num_rows($chk_username_query);

	  $chk_email_query =	mysql_query("select * from member_register where member_email = '".$email."'");
	  $chk_email_cnt = mysql_num_rows($chk_username_query);
	  
	  if($chk_username_cnt > 0)
	  {
		 $err = "Username alreday available";  
	  }
	  else if($chk_email_cnt > 0)
	  {
		 $err = "Email Id alreday available";  
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
						header("Location:member_success_register.php");
						
						echo "update member_register $set where member_register_id=".$_SESSION[mid];
				//mysql_query("update member_register $set where member_register_id=".$_SESSION[mid]);				 
	   }
	}
?>

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
                      		<form id="MemberForm" method="post">
						<div>
<div class="wrapper"><span>Church Name: <font style="color:#FF0000">*</font> </span>  <span id="sprytextfield1">
                        	  <input type="text" class="input" name="church_name" value="<?php echo $info['church_name']; ?>" id="church_name">
                       	    </span></div>
                            <div class="wrapper"><span>Username: <font style="color:#FF0000">*</font> </span><span id="sprytextfield7">
                              <input type="text" class="input" name="username" id="username" value="<?php echo $info['member_username']; ?>">
                            </span></div>

<div class="wrapper"><span>First Name: <font style="color:#FF0000">*</font> </span><span id="sprytextfield2">
							  <input type="text" class="input" name="leader_fname" id="leader_fname" value="<?php echo $info['member_first_name']; ?>">
						    </span></div>
                      <div class="wrapper"><span>Last Name: <font style="color:#FF0000">*</font> </span><span id="sprytextfield3">
                              <input type="text" class="input" id="leader_lname" name="leader_lname" value="<?php echo $info['member_last_name']; ?>">
							</span></div>
              <div class="wrapper"><span>Address: <font style="color:#FF0000">*</font></span><span id="sprytextfield4">
                              <input type="text" class="input" name="address" id="address" value="<?php echo $info['member_address']; ?>">
                           </span></div>
    <div class="wrapper"><span>Phone: <font style="color:#FF0000">*</font> </span><span id="sprytextfield5">
                              <input type="text" class="input" name="phone" id="phone" value="<?php echo $info['member_phone']; ?>">
                          </span></div>                            
                            <div class="wrapper"><span>Email: <font style="color:#FF0000">*</font> </span><span id="sprytextfield6">
                            <input type="text" class="input" name="email" id="email" value="<?php echo $info['member_email']; ?>">
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
<!-- footer -->
	   <?php include("footer.php"); ?>	
<!-- / footer -->
	</div>
</div>
<script type="text/javascript">Cufon.now();

var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["blur"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["blur"]});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {validateOn:["blur"]});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "none", {validateOn:["blur"]});
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "none", {validateOn:["blur"]});
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6", "email", {validateOn:["blur"]});
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7", "none", {validateOn:["blur"]});


</script>
</body>

</html>