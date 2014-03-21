<?php
session_start();
include_once("include/config.php");
$errormsg ="";
if($_POST["Submit"])
{
	if($_POST["email_id"]=="")
	{
		$errormsg = "Please enter Valid Username";
		
	}
	else if($_POST["password"]=="")
	{
		$errormsg = "Please enter Valid Password";
	}
	else
	{
		$admin_name =  $_POST["email_id"];
		$password =  md5($_POST["password"]);
		$info = mysql_query("select * from admin where admin_name ='$admin_name' and password='$password'");
		if(mysql_num_rows($info)>0)
		{
			$a = mysql_fetch_array($info);
			$_SESSION["Admin"] = $a["admin_name"];
			$_SESSION["AdminId"] = $a["admin_id"];
		
			header("Location:index.php");
			exit();
		}
		else
		{
			$errormsg = "Invalid username or password";
		}
		
	}
	
	
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Panel</title>
<link rel="stylesheet" href="css/style.css" />
<script type="text/javascript" src="js/jquery-1.js"></script>
<script type="text/javascript" src="js/ddaccordion.js"></script>
<script type="text/javascript" src="js/menu.js"></script>
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
					<td>&nbsp;</td>
					<td width="15">&nbsp;</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
				  <td align="left" valign="top">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center"> Enter your username and password to login.</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><table width="350" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="5"><img src="images/home_box_lt.jpg" width="5" height="28" /></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="11"><img src="images/home_box_hed_lft.jpg" width="11" height="28" /></td>
            <td background="images/home_box_hed_bg.jpg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td align="left"><h3><strong>LOGIN HERE</strong></h3></td>
              </tr>
            </table></td>
            <td width="7"><img src="images/home_box_hed_rght.jpg" width="7" height="28" /></td>
            <td width="30%" background="images/home_box_tbg.jpg">&nbsp;</td>
          </tr>
        </table></td>
        <td width="6"><img src="images/home_box_rt.jpg" width="6" height="28" /></td>
      </tr>
      <tr>
        <td background="images/home_box_lbg.jpg">&nbsp;</td>
        <td height="120" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="31%"><img src="images/icon_login.jpg" /></td>
            <td width="69%"><form method="post" name="frmLogin" id="frmLogin" >
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <?php
				if($errormsg!="")
				{
				?>
                <tr>
                  <td height="4"></td>
                </tr>
                        <tr>
                          <td class="errormsg" align="left"><?php echo $errormsg; ?></td>
                        </tr>
                        <tr>
                          <td height="4"></td>
                        </tr>
                <?php
				}
				?>
                <tr>
                  <td align="left">Username
                    <input type="text" name="email_id" class="textboxlogin" size="30" maxlength="25" />                  </td>
                </tr>
                <tr>
                  <td height="4"></td>
                </tr>
                <tr>
                  <td align="left">Password
                    <input type="password" name="password" class="textboxlogin" size="30" maxlength="15" />                  </td>
                </tr>
                <tr>
                  <td height="4"></td>
                </tr>
                <tr>
                  <td><input type="submit" name="Submit" value="Login" class="button" />
                    &nbsp;
                    <input type="reset" name="Reset" value="Reset" class="button" />                  </td>
                </tr>
              </table>
            </form></td>
          </tr>
        </table></td>
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
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center"> You are going to access the administration panel of this site.<br />
      If you do not have the access permission please contact your system administrator. </td>
  </tr>
</table></td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td align="left" valign="top">&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td>
			<?php include("footer.php"); ?>
		</td>
	</tr>
</table>

</body>
</html>
