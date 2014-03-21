<?php require_once("classes/config.php"); 
if(empty($_SESSION['name'])){
header("location: index.php");
exit;	
	}
	if(!empty($_GET['id'])) {
$del = db_query("delete from countryRep  where  id = '".$_GET['id']."' ");
$_GET['delete'] ="Record deleted sucessfully";
	}
	extract($_POST);
	if(!empty($name) && !empty($cname) && !empty($caddress) && empty($edit)) {
$sql =db_query("INSERT INTO `countryRep` ( `cname` , `caddress` , `name` ) VALUES ('$cname', '$caddress', '$name')"); 
$_GET['delete'] ="Record inserted sucessfully";
	}

if(!empty($edit)){
$sql =db_query("Update countryRep  set cname = '$cname', caddress = '$caddress', name = '$name' where id='".$edit."' ") or die(mysql_error);
$_GET['delete'] ="Record updated sucessfully";
}
if(!empty($_GET['editid'])){
$qs=db_query("select cname,caddress,name  from countryRep where id = '".$_GET['editid']."' "); 
$rsp=db_fetch_object($qs);
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
		
		<ul class="select"><li><a href="home.php"><b>Home</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
<!--<div class="select_sub show">
			<ul class="sub">
				<li class="sub_show"><a style="cursor:pointer" href="changepassword.php">Change Password</a></li>
			</ul>
		</div>-->
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
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		<div class="nav-divider">&nbsp;</div>
        <ul class="select"><li><a href="member_request_approved.php"><b>Reports</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
				<li><a href="member_request_approved.php">Approved Needs</a></li>
				<li><a style="cursor:pointer" href="member_request.php">Submitted Needs <?php
						$nocc=db_query("select count(*) as cnt from member_donation_request where status = '0'");
						$nocca=db_fetch_object($nocc); echo "($nocca->cnt)"; ?></a></li>
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
        <?php if($_SESSION['status'] == "superadmin" ) {?>
         <div class="nav-divider">&nbsp;</div>
        		<ul class="current"> <!--<![endif]-->
        <!--[if lte IE 6]><table><tr><td><![endif]-->
<div class="select_sub show">
			<ul class="sub">
				<li><a style="cursor:pointer" href="changepassword.php">Change Password</a></li>
                                                <li class="sub_show"><a href="representatives.php" style="cursor:pointer">Representatives</a></li>


			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
                            
<?php } ?>
		
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
		<h1>Country Representatives</h1>
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
			
<?php if(!empty($_SESSION['signerror'])) {?>
				<div id="message-red">
				<table border="0" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td class="red-left">Warning. <a href=""><?php echo $_SESSION['signerror']; ?></a></td>
					<td class="red-right"><a class="close-red"><img src="images/table/icon_close_red.gif"  /></a></td>
				</tr>
				</table>
				</div><?php } ?>
				<!--  end message-red -->
				
				<!--  start message-green -->
                <?php  if(!empty($_GET['delete'])) {?>
				<div id="message-green">
				<table border="0" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td class="green-left"><?php echo $_GET['delete'] ?>.</td>
					<td class="green-right"><a class="close-green"><img src="images/table/icon_close_green.gif"   alt="" /></a></td>
				</tr>
				</table>
				</div><?php } ?>
				<!--  end message-green -->		
	
		 
				<!--  start product-table ..................................................................................... -->
<?php
$query = "select * from admin";
$q=db_query($query);
$r=db_fetch_object($q);
?>				<form method="post" action="">
				<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
				<tr>
					<th width="28" class="table-header-check"></th>
					<th colspan="9" class="table-header-repeat" align="center"><div align="center" style="color:#FFF; font-size:18px;">Country Representatives</div></th>
				  </tr>
      
				<tr class="classB">
					<td colspan="5">&nbsp;</td>
					<td width="131">Representative </td>
					<td colspan="4"><input name="name" type="text" id="name" size="50" value="<?php echo $rsp->name?>" /></td>
				  </tr>
                  				<tr class="classA">
					<td colspan="5">&nbsp;</td>
					<td>Country</td>
					<td colspan="4"><select  name="cname"  >

                              <option value="<?php echo $rsp->cname?>" ><?php echo $rsp->cname?></option>

                              <?php

							  $select = "SELECT * FROM countries order by cname ";

							  $rs = mysql_query($select);

							  $numrows = mysql_num_rows($rs);

							  if($numrows > 0)

							  {

								  while($rows = mysql_fetch_array($rs))

								  {

							  ?>

                              	<option value="<?php echo $rows['cname']; ?>" ><?php echo $rows['cname']; ?></option>

                              <?php

								  }

							  }

							  ?>

								</select></td>
				  </tr>
                  				<tr class="classB">
					<td colspan="5">&nbsp;</td>
					<td>Email-ID</td>
					<td colspan="4">  
                    <input name="edit" type="hidden" id="edit" size="50" value="<?php echo $_GET['editid']?>" />
					  <input name="caddress" type="text" id="caddress" size="50" value="<?php echo $rsp->caddress ?>" /></td>
				  </tr>
                                    				<tr class="classA">
					<td colspan="6">&nbsp;</td>
					<td colspan="4">
 <?php if(empty($_GET['editid'])) {?>                   
<input type="submit" name="submit" value="Submit"  style="background:url(images/login/inp_login.gif); color:#FFF; padding:2px; cursor:pointer; border:none" />
<?php } else {?>
<input type="submit" name="submit" value="Update" style="background:url(images/login/inp_login.gif); color:#FFF; padding:2px; cursor:pointer; border:none" />
<?php } ?>
</td>
				  </tr>
                                    				<tr class="classA">
                                    				  <td colspan="6">&nbsp;</td>
                                    				  <td colspan="4">&nbsp;</td>
                                  				  </tr>
                                    				<tr class="classA">
                                    				  <td colspan="6">&nbsp;</td>
                                    				  <td width="211"><strong>Country</strong></td>
                                    				  <td width="249"><strong>Representative</strong></td>
                                    				  <td width="254"><strong>Email-ID</strong></td>
                                    				  <td width="292"><strong>Action</strong></td>
                   				                  </tr>
<?php  $q=db_query("select * from countryRep"); 
while($r=db_fetch_object($q)){	?>
                                    				<tr class="classA">
                                    				  <td colspan="6"></td>
                                    				  <td width="211"><?php echo $r->cname; ?></td>
                                    				  <td width="249"><?php echo $r->name; ?></td>
                                    				  <td width="254"><?php echo $r->caddress; ?></td>
                                    				  <td width="292">
<a href="representatives.php?editid=<?php echo $r->id; ?>" title="Edit" class="icon-1 info-tooltip"></a>
<a href="representatives.php?id=<?php echo $r->id; ?>" title="Delete" class="icon-2 info-tooltip" onclick="return confirm('Are you sure you want to delete this record ?')"></a></td>
                   				                  </tr><?php } ?>
                                                  
                                                  
                                 				<tr class="classB">
					<td colspan="6">&nbsp;</td>
					<td colspan="4">&nbsp;</td>
				  </tr>
   
               
</table></form>
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