<?php
session_start();

//if($_SESSION["Admin"]=="")
//{
//	header("Location:login.php");
//	exit();
//}

include_once("include/config.php");

if($_POST['Submit'] == 'Update')
{
	$email_id = $_SESSION['Admin'];
	$password = md5($_POST['user_old_password']);
	$newpassword = md5($_POST['user_new_password']);
	
	$info = mysql_query("select * from admin where admin_name ='$email_id' and password='$password'") or die(mysql_error());
	if(mysql_fetch_row($info) > 0)
	{
		$update = mysql_query("update admin set password = '$newpassword' where admin_name = '$email_id'") or die(mysql_error());
			
		header("location: changepassword.php?update=true");
		exit();
	}
	else
		$errorMessage = "Old password does not match";
}

if($_GET['update'] == "true")
	$succMessage = "Password has been changed successfully";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Change Password</title>
<link rel="stylesheet" href="css/style.css" />
<script language="javascript" type="text/javascript" src="js/jquery-1.js"></script>
<script language="javascript" type="text/javascript" src="js/ddaccordion.js"></script>
<script language="javascript" type="text/javascript" src="js/menu.js"></script>
<script language="javascript" type="text/javascript" src="js/validate.js"></script>
<script language="javascript" type="text/javascript" src="js/login.js"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>
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
								<td width="5"><img src="images/home_box_lt.jpg" width="5" height="28" alt="" /></td>
								<td><table width="100%" border="0" cellspacing="0" cellpadding="0">
										<tr>
											<td width="11"><img src="images/home_box_hed_lft.jpg" width="11" height="28" alt="" /></td>
											<td background="images/home_box_hed_bg.jpg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
													<tr>
														<td width="25"><img src="images/md_changepassword.gif" alt="" /></td>
														<td width="774" align="left"><h3><b>Change Password</b></h3></td>
														<td width="43" align="center" class="bluelink"></td>
													</tr>
												</table></td>
											<td width="7"><img src="images/home_box_hed_rght.jpg" width="7" height="28" alt="" /></td>
											<td width="11" background="images/home_box_tbg.jpg">&nbsp;</td>
										</tr>
									</table></td>
								<td width="6"><img src="images/home_box_rt.jpg" width="6" height="28" alt="" /></td>
							</tr>
							<tr>
								<td background="images/home_box_lbg.jpg">&nbsp;</td>
								<td height="120" align="center" valign="top"><table width="98%" border="0" cellspacing="0" cellpadding="0">
										<tr>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<td align="left"> Enter your old and new password and click <b>Update</b> to change the password. Click <b>Cancel</b> to discard the changes. </td>
										</tr>
										<tr>
											<td height="5"></td>
										</tr>
										<?php
											if($errorMessage!="")
											{
										?>
												<tr>
													<td class="errormsg" align="center">
														<?php echo $errorMessage;?>													</td>
												</tr>
										<?php
											}
											else if($succMessage!="")
											{
										?>	
												<tr>
													<td class="successmsg" align="center">
														<?php echo $succMessage;?>
													</td>
												</tr>
										<?php
											}
										?>
										<tr>
											<td height="5"></td>
										</tr>
										<tr>
											<td><table width="100%" border="0" cellspacing="0" cellpadding="0">
													<tr>
														<td>&nbsp;</td>
													</tr>
													<form name="frmChangePassword" method="post" onsubmit="return ChangePassword_Form(document.frmChangePassword)">
														<tr>
															<td align="left" width="30%">
																<input name="Submit" type="submit" class="button" value="Update"  />
																<input name="button22" type="reset" class="button" value="Cancel" onclick="location.href='index.php'"/>															</td>
															<td align="right" class="mandatory">Fields marked with (<font class="mandatory">*</font>) are mandatory</td>
														</tr>
														<tr>
															<td height="5"></td>
														</tr>
														<tr>
															<td colspan="2" align="center" class="formtitle">Login Information</td>
														</tr>
														<tr>
															<td colspan="2"><table width="100%" border="0" cellpadding="3" cellspacing="1">
																	<tr>
																		<td width="25%" class="inputleft" valign="top" align="left">Username</td>
																		<td class="inputright" align="left"><?php echo $_SESSION["Admin"];?></td>
																	</tr>
																	<tr>
																		<td width="25%" class="inputleft" valign="tzop" align="left">Old Password <font class="mandatory">*</font></td>
																		<td class="inputright" align="left">
																			<input type="password" name="user_old_password" maxlength="15" size="25" />
																		</td>
																	</tr>
																	<tr>
																		<td width="25%" class="inputleft" valign="top" align="left">New Password <font class="mandatory">*</font></td>
																		<td class="inputright" align="left">
																			<input type="password" name="user_new_password" maxlength="15" size="25" />
																			<br>Specify a password of at least 6 characters and not to exceed 15 characters. Passwords are case sensitive. </td>
																	</tr>
																	<tr>
																		<td width="25%" class="inputleft" valign="top" align="left">Retype Password <font class="mandatory">*</font></td>
																		<td class="inputright" align="left"><input type="password" name="retype_password" maxlength="15" size="25" />																		</td>
																	</tr>
																</table></td>
														</tr>
														<tr>
															<td height="5"></td>
														</tr>
														<tr>
															<td align="left" colspan="2">
																<input name="Submit" type="submit" class="button" value="Update" onclick="JavaScript: return ChangePassword_Form(document.frmChangePassword);" />
																<input name="button22" type="reset" class="button" value="Cancel" onclick="location.href='index.php'"/>
															</td>
														</tr>
													</form>
											</table><p>&nbsp;</p></td>
										</tr>
										<tr>
											<td height="10"></td>
										</tr>
									</table></td>
								<td background="images/home_box_rbg.jpg">&nbsp;</td>
							</tr>
							<tr>
								<td><img src="images/home_box_lb.jpg" width="5" height="4" alt="" /></td>
								<td background="images/home_box_bbg.jpg"></td>
								<td><img src="images/home_box_rb.jpg" width="6" height="4" alt="" /></td>
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