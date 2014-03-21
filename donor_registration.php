<?php  include("include/config.php"); $d=1; ?>

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
    
  <script type="text/javascript">
 function apply()
 {
 
      if(document.MemberForm.chk.checked == true)
      {
           document.MemberForm.sub.disabled = false;
      }
     else 
     {
          document.MemberForm.sub.disabled = true;
      }
 
 }
</script>   
<script type="text/javascript">
function validateForm()
{    
var a =document.forms["MemberForm"]["leader_fname"].value; 
var b =document.forms["MemberForm"]["leader_lname"].value;
var c =document.forms["MemberForm"]["address"].value;
var d =document.forms["MemberForm"]["phone"].value;
var e =document.forms["MemberForm"]["email"].value;
var f =document.forms["MemberForm"]["username"].value;
var g =document.forms["MemberForm"]["password"].value;

if(a == '' || b == '' || c == '' || d == '' || e == '' || f == '' || g == '' )
{
alert("all (*) fields are required");
return false;		 
}		
}</script> 






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
							<h2 class="color2"><strong>D</strong>onor<span> Registration</span> </h2>
							<div style=" text-align:center;color:#F00">  all (*) field required </div><br/>
							<span class="error_msg">  <?php  echo $_GET['err'];   ?> </span><br/>

<form id="MemberForm" name="MemberForm" action="donor_registration_dollar.php" method="post" onsubmit="return validateForm()">
                            <div style=" padding:20px; -webkit-box-shadow: 0px 0px 7px rgba(45, 50, 50, 1);-moz-box-shadow:    0px 0px 7px rgba(45, 50, 50, 1);box-shadow:   0px 0px 7px rgba(45, 50, 50, 1); -moz-border-radius: 10px;
-webkit-border-radius: 5px;border-radius: 5px;  -khtml-border-radius: 5px; height:auto; margin-bottom:30px; padding-bottom:20px;">
							  <div class="wrapper">
						 
								</div>
								
								<div class="wrapper">
                                
                              <table width="557" border="1" cellspacing="10" cellpadding="30">
  <tr>
    <td width="152" height="30"><span>First Name: <font style="color:#FF0000">*</font> </span></td>
    <td width="391"><input name="leader_fname" type="text" class="input" id="leader_fname" size="47" style="height:30px; margin-bottom:10px;"></td>
  </tr>
  <tr>
    <td   height="30"><span>Last Name: <font style="color:#FF0000">*</font> </span></td>
    <td><input name="leader_lname" type="text" class="input" id="leader_lname" size="47" style="height:30px; margin-bottom:10px;"></td>
  </tr>
  <tr>
    <td height="40"><span>Address: <font style="color:#FF0000">*</font></span></td>
    <td> 
    <textarea name="address" id="address" cols="36" rows="5" style="margin-bottom:10px;"></textarea>
    </td>
  </tr>
  <tr>
    <td height="30"><span>Phone: <font style="color:#FF0000">*</font> </span></td>
    <td><input name="phone" type="text" class="input" id="phone" size="47" style="height:30px; margin-bottom:10px;"></td>
  </tr>
  <tr>
    <td height="30"><span>Email: <font style="color:#FF0000">*</font> </span></td>
    <td><input name="email" type="text" class="input" id="email" size="47" style="height:30px; margin-bottom:10px;"></td>
  </tr>
  <tr>
    <td height="30"><span>Username: <font style="color:#FF0000">*</font> </span></td>
    <td><input name="username" type="text" class="input" id="username" size="47" style="height:30px; margin-bottom:10px;"></td>
  </tr>
  <tr>
    <td height="30"><span>Password: <font style="color:#FF0000">*</font> </span></td>
    <td><input name="password" type="password" class="input" id="password" size="47" style="height:30px; margin-bottom:10px;"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">
      <p align="left"><strong>TERMS AND CONDITIONS<br>
      
</strong>
        <textarea name="textarea" cols="55" rows="10" readonly id="textarea" style="font-size:14px; text-align:left;  font-family:Arial, Helvetica, sans-serif" >
INITIAL PAYMENT DUE AT REGISTRATION

As a new ETF Donor you or your group will be required to commit to donating at least $600 in the first year, which is the minimum amount for each need in our system. Additionally, at least $50 of this total must be received at the time of donor registration. After registration, the donor is able to view and select one of the need profiles. This requirement is intended to provide confidentiality to the people we are serving. 

GENERAL
The use of this site is governed by the policies, terms and conditions as set forth below.  Your use of this site indicates your acceptance of these terms and conditions.  Your donation—in person, through mail, or through this site; directly or indirectly through one of the payment gateway service providers of Especially The Family, indicates your acceptance of these terms and conditions.  These terms and conditions prevail unless otherwise stated differently in any other donation related agreement. 
DONATION STEWARDSHIP

We are committed to the highest standard of stewardship for your contribution and will endeavor to meet designated donation preferences to the best of our abilities; however, your sponsorship is subject to various contingencies, including but not limited to the person in need no longer receiving support for various reasons. Unfortunately, it is not possible for us to communicate individually with each donor regarding such contingencies. In certain circumstances, where despite our best efforts, a donation cannot be carried out in accordance with your stated preferences, funds will be directed toward projects or opportunities of comparable content in a manner that closely honors the original intent of your donation selection. 
After your donation is processed, you will receive an email notification confirming your donation and donation amount within 24 hours and in most case within minutes. This email will serve as your donation receipt. Additionally, you may receive a personalized thank you letter from the beneficiary of your donation.
PAYMENT

In using this site, you certify that the details you provide to us on our site are correct; that 
you are an authorized user of any credit or debit card, or electronic cash that you 
submit for payment; and, that there are sufficient funds or credit facilities to cover any 
donation you make. We reserve the right to obtain validation of your credit or debit card 
details, or verification of the authenticity and ownership of these payment methods before 
taking any other steps in processing your donation. You agree to notify Especially The Family no less than 30 days in writing of your intent to change any banking arrangements 
that affect this authorization at info@especiallythefamily.org.

If your bank account does not contain sufficient funds on the date of the automatic 
transfer, the transaction will be treated in the same manner as a check that was denied due
to insufficient funds, and penalty charges may be applied by your banking institution. 
SECURITY
You are solely responsible in all respects for all use of and for protecting the confidentiality of any username, email verification, and password that may be given to you or selected by you for use on our site. You may not share these with, or transfer them to, any third parties. You must notify us immediately of any un-authorized use of them or any other breach of security regarding our site that comes to your attention at info@especiallythefamily.org.
Your payment transaction will be managed by Authorize.net, Paypal, or another similar industry-leading provider of payment gateway services, which securely and reliably manage the payment transactions of millions of customers globally in compliance with the Payment Card Industry Security Standards Council's Payment Card Industry (PCI) Data Security Standards. 
We have endeavored to make this site as secure as we reasonably can by adopting security and anti-virus practices routinely used as a matter of good practice. However, every internet site, internet communication, and internet-connected computer is susceptible to attack by computer hackers and viruses. While we will take all reasonable measures to protect this site and the internet communications passing through it, we cannot be held responsible for: 
(a) any losses attributable to your failure to take reasonable precautions to prevent interception of, or interference with, any such communications including, without limitations, failure to use and keep up-to-date firewalls and anti-virus software on your own computer; or;
(b) any losses arising from fraudulent or un-authorized use of your credit card, debit card, or other forms of payment. If you become aware of fraudulent use or your card, or if it is lost or stolen, you should notify your card issuer immediately.

        </textarea>
        <br>


<br>
<strong>Privacy Policy<br>
</strong>
<textarea name="textarea2" cols="55" rows="10" readonly id="textarea2" style="font-size:14px; text-align:left; font-family:Arial, Helvetica, sans-serif">
a.	Recipients of Support. 
Only those individuals and families who have previously consented to allow us to share their names, images, and stories for the purposes of fundraising are included on the Especially The Family website where pre-qualified donors can view their information. When you submit your information you are allowing Especially The Family to use your personal details for the purpose of finding a qualified sponsor to meet your stated needs. 
b.	Donors.
In the event that there is a problem with your donation, we will communicate with you via e-mail, telephone, fax, or letter. Any information you have given us will be used only to provide the service you have requested and will not be disclosed to organizations or people outside of Especially The Family unless (1) you consent to such disclosure; (2) you request something from us which requires us to provide this information in order to comply with your request; (3) a person, organization or entity that works on our behalf requires this information, but only if the information is not used for other purposes, is kept confidential, and is not retained after the work has been completed; (4) in compliance with any legal or administrative process, including subpoenas and court orders; (5) to enforce or apply this policy or any other agreement; or (6) to protect the rights, property, or the personal safety of Especially The Family or any of its employees, website users, or affiliates.  
For additional information regarding the use of information collected in connection with the service, please refer to our privacy policy at: www.especiallythefamily.org/privacy.html.
INDEMNIFICATION
You agree to indemnify and hold harmless Especially The Family, their agents, employees, representatives, licensors, affiliates, parents and subsidiaries from and against any and all claims, actions, demands, causes of action and other proceedings arising from or concerning your donation (collectively "Claims"), and to reimburse them on demand for any losses, costs, judgments, fees, fines and other expenses they incur (including attorneys' fees and court costs) as a result of any such Claims. The donor or party making the donation warrants to Especially The Family that they are making the donation in their own right, and with full authority, and hereby indemnify and agree to keep indemnified Especially The Family from all or any claims made by any persons claiming such transactions to be unauthorized. The donor further agrees to repay or pay, on demand, any amounts found to be unauthorized and agrees to indemnify Especially The Family and related parties against all losses of whatsoever kind in respect the disputed transaction including (but not limited to) the amount of the original donation; any fines, penalties, legal fees; and, any other costs or charges of whatsoever kind.
The materials on this site are provided 'as is' without warranties of any kind, either express or implied. Especially The Family does not warrant or make any representations whatsoever regarding the use, accuracy, validity, reliability, or the results from the use of the materials on this site or any sites linked to this site.  We reserve the right to make changes or corrections, to alter, suspend or discontinue any aspect of our site or the content or services available through it, including your access to it. 
BREACH OF TERMS AND COMPLAINTS 
Especially The Family may modify its services from time to time, for any reason, and without notice or liability to you, any other user, or any third party. We reserve the right to revise these terms by updating this posting. Please review these terms from time to time so that you will be apprised of any changes. Use of this service following a change to the terms constitutes agreement to the new terms. If you cannot comply with the amended terms, your only remedy is to cease any future use of this website. 
If you breach these terms and conditions, your account will be immediately terminated. We retain the right to deny access to our site to any person when we reasonably believe they have failed to comply with these terms and conditions. 
If you have any complaints or wish to report any technical problems with our site or misuse by other users, please contact us by email at info@especiallythefamily.org.

        </textarea>
      </td>
  </tr>
  <tr>
    <td colspan="2" align="left"><input type="checkbox" name="chk"   value="1" onClick="apply()">I have read and I agree to the Terms and Conditions and Privacy Policy.</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

								
	              <br/> 
	
								<input type="submit"  name="sub" id="id_complete" value="Submit" disabled="disabled">                          

								<!--<a href="#" class="button2 color3" onClick="document.getElementById('MemberForm').submit()">Send</a>-->
								<a href="#" class="color3" onClick="document.getElementById('MemberForm').reset()">Clear</a>
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

<div style="margin-left:auto; margin-right:auto; padding-left:50px;"><!--<strong>Note: </strong> <br><br>$600 is the minimum gift. Still you can donate small amounts using "General Donation" option available at the end of each page--></div>
<div style="margin-left:auto; margin-right:auto"><?php include("footer.php"); ?></div>

</div>
</div>

	<script type="text/javascript">Cufon.now();</script>
	<script>
		var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["blur"]});
		var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["blur"]});
		var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {validateOn:["blur"]});
		var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "none", {validateOn:["blur"]});
		var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "none", {validateOn:["blur"]});
		var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6", "email", {validateOn:["blur"]});
		var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7", "none", {validateOn:["blur"]});
		var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1", {validateOn:["blur"]});
	</script>
</body>
</html>