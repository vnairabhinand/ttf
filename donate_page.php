<?php session_start();
  include("include/config.php");
  if($_SESSION['did']!='') { 
  mysql_query("insert into donor_register_payment(donor_register_id,donor_payment_amount,member_donation_request_id)value(".$_SESSION[did].",".$_REQUEST[amt].",".$_REQUEST[dmr].")");
  $drp_id=mysql_insert_id();
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
<script type="text/javascript" src="js/jquery-1.6.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script> 
<script type="text/javascript" src="js/Vegur_700.font.js"></script>
<script type="text/javascript" src="js/Vegur_400.font.js"></script>
<script type="text/javascript" src="js/Vegur_300.font.js"></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/tabs.js"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>

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
<style>
#MemberForm .input
{
	background-color: #CCCCCC;
    color: #000000;
    font: 12px "Trebuchet MS",Arial,Helvetica,sans-serif;
    height: 14px;
    padding: 3px 5px;
    width: 324px;
}	
	
}
</style>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
</head>
<body id="page3">
	<div class="body1">
		<div class="main">
<!-- header -->
			<header>
             <?php $page = 2; ?>
			<?php include("menu.php"); ?>	
            
			</header>
<!-- / header -->
<!-- content -->
			<article id="content" class="tabs">
				<div class="wrapper">
					<div class="box1">
                    
                  <table width="100%">
                  <tr>
                  <td width="70%" style="border-right:3px solid #ccc;">    
                    <?php if($_SESSION['did']=='') { ?>
               
               <br/><br/><br/>
       
			<input type="button" onClick="location:href='donorlogin.php'" class="button2"  name="Donor_Login" value="Donor Login" style="margin-bottom:20px">

            <input type="button" onClick="location:href='donor_registration.php'" class="button2"  name="Donor_Register" value="Donor Register">

                    <?php }  else { ?>    
                    
                     <form action="https://www.paypal.com/cgi-bin/webscr" method="post" id="payPalForm">
                        <input type="hidden" name="item_number" value="1">
                        <input type="hidden" name="cmd" value="_xclick">
                        <input type="hidden" name="no_note" value="1">
                        <input type="hidden" name="business" value="mohinichevli@gmail.com">
                        <input type="hidden" name="currency_code" value="USD">
                        <input type="hidden" name="rm" value="2">
                        <input type="hidden" name="return" value=http://keystrokesinc.info/especiallythefamily/thankyou.php">
                        <input type="hidden" name="cancel_return" value="http://keystrokesinc.info/especiallythefamily/cancel.php">
                        <input type="hidden" name="item_name" id="item_name"   value="Donation"/>
                        <input type="hidden" name="amount" id="amount"  value="<?php echo $_REQUEST[amt]; ?>"/>
                        <input type="hidden" name="quantity" id="quantity" value="" />
                        <input type="submit" class="button2"  name="Continue1" value="Pay Now" >
                        </form>
                    
                    <?php } ?>
                    </td>
                   
                        <td style="padding-left:8px;"><h2>Guest form</h2>
                        <form id="MemberForm" method="post" action="donate.php">
						
<div class="wrapper"><span>First Name: <font style="color:#FF0000">*</font> </span><span id="sprytextfield1">
  <input type="text" class="input" name="leader_fname" id="leader_fname">
  <span class="textfieldRequiredMsg">A value is required.</span></span></div>
                      <div class="wrapper"><span>Last Name: <font style="color:#FF0000">*</font> </span><span id="sprytextfield2">
                        <input type="text" class="input" id="leader_lname" name="leader_lname">
                        <span class="textfieldRequiredMsg">A value is required.</span></span></div>
                  <div class="wrapper"><span>Email: <font style="color:#FF0000">*</font> </span><span id="sprytextfield6"><span id="sprytextfield3">
                  <input type="text" class="input" name="email" id="email">
                  <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span>
                  <input type="hidden"  name="dmr" id="dmr" value="<?php echo $_REQUEST[dmr]; ?>">
                            </span></div>
                   <div class="wrapper"><span>Amount:</span>  
                   <input type="text"  name="amount" class="input" id="amount" value="<?php echo $_REQUEST[amt]; ?>" readonly>
                   </div>     
                           <br/> 
                            <input type="submit" class="button2 color3" name="submit" id="submit" value="Donate" >                          
							<!--<a href="#" class="button2 color3" onClick="document.getElementById('MemberForm').submit()">Send</a>-->
							<a href="#" class="button2 color3" onClick="document.getElementById('MemberForm').reset()">Clear</a>
						</div>
					</form>

                        
                        
                        
                        
                        
                        
                        
                        
                        
                        </td></tr></table>
					
                    </div>
                   	
				
              
                </div>
				
                
                
                
				<div class="wrapper">
					<!--<div class="box2">
						<div class="wrapper tab-content" id="2011">
							<section class="col1">
								<h4><span>June 31</span>2011</h4>
								<p class="pad_bot2"><strong>Sed ut perspiciatis unde omnis occaecati cupiditate non provident</strong></p>
								<p class="pad_bot1">Natus error sit voluptatem accusantium doloremque laudantium architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
								<h4 class="color2"><span>June 29</span>2011</h4>
								<p class="pad_bot2"><strong>Et harum quidem rerum facilis est et expedita distinctio</strong></p>
								<p class="pad_bot1">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
								<h4 class="color3"><span>June 17</span>2011</h4>
								<p class="pad_bot2"><strong>Sed ut perspiciatis unde omnis occaecati cupiditate non provident</strong></p>
								Natus error sit voluptatem accusantium doloremque laudantium architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.
							</section>
						</div>
                        
						<div class="wrapper tab-content" id="2003">
							<section class="col1">
								<h4><span>September 11</span>2003</h4>
								<p class="pad_bot2"><strong>Ut perspiciatis unde omnis occaecati cupiditate non provident</strong></p>
								<p class="pad_bot1">Natus error sit voluptatem accusantium doloremque laudantium architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
								<h4 class="color2"><span>November 19</span>2003</h4>
								<p class="pad_bot2"><strong>Harum quidem rerum facilis est et expedita distinctio</strong></p>
								<p class="pad_bot1">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
								<h4 class="color3"><span>December 27</span>2003</h4>
								<p class="pad_bot2"><strong>Perspiciatis unde omnis occaecati cupiditate non provident</strong></p>
								Natus error sit voluptatem accusantium doloremque laudantium architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.
							</section>
						</div>
						<div class="wrapper tab-content" id="2004">
							<section class="col1">
								<h4><span>April 13</span>2004</h4>
								<p class="pad_bot2"><strong>Merspiciatis unde omnis occaecati cupiditate non provident</strong></p>
								<p class="pad_bot1">Natus error sit voluptatem accusantium doloremque laudantium architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
								<h4 class="color2"><span>May 13</span>2004</h4>
								<p class="pad_bot2"><strong>Natus quidem rerum facilis est et expedita distinctio</strong></p>
								<p class="pad_bot1">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
								<h4 class="color3"><span>June 21</span>2004</h4>
								<p class="pad_bot2"><strong>Ut enim ad minima unde omnis occaecati cupiditate non provident</strong></p>
								Natus error sit voluptatem accusantium doloremque laudantium architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.
							</section>
						</div>
						<div class="wrapper tab-content" id="2005">
							<section class="col1">
								<h4><span>September 11</span>2005</h4>
								<p class="pad_bot2"><strong>Ut perspiciatis unde omnis occaecati cupiditate non provident</strong></p>
								<p class="pad_bot1">Natus error sit voluptatem accusantium doloremque laudantium architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
								<h4 class="color2"><span>November 19</span>2005</h4>
								<p class="pad_bot2"><strong>Harum quidem rerum facilis est et expedita distinctio</strong></p>
								<p class="pad_bot1">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
								<h4 class="color3"><span>December 27</span>2005</h4>
								<p class="pad_bot2"><strong>Perspiciatis unde omnis occaecati cupiditate non provident</strong></p>
								Natus error sit voluptatem accusantium doloremque laudantium architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.
							</section>
						</div>
						<div class="wrapper tab-content" id="2006">
							<section class="col1">
								<h4><span>April 13</span>2006</h4>
								<p class="pad_bot2"><strong>Merspiciatis unde omnis occaecati cupiditate non provident</strong></p>
								<p class="pad_bot1">Natus error sit voluptatem accusantium doloremque laudantium architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
								<h4 class="color2"><span>May 13</span>2006</h4>
								<p class="pad_bot2"><strong>Natus quidem rerum facilis est et expedita distinctio</strong></p>
								<p class="pad_bot1">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
								<h4 class="color3"><span>June 21</span>2006</h4>
								<p class="pad_bot2"><strong>Ut enim ad minima unde omnis occaecati cupiditate non provident</strong></p>
								Natus error sit voluptatem accusantium doloremque laudantium architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.
							</section>
						</div>
						<div class="wrapper tab-content" id="2007">
							<section class="col1">
								<h4><span>September 11</span>2007</h4>
								<p class="pad_bot2"><strong>Ut perspiciatis unde omnis occaecati cupiditate non provident</strong></p>
								<p class="pad_bot1">Natus error sit voluptatem accusantium doloremque laudantium architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
								<h4 class="color2"><span>November 19</span>2007</h4>
								<p class="pad_bot2"><strong>Harum quidem rerum facilis est et expedita distinctio</strong></p>
								<p class="pad_bot1">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
								<h4 class="color3"><span>December 27</span>2007</h4>
								<p class="pad_bot2"><strong>Perspiciatis unde omnis occaecati cupiditate non provident</strong></p>
								<p class="pad_bot1">Natus error sit voluptatem accusantium doloremque laudantium architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
								<h4><span>September 11</span>2007</h4>
								<p class="pad_bot2"><strong>Ut perspiciatis unde omnis occaecati cupiditate non provident</strong></p>
								Natus error sit voluptatem accusantium doloremque laudantium architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.
							</section>
						</div>
						<div class="wrapper tab-content" id="2008">
							<section class="col1">
								<h4><span>April 13</span>2008</h4>
								<p class="pad_bot2"><strong>Merspiciatis unde omnis occaecati cupiditate non provident</strong></p>
								<p class="pad_bot1">Natus error sit voluptatem accusantium doloremque laudantium architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
								<h4 class="color2"><span>May 13</span>2008</h4>
								<p class="pad_bot2"><strong>Natus quidem rerum facilis est et expedita distinctio</strong></p>
								Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.
							</section>
						</div>
						<div class="wrapper tab-content" id="2009">
							<section class="col1">
								<h4><span>September 11</span>2009</h4>
								<p class="pad_bot2"><strong>Ut perspiciatis unde omnis occaecati cupiditate non provident</strong></p>
								<p class="pad_bot1">Natus error sit voluptatem accusantium doloremque laudantium architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
								<h4 class="color2"><span>November 19</span>2009</h4>
								<p class="pad_bot2"><strong>Harum quidem rerum facilis est et expedita distinctio</strong></p>
								<p class="pad_bot1">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
								<h4 class="color3"><span>December 27</span>2009</h4>
								<p class="pad_bot2"><strong>Perspiciatis unde omnis occaecati cupiditate non provident</strong></p>
								Natus error sit voluptatem accusantium doloremque laudantium architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.
							</section>
						</div>
						<div class="wrapper tab-content" id="2010">
							<section class="col1">
								<h4><span>April 13</span>2010</h4>
								<p class="pad_bot2"><strong>Merspiciatis unde omnis occaecati cupiditate non provident</strong></p>
								<p class="pad_bot1">Natus error sit voluptatem accusantium doloremque laudantium architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
								<h4 class="color2"><span>May 13</span>2010</h4>
								<p class="pad_bot2"><strong>Natus quidem rerum facilis est et expedita distinctio</strong></p>
								<p class="pad_bot1">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
								<h4 class="color3"><span>June 21</span>2010</h4>
								<p class="pad_bot2"><strong>Ut enim ad minima unde omnis occaecati cupiditate non provident</strong></p>
								Natus error sit voluptatem accusantium doloremque laudantium architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.
							</section>
						</div>
					</div>-->
				</div>
			</article>
<!-- / content -->
<!-- footer -->
		<?php include("footer.php"); ?>	
<!-- / footer -->
		</div>
	</div>
<script type="text/javascript">
Cufon.now(); tabs.init();
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["blur"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "email", {validateOn:["blur", "change"]});
</script>
</body>

</html>