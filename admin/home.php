<?php require_once("classes/config.php"); 
if(empty($_SESSION['name'])){
header("location: index.php");
exit;	
	}
	
extract($_POST);   $_SESSION['signerror']=''; 
if(!empty($password) && isset($submit)) {
if($password == $passwordre )  $a = 'ok';  else   { $_SESSION['signerror'] = "Password not match!"; $_SESSION['signsuss'] = ''; }
if(!empty($passwordold)){
$oldpasswords =  md5($passwordold);	 
if($oldpasswords  == $_SESSION['oldpassword']) $b = 'ok'; else  { $_SESSION['signerror'] = "Old Password not match!";  $_SESSION['signsuss'] = ''; } }
if( $a == 'ok' &&  $b == 'ok' ) {
$passwords =  md5($password);	
$sql =db_query("Update admin  set password = '$passwords' ");
 $_SESSION['signerror'] = "";
 $_SESSION['signsuss'] = "Password updated sucessfully";
} 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Especially The Family</title>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
<!--[if IE]>
<link rel="stylesheet" media="all" type="text/css" href="css/pro_dropline_ie.css" />
<![endif]-->

<!--  jquery core -->
<script src="js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>

<!--  checkbox styling script -->
<script src="js/jquery/ui.core.js" type="text/javascript"></script>
<script src="js/jquery/ui.checkbox.js" type="text/javascript"></script>
<script src="js/jquery/jquery.bind.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
	$('input').checkBox();
	$('#toggle-all').click(function(){
 	$('#toggle-all').toggleClass('toggle-checked');
	$('#mainform input[type=checkbox]').checkBox('toggle');
	return false;
	});
});
</script>  

<![if !IE 7]>

<!--  styled select box script version 1 -->
<script src="js/jquery/jquery.selectbox-0.5.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect').selectbox({ inputClass: "selectbox_styled" });
});
</script>
 

<![endif]>

<!--  styled select box script version 2 --> 
<script src="js/jquery/jquery.selectbox-0.5_style_2.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect_form_1').selectbox({ inputClass: "styledselect_form_1" });
	$('.styledselect_form_2').selectbox({ inputClass: "styledselect_form_2" });
});
</script>

<!--  styled select box script version 3 --> 
<script src="js/jquery/jquery.selectbox-0.5_style_2.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect_pages').selectbox({ inputClass: "styledselect_pages" });
});
</script>

<!--  styled file upload script --> 
<script src="js/jquery/jquery.filestyle.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
  $(function() {
      $("input.file_1").filestyle({ 
          image: "images/forms/choose-file.gif",
          imageheight : 21,
          imagewidth : 78,
          width : 310
      });
  });
</script>

<!-- Custom jquery scripts -->
<script src="js/jquery/custom_jquery.js" type="text/javascript"></script>
 
<!-- Tooltips -->
<script src="js/jquery/jquery.tooltip.js" type="text/javascript"></script>
<script src="js/jquery/jquery.dimensions.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
	$('a.info-tooltip ').tooltip({
		track: true,
		delay: 0,
		fixPNG: true, 
		showURL: false,
		showBody: " - ",
		top: -35,
		left: 5
	});
});
</script> 


<!--  date picker script -->
<link rel="stylesheet" href="css/datePicker.css" type="text/css" />
<script src="js/jquery/date.js" type="text/javascript"></script>
<script src="js/jquery/jquery.datePicker.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
        $(function()
{

// initialise the "Select date" link
$('#date-pick')
	.datePicker(
		// associate the link with a date picker
		{
			createButton:false,
			startDate:'01/01/2005',
			endDate:'31/12/2020'
		}
	).bind(
		// when the link is clicked display the date picker
		'click',
		function()
		{
			updateSelects($(this).dpGetSelected()[0]);
			$(this).dpDisplay();
			return false;
		}
	).bind(
		// when a date is selected update the SELECTs
		'dateSelected',
		function(e, selectedDate, $td, state)
		{
			updateSelects(selectedDate);
		}
	).bind(
		'dpClosed',
		function(e, selected)
		{
			updateSelects(selected[0]);
		}
	);
	
var updateSelects = function (selectedDate)
{
	var selectedDate = new Date(selectedDate);
	$('#d option[value=' + selectedDate.getDate() + ']').attr('selected', 'selected');
	$('#m option[value=' + (selectedDate.getMonth()+1) + ']').attr('selected', 'selected');
	$('#y option[value=' + (selectedDate.getFullYear()) + ']').attr('selected', 'selected');
}
// listen for when the selects are changed and update the picker
$('#d, #m, #y')
	.bind(
		'change',
		function()
		{
			var d = new Date(
						$('#y').val(),
						$('#m').val()-1,
						$('#d').val()
					);
			$('#date-pick').dpSetSelected(d.asString());
		}
	);

// default the position of the selects to today
var today = new Date();
updateSelects(today.getTime());

// and update the datePicker to reflect it...
$('#d').trigger('change');
});
</script>

<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
<script src="js/jquery/jquery.pngFix.pack.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$(document).pngFix( );
});
</script>
<script type="text/javascript">
function toggle(source) {
        var aInputs = document.getElementsByTagName('input');
        for (var i=0;i<aInputs.length;i++) {
            if (aInputs[i] != source && aInputs[i].className == source.className) {
                aInputs[i].checked = source.checked;
            }
        }
    }
</script>
/head>
<body> 
<!-- Start: page-top-outer -->
<div id="page-top-outer">    

<!-- Start: page-top -->
<div id="page-top">

	<!-- start logo -->
	<div id="logo">
	<a href=""><img src="images/logo.png"  /></a>
	</div>
	<!-- end logo -->
	
	<!--  start top-search -->
	<div id="top-search">
    <form name="myform2" id="myform2" method="GET" action="member_approved.php">
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
		<td>
<input type="text" name="srch" value="<?php if(!empty($_GET['srch'])) echo $_GET['srch']; else echo "Search"; ?>" onblur="if (this.value=='') { this.value='<?php if(!empty($_GET['srch'])) echo $_GET['srch']; else echo "Search"; ?>'; }" onfocus="if (this.value=='<?php if(!empty($_GET['srch'])) echo $_GET['srch']; else echo "Search"; ?>') { this.value=''; }" class="top-search-inp" /></td>
		<td>
		<select name="srchtype"  class="styledselectmain">
        <?php if(!empty($_GET['srchtype'])) { ?><option value="<?php echo $_GET['srchtype']; ?>" selected="selected"><?php echo $_GET['srchtype']; ?></option><?php } // else { ?>
       <!-- <option value="All" selected="selected">All</option>--><?php  //} ?>
			<option value="member_username">User Name</option>
			<option value="member_email">Email</option>
			<option value="church_name">Church Name</option>
			<option value="member_phone">Phone</option>
		</select> 
		</td>
		<td>
		<input type="image" src="images/shared/top_search_btn.gif"  />
		</td>
		</tr>
		</table></form>
	</div>
 	<!--  end top-search -->
 	<div class="clear"></div>

</div>
<!-- End: page-top -->

</div>
<!-- End: page-top-outer -->
	
<div class="clear">&nbsp;</div>
 
<!--  start nav-outer-repeat................................................................................................. START -->
<div class="nav-outer-repeat"> 
<!--  start nav-outer -->
<div class="nav-outer"> 

		<!-- start nav-right -->
		<div id="nav-right">
		
			<!--<div class="nav-divider">&nbsp;</div>-->
			<!--<div class="showhide-account"><img src="images/shared/nav/nav_myaccount.gif" width="93" height="14" alt="" /></div>-->
			<div class="nav-divider">&nbsp;</div>
			<a href="logout.php" id="logout"><img src="images/shared/nav/nav_logout.gif" width="64" height="14" alt="" /></a>
			<div class="clear">&nbsp;</div>
		
			<!--  start account-content -->	
			<div class="account-content">
			<div class="account-drop-inner">
				<a href="" id="acc-settings">Settings</a>
				<div class="clear">&nbsp;</div>
				<div class="acc-line">&nbsp;</div>
				<a href="" id="acc-details">Personal details </a>
				<div class="clear">&nbsp;</div>
				<div class="acc-line">&nbsp;</div>
				<a href="" id="acc-project">Project details</a>
				<div class="clear">&nbsp;</div>
				<div class="acc-line">&nbsp;</div>
				<a href="" id="acc-inbox">Inbox</a>
				<div class="clear">&nbsp;</div>
				<div class="acc-line">&nbsp;</div>
				<a href="" id="acc-stats">Statistics</a> 
			</div>
			</div>
			<!--  end account-content -->
		
		</div>
		<!-- end nav-right -->


		<!--  start nav -->
		<div class="nav">
		<div class="table">
		
		<ul class="current"><li><a href="home.php"><b>Home</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
<div class="select_sub show">
			<ul class="sub">
				<li><a style="cursor:pointer" href="changepassword.php">Change Password</a></li>
                <li><a href="representatives.php" style="cursor:pointer">Representatives</a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		</li>
		</ul>
        
		
		<div class="nav-divider">&nbsp;</div>
		                    

	  <ul class="select"><li><a href="member_approved.php"><b>Admin</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
			<li class="sub_show"><a style="cursor:pointer" href="member_approved.php">Church Accounts</a></li>
				<li><a href="member_registration.php">Pending Church Accounts <?php
						$noc=db_query("select count(*) as cnt from member_register where is_approve='0'");
						$noc1=db_fetch_object($noc); echo "($noc1->cnt)"; ?></a></li>
				<li><a  href="donor_registration_approved.php">Donor Accounts</a></li>
				<li><a style="cursor:pointer" href="donor_registration.php">Pending Donor Accounts <?php
						$noca=db_query("select count(*) as cnt from donor_register where is_approve='0'");
						$noc2=db_fetch_object($noca); echo "($noc2->cnt)"; ?></a></li>
<li ><a href="member_request_approved.php" style="cursor:pointer">Approved Needs</a></li>
<li ><a href="member_request.php" style="cursor:pointer">Submitted Needs 
<?php
$naac=db_query("select count(*) as cnt from member_donation_request a, member_register b where a.member_register_id=b.member_register_id and status = '0'");
$nawc=db_fetch_object($naac); echo "($nawc->cnt)"; ?></a></li>		

	</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		<div class="nav-divider">&nbsp;</div>
        <ul class="select"><li><a href="donor_register_payment.php"><b>Reports</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
				<li><a  href="donor_register_payment.php">Donor Payment</a></li>
				<li><a  href="guest_payment.php">Guest payments</a></li>
				<li class="sub_show"><a style="cursor:pointer" href="member_reject_users.php">Rejected churches</a></li>
				<li><a href="donor_registration_reject.php">Rejected Donor</a></li>	
				<li><a href="member_request_reject.php">Rejected Needs</a></li>	
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>

		<div class="nav-divider">&nbsp;</div>
        <!--<ul class="select"><li><a href="donoraccounts.php"><b>Donor Accounts</b>--><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
				<!--<li><a href="member_request_approved.php">Approved Needs</a></li>-->
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>


		
		</li>
		</ul>
		
		


		
		</li>
		</ul>
		
		
		<div class="clear"></div>
		</div>
		<div class="clear"></div>
		</div>
		<!--  start nav -->

</div>
<div class="clear"></div>
<!--  start nav-outer -->
</div>
<!--  start nav-outer-repeat................................................... END -->

 <div class="clear"></div>
 
<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">

	<!--  start page-heading -->
	<div id="page-heading">
		<h1>Dashboard</h1>
	</div>
	<!-- end page-heading -->
<form name="myform" id="myform" method="post" action="">
	<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
	<tr>
		<th rowspan="3" class="sized"><img src="images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
		<th class="topleft"></th>
		<td id="tbl-border-top">&nbsp;</td>
		<th class="topright"></th>
		<th rowspan="3" class="sized"><img src="images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
	</tr>
	<tr>
		<td id="tbl-border-left"></td>
		<td>
		<!--  start content-table-inner ...................................................................... START -->
		<div id="content-table-inner">
		
			<!--  start table-content  -->
			<div id="table-content">
			

	
		 
				<!--  start product-table ..................................................................................... -->

				<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
				<tr>
					<th width="29" class="table-header-check"></th>
					<th colspan="6" align="center" class="table-header-repeat">
                   <div> 
                   <div  style="color:#FFF; font-size:12px; float:left">Welcome <strong><?php echo $_SESSION['name']; ?></strong></div>
                   <div  style="color:#FFF; font-size:12px; float:right"><strong>Date:</strong> <?php echo date('d-m-y');?> &nbsp;&nbsp;&nbsp;</div>
                    <div style="clear:both"></div>
                    </div>
                    </th>
				  </tr>
      
				<tr class="classB">
					<td>&nbsp;</td>
					<td width="44"><img src="images/md_customers.gif" width="24" height="26" /></td>
					<td colspan="2"><strong>MEMBERS</strong></td>
					<td width="43"><img src="images/md_product.gif" width="24" height="26" /></td>
					<td colspan="2"><strong>MEMBERS DONATION REQUEST</strong></td>
				  </tr>
				<tr class="classB">
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				  <td width="86"><img src="images/event1.png" alt="Content" width="60" height="60" /></td>
				  <td width="445"><?php  $noc=db_query("select count(*) as vala from member_register where is_approve='0'");
$noc1=db_fetch_object($noc);  ?>
<strong>No of Member pending for approval: <?php echo $noc1->vala ?>
<a href="member_registration.php" class="bluelink">&nbsp;&nbsp;&nbsp;View</a></td>
				  <td>&nbsp;</td>
				  <td width="87"><img src="images/event1.png" alt="Content" width="60" height="60" /></td>
				  <td width="515">
<strong>No of Member Donation Request submitted: <?php
$naac=db_query("select count(*) as cnt from member_donation_request a, member_register b where a.member_register_id=b.member_register_id and status = '0'");
$nawc=db_fetch_object($naac); echo "($nawc->cnt)"; ?>
<a href="member_request.php" class="bluelink">&nbsp;&nbsp;&nbsp;View</a></strong> 
                  </td>
				  </tr>
				<tr class="classB">
				  <td colspan="7">&nbsp;</td>
				  </tr>
   				</table>
				<!--  end product-table................................... --> 
				
               
			</div>
			<!--  end content-table  -->
		
			
			
			<!--  start paging..................................................... -->
			<table border="0" cellpadding="0" cellspacing="0" id="paging-table">
			<tr>
			<td>
			</td>
			<td></td>
			<td>
              </td>
			</tr>
			</table>
			<!--  end paging................ -->
			
			<div class="clear"></div>
		 
		</div>
		<!--  end content-table-inner ............................................END  -->
		</td>
		<td id="tbl-border-right"></td>
	</tr>
	<tr>
		<th class="sized bottomleft"></th>
		<td id="tbl-border-bottom">&nbsp;</td>
		<th class="sized bottomright"></th>
	</tr>
	</table>
	<div class="clear">&nbsp;</div>

</div>
<!--  end content -->
<div class="clear">&nbsp;</div>
</div>
<!--  end content-outer........................................................END -->

<div class="clear">&nbsp;</div>
    
<!-- start footer -->         
<div id="footer">
	<!--  start footer-left -->
	<div id="footer-left">
	
	 &copy; Copyright keystrokesinc. <span id="spanYear">2013</span> <a href="http://keystrokesinc.info">www.keystrokesinc.info</a>. All rights reserved.</div>
	<!--  end footer-left -->
	<div class="clear">&nbsp;</div>
</div>
<!-- end footer -->
 
</body>
</html>