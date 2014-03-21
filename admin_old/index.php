<?php

session_start();

if($_SESSION["AdminId"]=="")

{ 

   header("Location:login.php");

   exit();

}

 include_once("include/config.php");

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Admin Panel</title>

<link rel="stylesheet" href="css/style.css" />

<script type="text/javascript" src="js/jquery-1.js"></script>

<script type="text/javascript" src="js/ddaccordion.js"></script>

<script type="text/javascript" src="js/menu.js"></script></head>

<body>

<table width="100%" border="0" cellspacing="0" cellpadding="0">

	<tr>

	  <td><?php include("header.php"); ?></td>

	</tr>

	<tr>

		<td align="center" valign="top">

			<table width="100%" border="0" cellspacing="0" cellpadding="0">

				<tr>

					<td width="15">&nbsp;</td>

					<td width="190">&nbsp;</td>

					<td width="15">&nbsp;</td>

					<td>&nbsp;</td>

					<td width="15">&nbsp;</td>

				</tr>

				<tr>

					<td>&nbsp;</td>

				  <td align="left" valign="top"><?php include("menu.php"); ?></td>

					<td>&nbsp;</td>

					<td align="left" valign="top">

						<table width="100%" border="0" cellspacing="0" cellpadding="0">

							<tr>

								<td width="50%" align="left">

									<table width="98%" border="0" cellspacing="0" cellpadding="0">

										<tr>

											<td width="5"><img src="images/home_box_lt.jpg" width="5" height="28" /></td>

											<td>

												<table width="100%" border="0" cellspacing="0" cellpadding="0">

													<tr>

														<td width="11"><img src="images/home_box_hed_lft.jpg" width="11" height="28" /></td>

														<td background="images/home_box_hed_bg.jpg">

															<table width="100%" border="0" cellspacing="0" cellpadding="0">

																<tr>

																	<td width="30"><img src="images/md_customers.gif" width="24" height="26" /></td>

																	<td align="left">

																		<h3><strong>Member</strong></h3>

																  </td>

																	<td width="90" align="center" class="bluelink"><a href="member_approved.php" class="bluelink">View</a> </td>

																</tr>

															</table>

														</td>

														<td width="7"><img src="images/home_box_hed_rght.jpg" width="7" height="28" /></td>

														<td width="30%" background="images/home_box_tbg.jpg">&nbsp;</td>

													</tr>

												</table>

                                                

											</td>

											<td width="6"><img src="images/home_box_rt.jpg" width="6" height="28" /></td>

										</tr>

										<tr>

											<td background="images/home_box_lbg.jpg">&nbsp;</td>

											<td height="120" align="center" valign="top">

												<table width="96%" border="0" cellspacing="0" cellpadding="0">

                                                <tr>

                                                 <td colspan="2">Can add,edit,delete Content</td>

													</tr>

													<tr>

													  <td><img src="images/event1.png" alt="Content" width="60" height="60" /></td>

                                                <td>

                                                  <?php

												   $noc=mysql_query("select count(*) from member_register where is_approve='0'");

												   $noc1=mysql_fetch_array($noc);

												  ?>

                                                    <strong>No of Member pending for approval: <?php echo $noc1[0] ?>
<a href="member_registration.php" class="bluelink">View</a></strong> 
                                                </td>

                                                </tr>

												</table>

											</td>

											<td background="images/home_box_rbg.jpg">&nbsp;</td>

										</tr>

										<tr>

											<td><img src="images/home_box_lb.jpg" width="5" height="4" /></td>

											<td background="images/home_box_bbg.jpg"></td>

											<td><img src="images/home_box_rb.jpg" width="6" height="4" /></td>

										</tr>

									</table>

								</td>

								<td>&nbsp;</td>

								

                                <td align="right" valign="top"><table width="98%" border="0" cellspacing="0" cellpadding="0">

										<tr>

											<td width="5"><img src="images/home_box_lt.jpg" width="5" height="28" /></td>

											<td>

												<table width="100%" border="0" cellspacing="0" cellpadding="0">

													<tr>

														<td width="11"><img src="images/home_box_hed_lft.jpg" width="11" height="28" /></td>

														<td background="images/home_box_hed_bg.jpg">

															<table width="100%" border="0" cellspacing="0" cellpadding="0">

																<tr>

																	<td width="30"><img src="images/md_product.gif" width="24" height="26" /></td>

									                                <td align="left">

																		<h3><strong>Member Donation Request</strong></h3>

																  </td>

																	<td width="90" align="center" class="bluelink"><a href="member_request_approved.php" class="bluelink">View</a> </td>

																</tr>

															</table>

														</td>

														<td width="7"><img src="images/home_box_hed_rght.jpg" width="7" height="28" /></td>

														<td width="30%" background="images/home_box_tbg.jpg">&nbsp;</td>

													</tr>

												</table>

											</td>

											<td width="6"><img src="images/home_box_rt.jpg" width="6" height="28" /></td>

										</tr>

										<tr>

											<td background="images/home_box_lbg.jpg">&nbsp;</td>

											<td height="120" align="center" valign="top">

                                            <table width="96%" border="0" cellspacing="0" cellpadding="0">

                                                <tr>

                                                 <td colspan="2">Can add,edit,delete Category</td>

													</tr>

													<tr>

													  <td><img src="images/event1.png" alt="events" width="60" height="60" /></td>

                                                <td >

                                                

                                                  <?php

												   $noc=mysql_query("select count(*) from member_donation_request where status='0'");

												   $noc1=mysql_fetch_array($noc);

												  ?>

                                                    <strong>No of Member Donation Request submitted: <?php echo $noc1[0] ?> 
<a href="member_request.php" class="bluelink">View</a></strong> 
                                                </td>

                                                </tr>

												</table>

                                            </td>

										  <td background="images/home_box_rbg.jpg">&nbsp;</td>

										</tr>

										<tr>

											<td><img src="images/home_box_lb.jpg" width="5" height="4" /></td>

											<td background="images/home_box_bbg.jpg"></td>

											<td><img src="images/home_box_rb.jpg" width="6" height="4" /></td>

										</tr>

									</table></td>

                                

                                

							</tr>

							<tr>

							

                            

                            

                            	<td>&nbsp;</td>

								

						  </tr>

					

                           		<tr>

								<td align="left">&nbsp;</td>

								<td>&nbsp;</td>

								<td align="right" valign="top">&nbsp;</td>

							</tr>

						

						</table>

	        </td>

					<td>&nbsp;</td>

				</tr>

				<tr>

					<td>&nbsp;</td>

					<td align="left" valign="top">&nbsp;</td>

					<td>&nbsp;</td>

					<td align="left" valign="top">&nbsp;</td>

					<td>&nbsp;</td>

				</tr>

			</table>

		</td>

	</tr>

	<tr>

	  <td><?php include("footer.php"); ?></td>

	</tr>

</table>

</body>

</html>

