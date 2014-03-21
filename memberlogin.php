<?php  include('logInit.php');
  include("include/config.php");
$msg="";
if(isset($_POST[submit]))
	{
		extract($_POST); 
		if(mysql_num_rows(mysql_query("select * from member_register where member_username='$username' and member_password='$password' and is_approve!=0"))>0)
		{
			$m_udata=mysql_fetch_array(mysql_query("select * from member_register where member_username='$username' and member_password='$password'"));	
			mysql_query("insert into member_login_history(member_login_history_id,member_register_id,ipaddress,is_success)value(null,".$m_udata['member_register_id'].",'".$_SERVER['REMOTE_ADDR']."',1)");
			session_start();
			if($_SESSION[did]!="")
			{
				unset($_SESSION[did]);	
			}
			$_SESSION['mid']=$m_udata['member_register_id'];
			$_SESSION['uname']=$m_udata['member_username'];

			$_SESSION['m']='M';
			header("location:index.php");
			 //login succesful - Log it:
			$log->logg2('login','Logged In','low','blue',"$_SESSION[mid]","$_SESSION[m]"); //pretend that the page is login.php, the last parameter "mail" is set to default 
		}
		else
		{
				 	$msg="Invalid username or password.";		 
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Welcome to especiallythefamily - Login</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
		<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
		<script>
			var config = { base: "<?php echo BASEURL; ?>"};
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
								<section class="col2 pad_left1">
									<h2 class="color2"><strong>C</strong>hurch<span> Log In</span></h2>
									<form id="MemberForm" method="post">
										<div>
											<font style="color:#F00">	<?php if($msg!=""){echo $msg;} ?> </font><br/>
											<div class="wrapper">
												<table width="500" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <td><span>Username: <font style="color:#FF0000">*</font>  </span></td>
    <td><input name="username" type="text" class="input" id="username" size="47" style="height:30px; margin-bottom:10px;"></td>
  </tr>
  <tr>
    <td><span>Password: <font style="color:#FF0000">*</font>  </span></td>
    <td><input name="password" type="password" class="input" id="password" size="47" style="height:30px; margin-bottom:10px;"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
 </div>
<input type="submit" class="button2 color3" name="submit" id="submit" value="Submit" >     
<a href="#" class="button2 color3" onClick="document.getElementById('MemberForm').reset()">Clear</a>
</div>
</form>
								</section>
							</div>
						</div>	
					</div>
					
					<div class="wrapper">
						<div class="pad_left2 relative">
					</div>
				</div>
			</article>
			<!--content-->
			<?php include("footer_church.php"); ?>  
		</div>
	</div>
		<script type="text/javascript">Cufon.now();</script>
		<script>
			var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
			var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
		</script>

	</body>
</html>