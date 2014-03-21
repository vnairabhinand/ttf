<?php require_once("classes/config.php"); 

if(empty($_SESSION['name'])){
header("location: index.php");
exit;	
}

if(empty($_SESSION['id'])){
$_SESSION['id'] = $_GET['id'];
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
</head>
<body> 
<script type="text/javascript" language="javascript">
function CDelete_Click(PK)	{
	if(confirm('Are you sure you want to delete this information?'))
	{
	document.location="donor_registration_approved_view.php?Action=Delete&pk="+PK+"&id="+PK;
	}
}
function CApprove_Click(PK)	{
document.location="donor_registration_approved_view.php?Action=Approve&pk="+PK+"&id="+PK;

}

function CReject_Click(PK)	{
document.location="donor_registration_approved_view.php?Action=Reject&pk="+PK+"&id="+PK;
}
</script>
<?php
// change-- query here
if($_REQUEST['Action'] =='Delete')
	{
		$id = $_REQUEST['pk'];
		$sql = db_query("DELETE FROM  donor_register  WHERE  donor_register_id = ".$id) or die(mysql_error);
	?>
<script>
window.location = 'donor_registration_approved.php?delete=Record deleted sucessfully';
</script><?php }
if($_REQUEST['Action'] =='Reject'){
$id = $_REQUEST['pk'];
		$sql =db_query("Update donor_register  set is_approve='2' where donor_register_id='".$_REQUEST['pk']."' ") or die(mysql_error);
?>
<script>
window.location = 'donor_registration_approved.php?delete=Record Rejected sucessfully';
</script>
<?php }
if($_REQUEST['Action'] =='Approve'){
$id = $_REQUEST['pk'];
$sql =db_query("Update donor_register  set is_approve='1' where donor_register_id='".$_SESSION['id']."' ") or die(mysql_error);

	$chk_u=	mysql_fetch_array(mysql_query("select * from donor_register where donor_register_id = '".$_SESSION['id']."'  "));

			$headers	=	"From: admin@especiallythefamily.org \r\n";
			$headers	.=	"Content-Type: text/html;\n";
			$msg1	=	'<table width="100%" border="0" cellspacing="2" cellpadding="0">';
			$msg1	.=	'<tr><td align="left" valign="top" colspan="3">'."<img src='http://www.especiallythefamily.org/ETF/images/etflog.jpg' />".'</tr>';	
			$msg1	.=	'<tr><td align="left" valign="top" colspan="3">Dear '.$chk_u['donor_first_name']." ".$chk_u['donor_last_name'].'</tr>';
$msg1	.=	'<tr><td align="left" valign="top" colspan="3" width="13%">Now you can start using  ETF  website . You will get all privileges as a verified Donor</td></tr>';
			$msg1	.=	'<tr><td align="left" valign="top" colspan="3">'."Thank You".'</tr>';	
			$msg1	.=	'</table>';
			$sub	=	"Donor Registration Completed";
			$ret = mail($chk_u['donor_email'], $sub, $msg1, $headers, '-f admin@especiallythefamily.org');
?>
<script>
window.opener.location.reload();
</script> <?php } 


$query = "select * from donor_register where is_approve !='2' and donor_register_id = '".$_SESSION['id']."' ";
$q=db_query($query);
$r=db_fetch_object($q);
?>
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
		  <form name="myform2" id="myform2" method="GET" action="donor_registration_approved.php"> <input type="hidden" name="rcid" value="<?php echo $_SESSION['id']; ?>"  />
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
		<td>
<input type="text" name="srch" value="<?php if(!empty($_GET['srch'])) echo $_GET['srch']; else echo "Search"; ?>" onblur="if (this.value=='') { this.value='<?php if(!empty($_GET['srch'])) echo $_GET['srch']; else echo "Search"; ?>'; }" onfocus="if (this.value=='<?php if(!empty($_GET['srch'])) echo $_GET['srch']; else echo "Search"; ?>') { this.value=''; }" class="top-search-inp" /></td>
		<td>
		<select name="srchtype"  class="styledselectmain">
        <?php if(!empty($_GET['srchtype'])) { ?><option value="<?php echo $_GET['srchtype']; ?>" selected="selected"><?php echo $_GET['srchtype']; ?></option><?php } // else { ?>
       <!-- <option value="All" selected="selected">All</option>--><?php  //} ?>
			<option value="donor_username">User Name</option>
			<option value="donor_email">Email</option>
			<option value="donor_phone">Phone</option>
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
		
		<ul class="select"><li><a href="home.php"><b>Home</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				<li><a href="changepassword.php">Change Password</a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		                    
		<ul class="current"><li><a href="member_approved.php"><b>Admin</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
<div class="select_sub show">
			<ul class="sub">
				<li><a style="cursor:pointer" href="member_approved.php">Church Accounts</a></li>
				<li><a   href="member_registration.php">Pending Church Accounts <?php
						$noc=db_query("select count(*) as cnt from member_register where is_approve='0'");
						$noc1=db_fetch_object($noc); echo "($noc1->cnt)"; ?></a></li>
				<li class="sub_show"><a  style="cursor:pointer"  href="donor_registration_approved.php">Donor Accounts</a></li>
				<li><a  href="donor_registration.php">Pending Donor Accounts <?php
						$noca=db_query("select count(*) as cnt from donor_register where is_approve='0'");
						$noc2=db_fetch_object($noca); echo "($noc2->cnt)"; ?></a></li>
                        <li ><a href="member_request_approved.php" style="cursor:pointer">Approved Needs</a></li>
<li ><a href="member_request.php" style="cursor:pointer">Submitted Needs 
<?php
$naac=db_query("select count(*) as cnt from member_donation_request a, member_register b where a.member_register_id=b.member_register_id and status = '0'");
$nawc=db_fetch_object($naac); echo "($nawc->cnt)"; ?></a>
</li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
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
     <!--<![endif]-->
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
<div style="float:left">
<h1>View details of <span style="text-transform:uppercase"><?php echo $r->donor_username?></span></h1>	
</div>
<div style="float:right; margin-right:20px;">
<a href="donor_registration_approved.php" title="Back" class="info-tooltip"><h2>BACK</h2></a>	
</div>
<div style="clear:both"></div>
</div>
	<!-- end page-heading -->

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
				<form id="mainform" action="">
				<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
				<tr>
					<th colspan="2" class="table-header-repeat line-left minwidth-1">
					 <div align="center"> <span class="columnlink">
			        <h1 style="color:#FFF">Donor Users Information</h1> </div></th>
				  </tr>
             
				<tr>
					<td width="19%">User Name</td>
					<td width="81%" align="left"><?php echo $r->donor_username;?></td>
				  </tr>
				<tr>
				  <td>Password</td>
				  <td width="81%" align="left"><?php 
$query1 = "select * from donor_register where donor_register_id = '".$_GET['id']."'  ";
$q1=db_query($query1);	
$r1=db_fetch_object($q1);  
					echo  $r1->donor_password; 
					 ?></td>
				  </tr>
				<tr>
				  <td><span class="inputleft">Email</span></td>
				  <td align="left"><?php echo $r->donor_email?></td>
				  </tr>
							<tr>
				  <td><span class="inputleft">First Name</span></td>
				  <td align="left"><?php echo $r->donor_first_name;?></td>
				  </tr>
				<tr>
				  <td><span class="inputleft">Last Name</span></td>
				  <td align="left"><span class="inputright"><?php echo $r->donor_last_name;?></span></td>
				  </tr>
				<tr>
				  <td><span class="inputleft">Phone</span></td>
				  <td align="left"><span class="inputright">
				    <?php  echo $r->donor_phone; ?>
				  </span></td>
				  </tr>
				<tr>
				  <td><span class="inputleft">Address</span></td>
				  <td align="left"><span class="inputright">
				    <?php  echo $r->donor_address; ?>
				  </span></td>
				  </tr>
				<tr>
				  <td><span class="inputleft">Created Date</span></td>
				  <td align="left"><?php  echo date('m-d-Y', strtotime($r->cdate)); ?></td>
				  </tr>
				<tr>
				  <td>&nbsp;</td>
				  <td align="left">&nbsp;</td>
				  </tr>
<!--<tr>
					<th colspan="2" class="table-header-repeat line-left minwidth-1">
					 <div align="center"><a href=""><span class="columnlink">
			        <h1 style="color:#FFF">Other Information</h1></a></div></th>
				  </tr>				
				<tr>
				  <td><span class="inputleft">Is Verify?</span></td>
				  <td align="left"><span class="inputright">
				    <?php if($r->is_verify == '1') echo 'Yes'; else echo 'No';?>
				    <?php 
$query1 = "select * from member_donation_request where member_donation_request_id = '".$r->needid."'  ";
$q1=db_query($query1);	
$r1=db_fetch_object($q1);
					echo $r1->title ?>
				  </span></td>
				  </tr>
				<tr>
				  <td><span class="inputleft">Is Approve?</span></td>
				  <td align="left"><span class="inputright">
				    <?php if($r->is_approve == '1') echo 'Yes'; else echo 'No';?>
				  </span></td>
				  </tr>-->
<tr>
					<th colspan="2" class="table-header-repeat line-left minwidth-1">
					 <div align="center"> <span class="columnlink">
			        <h1 style="color:#FFF">Log Information</h1> </div></th>
				  </tr>	
				<tr>
				  <td colspan="2">
<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
				<tr>
					<th width="39" class="table-header-check" style="color:#FFF">#<!--<input type='checkbox' class='checkall' onclick='toggle(this)' />--> </th>
					<th width="179" class="table-header-repeat line-left minwidth-1"><span class="table-header-repeat line-left"><a style="color:#FFF" href="">Log Status</a></span></th>
					<th width="273" class="table-header-repeat line-left minwidth-1"><a style="color:#FFF"  href="">Loged Date</a></th>
					<th width="163" class="table-header-repeat line-left"><a style="color:#FFF"  href="">Amount</a></th>
					<th width="222" class="table-header-repeat line-left"><a style="color:#FFF"  href="">Amount Transfer Date</a></th>
					<th width="160" class="table-header-repeat line-left"><a style="color:#FFF"  href="">Need</a></th>

					<th width="122" class="table-header-repeat line-left"><a style="color:#FFF"  href="">Link needs</a></th>
				</tr>
<?php  $a=1;
$query = "select * from log where uid = '".$_GET['id']."' and UIDType = 'D' and paypalamt != '0' ";
$q=db_query($query);	 
$total=db_num_rows($q);
$query .=" order by user"; 
$q=db_query($query);
$i=1;
while($r=db_fetch_object($q)){
$index=($page-1)*$len+$i;	
$cnt=1-$cnt;
?>               
				<tr class="<?php if($cnt==0) echo "classB"; else { ?>classA<?php } ?>">
					<td><!--<input  type="checkbox" class='checkall'  name='user[<? echo $i; ?>][mid]' value='<? echo $r->member_register_id; ?>'  />-->
                    <?php echo $i; ?></td>
					<td align="left"><?php echo $r->msg?></td>
					<td align="left"><?php echo $r->timestamp?></td>
					<td align="left"><?php echo $r->paypalamt?></td>
					<td align="left"><?php echo $r->paymentdate?></td>
					<td align="left">
                    
					<?php 
$query1 = "select * from member_donation_request where member_donation_request_id = '".$r->needid."'  ";
$q1=db_query($query1);	
$r1=db_fetch_object($q1);
					echo $r1->title ?></td>

					<td>
  <a href="http://especiallythefamily.org/ETF/donation_detail.php?mdr=<?php echo $r->needid; ?>" target="_new" title="View" class="icon-3 info-tooltip"></a>
  <!--<a href="member_request_approved_edit.php?id=<?php echo $r->member_register_id; ?>" title="Edit" class="icon-1 info-tooltip"></a>-->
</td>
				</tr>
<?php $i++; } ?><input name="count" type="hidden" value="<?php echo $noofrows;  ?>" />   
               
				</table>
                  
                  </td>
				  </tr>
				<tr>
				  <td colspan="2">
                  <div align="center">
<?php if($r->is_approve != '1') {?>
<input type="button" name="button" value="Approve"  onClick="JavaScript: CApprove_Click('<?php echo $_GET['id']; ?>');" style="background:url(images/login/inp_login.gif); color:#FFF; padding:2px; cursor:pointer; border:none" />
<?php  } ?>
<?php if($r->is_approve != '2') {?>
<input type="button" name="button" value="Reject"  onClick="JavaScript: CReject_Click('<?php echo $_GET['id']; ?>');" style="background:url(images/login/inp_login.gif); color:#FFF; padding:2px; cursor:pointer; border:none" />
<?php  } ?>
<input type="button" name="button" value="Delete"  onClick="JavaScript: CDelete_Click('<?php echo $_GET['id']; ?>');" style="background:url(images/login/inp_login.gif); color:#FFF; padding:2px; cursor:pointer; border:none" />                  
                  </div>
                  </td>
				  </tr>                  
                  
                  
                  </table>
				<!--  end product-table................................... --> 
				</form>
			</div>
			<!--  end content-table  -->
		

			
			<!--  start paging..................................................... -->
<div style="float:right; margin-right:20px;">
<a href="donor_registration_approved.php" title="Back" class="info-tooltip"><h2>BACK</h2></a>	
</div>

			
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