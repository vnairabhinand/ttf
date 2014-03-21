<?php  include_once("include/config.php"); ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">



	<tr>



		<td align="left">



			<div class="leftmenu">



				<a headerindex="0h" class="menuitem submenuheader" href="#"> <img src="images/menu_home.jpg" width="25" height="30" border="0" class="imgmargin"/> <span class="textmargin">Home</span> </a>



				<div style="display: none;" contentindex="0c" class="submenu">



					<ul>



						<li class="firstchild"><img src="images/left_submenu_top.jpg" alt=""></li>



						<li><a href="index.php" title="Home">Home</a></li>



                      



						<li><a href="changepassword.php" title="Change Your Account Password">Change Password</a></li>



						<li><a href="logout.php" title="Logout">Logout</a></li>



						<li class="lastchild"><img src="images/left_submenu_botm.jpg" alt="" width="190" height="14"></li>



					</ul>



				</div>



                 			



             	<a headerindex="1h" class="menuitem submenuheader" href="#"> <img src="images/menu_category.jpg" width="25" height="30" border="0" class="imgmargin"/> <span class="textmargin"> Admin</span> </a>



				<div contentindex="1c" class="submenu">



					<ul>



						<li class="firstchild"><img src="images/left_submenu_top.jpg" width="190" height="14" /></li>
						<li><a href="member_approved.php" title="Category">Church Accounts</a></li> 
						<?php
						$noc=mysql_query("select count(*) from member_register where is_approve='0'");
						$noc1=mysql_fetch_array($noc);
						?>
                         <li><a href="member_registration.php" title="Member Users">Pending Church Accounts(<?php echo $noc1[0] ?>)</a></li>
						<li><a href="donor_registration_approved.php" title="CMS">Donor Accounts</a></li>
						<?php
						$noc=mysql_query("select count(*) from donor_register where is_approve='0'");
						$noc1=mysql_fetch_array($noc);
						?>
						 <li><a href="donor_registration.php" title="Member Users">Pending Donor Accounts(<?php echo $noc1[0] ?>)</a></li>
                         <li><a href="member_request_approved.php" title="Member Request">Approved Needs</a></li>
						  <?php
						  $noc=mysql_query("select count(*) from member_donation_request where status='0'");
						  $noc1=mysql_fetch_array($noc);
						  ?>

						  <li><a href="member_request.php" title="Member Request">Submitted Needs(<?php echo $noc1[0] ?>
)<a></li>

						
						<!--<li><a href="homepage_story.php" title="CMS">Home Page Story</a></li>-->
						<li><a href="donor_register_payment.php" title="Category">Donor Payments</a></li>
                        <li><a href="guest_payment.php" title="Country">Guest Payments</a></li>



                        
						 <li><a href="member_reject_users.php" title="Category">Rejected Churches</a></li>
						  <li><a href="donor_registration_reject.php" title="Category">Rejected Donors</a></li>
						 <li><a href="member_request_reject.php" title="Category">Rejected Needs</a></li>
						 <?php /*?><li><a href="auction.php" title="Auction">Auction</a></li>



                        <!--<li><a href="product.php" title="Product">Product</a></li>-->



                        <li><a href="news.php" title="News">News</a></li>



                        <li><a href="banner.php" title="Banner">Banner</a></li>



                        <li><a href="newsletter.php" title="News Letter">News Letter</a></li>

<?php */?>

                        <li class="lastchild"><img src="images/left_submenu_botm.jpg" alt="" width="190" height="14"></li>



                      </ul>			



			  </div>



              



		  </div>



          



		</td>



	</tr>



	<tr>



		<td>&nbsp;</td>



	</tr>



</table>