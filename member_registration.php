<?php  include("include/config.php");
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
		        //$password = $password;
				/*$set="set church_name='$church_name',
					  member_first_name='$leader_fname',
     				  member_last_name='$leader_lname',
					  member_address='$address',
					  member_phone='$phone',
					  member_email='$email',
					  member_username='$username',
					  member_password= '$password',
				   	  country = '$countries',
					  province= '$province',
					  member_fund_option='$fund',
                      is_verify='1'";*/
					  
					  
				$insert_sql = "INSERT INTO `member_register`(`member_register_id`, `church_name`, `member_first_name`, `member_last_name`, `member_address`, `member_phone`, `member_email`, `member_username`, `member_password`,`country`,`province`,`member_fund_option`, `cdate`, `mdate`, `verification_code`, `is_verify`, `is_approve`, `Contactperson`) VALUES ('','$church_name','$leader_fname','$leader_lname','$address','$phone','$email','$username','$password','$countries','$province','$fund',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,'$verify_code',1,0,'$Contactperson')";
					  
					  
					  
					  
					  
					  

				$chars = "109182273364455566477388299100abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ~!@#$%^&*()";

				srand((double)microtime()*1000000);
				$i = 0;
				$vcode='';
				while($i<8)
				{
					$num=rand()%33;
					$tmp = substr($chars,$num,1);
					$vcode = $vcode.$tmp;
					$i++;
				}
				$verify_code = $vcode;

			mysql_query($insert_sql);

			$rid=mysql_insert_id();

					$headers	 =	"From:  admin@especiallythefamily.org \r\n";
					$headers	.=	"Content-Type: text/html;\n";
					$msg1		 =	'<table width="100%" border="0" cellspacing="2" cellpadding="2">';
					$msg1		.=	'<tr><td align="left" valign="top" colspan="3">Dear '.$username.'</tr>';
					$msg1		.=	'<tr><td align="left" valign="top" colspan="3"><p>Thanks for registering your church with ETF. We look forward to meeting many needs in your congregation.</p></tr>';

					//$msg1		.=	'<tr><td align="left" valign="top" colspan="3" width="13%">Verification Code:'.$verify_code.'</td></tr>';



					$msg1		.=	'<tr><td align="left" valign="top" colspan="3" width="13%"><a href="'.BASEURL.'member_verification.php">Click here to Verify Your Registration..!</a></td></tr>';

					$msg1		.=	'</table>';
					$sub		 =	"Your Verification Link :";
					$ret 		 = mail($email, $sub, $msg1, $headers, '-f admin@especiallythefamily.org');
					
					header("Location:member_success_register.php");		 
			}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome to especiallythefamily - Register </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    
    <script>
        var config = {	base: "<?php echo BASEURL; ?>"};
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
    <script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script><script type="text/javascript" src="js/menucontents.js"></script>
    <script type="text/javascript" src="js/anylinkmenu.js"></script>
    <script type="text/javascript">
        function get_province(countryid){
            data="country_id="+countryid;
                $.ajax({
                            type: "post",
                            url: "get_province_member.php",
                            data: data,
                            success: function(res) {
                                $("#insert_province").empty();
                                $("#insert_province").html(res);
                            }
                        });
            }
    
    //anylinkmenu.init("menu_anchors_class") //Pass in the CSS class of anchor links (that contain a sub menu)
    
            anylinkmenu.init("menuanchorclass")
    </script>
<script type="text/javascript">
function information()
{    
var a =document.forms["MemberForm"]["church_name"].value; 
var b =document.forms["MemberForm"]["leader_fname"].value;
var c =document.forms["MemberForm"]["leader_lname"].value;
var d =document.forms["MemberForm"]["Contactperson"].value;
var e =document.forms["MemberForm"]["address"].value;
var f =document.forms["MemberForm"]["phone"].value;
var g =document.forms["MemberForm"]["email"].value;
var h =document.forms["MemberForm"]["username"].value;
var i =document.forms["MemberForm"]["password"].value;
var j =document.forms["MemberForm"]["countries"].value;
var k =document.forms["MemberForm"]["province"].value;
var l =document.forms["MemberForm"]["fund"].value;

if(a == '' || b == '' || c == '' || d == '' || e == '' || f == '' || g == '' || h == '' || i == '' || j == '' || k == '' || l == '' )
{
alert("all (*) fields are required");
return false;		 
}			
			
else 
return true;
} 
</script>    
    <link rel="stylesheet" type="text/css" href="css/anylinkmenu.css" />
    <link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
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
						    	<h2 class="color2"><strong>C</strong>hurch<span> Registration</span> </h2>
	  							<span style="float:right;color:#F00">  all (*) field required </span>
						  		<br/>
                        		<span class="error_msg">  <?php if($err!='') { echo $err; } ?> </span>
                        		<br/>
								
						<div>
						<div class="wrapper">
                       <form name="MemberForm" method="post"   onsubmit="return information();">
                        <table width="500" border="1" cellspacing="20" cellpadding="15">
                          <tr>
                            <td width="195">Church Name: <font style="color:#FF0000">*</font></td>
                            <td width="292" align="left" valign="top">
                            <input name="church_name" type="text" class="input" id="church_name" size="47" style="height:30px; margin-bottom:10px;"></td>
                          </tr>
                          <tr>
                            <td>Leader First Name: <font style="color:#FF0000">*</font></td>
                            <td align="left" valign="top">
                            <input name="leader_fname" type="text" class="input" id="leader_fname" size="47" style="height:30px; margin-bottom:10px;"></td>
                          </tr>
                          <tr>
                            <td>Leader Last Name: <font style="color:#FF0000">*</font></td>
                            <td align="left" valign="top">
                            <input name="leader_lname" type="text" class="input" id="leader_lname" size="47" style="height:30px; margin-bottom:10px;"></td>
                          </tr>
                          <tr>
                            <td>Contact Person: <font style="color:#FF0000">*</font></td>
                            <td align="left" valign="top">
                            <input name="Contactperson" type="text" class="input" size="47" style="height:30px; margin-bottom:10px;" ></td>
                          </tr>
                          <tr>
                            <td>Address: <font style="color:#FF0000">*</font></td>
                            <td align="left" valign="top"><textarea name="address" id="address" cols="36" rows="5" style="margin-bottom:10px;"></textarea></td>
                          </tr>
                          <tr>
                            <td>Phone: <font style="color:#FF0000">*</font></td>
                            <td align="left" valign="top"><input name="phone" type="text" class="input" id="phone" size="47" style="height:30px; margin-bottom:10px;" ></td>
                          </tr>
                          <tr>
                            <td>Email: <font style="color:#FF0000">*</font></td>
                            <td align="left" valign="top"><input name="email" type="text" class="input" id="email" size="47" style="height:30px; margin-bottom:10px;"></td>
                          </tr>
                          <tr>
                            <td>Username: <font style="color:#FF0000">*</font></td>
                            <td align="left" valign="top"><input name="username" type="text" class="input" id="username" size="47" style="height:30px; margin-bottom:10px;"></td>
                          </tr>
                          <tr>
                            <td>Password: <font style="color:#FF0000">*</font></td>
                            <td align="left" valign="top"><input name="password" type="password" class="input" id="password" size="47" style="height:30px; margin-bottom:10px;"></td>
                          </tr>
                          <tr>
                            <td>Country: <font style="color:#FF0000">*</font></td>
                            <td align="left" valign="top">
                            
                            <select  name="countries"    onChange="get_province(this.value)" style="width:312px; margin-left:2px; height:30px; margin-bottom:10px;" >

                              <option value="" >-select-</option>

                              <?php

							  $select = "SELECT * FROM countries order by cname ";

							  $rs = mysql_query($select);

							  $numrows = mysql_num_rows($rs);

							  if($numrows > 0)

							  {

								  while($rows = mysql_fetch_array($rs))

								  {

							  ?>

                              	<option value="<?php echo $rows['cid']; ?>" ><?php echo $rows['cname']; ?></option>

                              <?php

								  }

							  }

							  ?>

								</select></td>
                          </tr>
                          <tr>
                            <td>Province: <font style="color:#FF0000">*</font></td>
                            <td align="left" valign="top" id="insert_province">
                            <select  name="province"   style="width:312px; margin-left:2px; margin-bottom:10px; height:30px;" ></select></td>
                          </tr>
                          <tr>
                            <td>How funds should be provided: <font style="color:#FF0000">*</font></td>
                            <td align="left" valign="top"><select  name="fund" id="fund"  style="width:312px; margin-left:2px; margin-bottom:10px; height:30px;"  >

									<option value="0" >Wire Transfer</option>

									<option value="1">Check to church office</option>

									<option value="2">Western Union</option>

                                    <option value="3">MoneyGram</option>

                                    <option value="4">Electronic Funds Transfer </option>

                                </select></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>
                        </table><input type="submit" class="button2 color3" name="submit" id="submit" value="Submit" >                    

				  <a href="#" class="button2 color3" onClick="document.getElementById('MemberForm').reset()">Clear</a>
						</div></form>



					



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







       



     



      	<?php include("footer_church.php"); ?>  







</div>



</div>







<script type="text/javascript">Cufon.now();</script>



<script>



/*$(window).load(function(){



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



})*/



var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["blur"]});



</script>



</body>



</html>