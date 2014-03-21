<?php require_once("classes/config.php");
 if(empty($_SESSION['name'])){
header("location: index.php");
exit;	
 }
$_SESSION['id'] ='';
if(empty($_GET['numrows'])){
$len=5;
}
else{
$len=$_GET['numrows'];
	}
if(!empty($_GET[page])) $start=($_GET[page]-1)*$len;
else $start=0;
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
<?php
extract($_GET);
for($i=0;$i<=$count;$i++){ 
$del_id = $user[$i][mid]; 
$as = "select * from member_donation_request where member_donation_request_id = '$del_id' ";
$qs=db_query($as);
$tota=db_num_rows($qs);
if($tota <> ''){
$del = db_query("delete from member_donation_request  where member_donation_request_id = '$del_id' ");
$_GET['delete'] ="Record deleted sucessfully";
}
}
if(!empty($_GET['id']))
	{
		$sql = db_query("DELETE FROM  member_donation_request  WHERE  member_donation_request_id = ".$_GET['id']) or die(mysql_error);
	    $_GET['delete'] ="Record deleted sucessfully";
	}
$cnt =0;
$query = "select * from member_donation_request a, member_register b where a.member_register_id=b.member_register_id   and  status='2' ";
if(!empty($_GET['srchtype'])){
$query .= " and $_GET[srchtype] like '%$_GET[srch]%'  ";
	}
$q=db_query($query);	
$total=db_num_rows($q);
$query .=" order by member_username limit $start, $len"; 
$q=db_query($query);
$noofrows=db_num_rows($q);
/* to show in the navigation */
$pg=$_GET[page]; if($pg==0 || empty($pg)) $pg=1;
$pg=$pg-1;
$begin=$start+1;
$end=$len*$pg+$len;
if($end>=$total) $end=$total;
/* to show in the navigation */
$i=0;
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
    <form name="myform2" id="myform2" method="GET" action="member_request_reject.php">
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
		<td>
<input type="text" name="srch" value="<?php if(!empty($_GET['srch'])) echo $_GET['srch']; else echo "Search"; ?>" onblur="if (this.value=='') { this.value='<?php if(!empty($_GET['srch'])) echo $_GET['srch']; else echo "Search"; ?>'; }" onfocus="if (this.value=='<?php if(!empty($_GET['srch'])) echo $_GET['srch']; else echo "Search"; ?>') { this.value=''; }" class="top-search-inp" /></td>
		<td>
		<select name="srchtype"  class="styledselectmain">
        <?php if(!empty($_GET['srchtype'])) { ?><option value="<?php echo $_GET['srchtype']; ?>" selected="selected"><?php echo $_GET['srchtype']; ?></option><?php } // else { ?>
       <!-- <option value="All" selected="selected">All</option>--><?php  //} ?>
			<option value="b.member_username">User Name</option>
			<option value="a.title">Title</option>
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
		                    
		<ul class="select"><li><a href="member_approved.php"><b>Admin</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
				<li class="sub_show"><a href="member_approved.php" style="cursor:pointer">Church Accounts</a></li>
				<li><a href="member_registration.php">Pending Church Accounts <?php
						$noc=db_query("select count(*) as cnt from member_register where is_approve='0'");
						$noc1=db_fetch_object($noc); echo "($noc1->cnt)"; ?></a></li>
				<li><a href="donor_registration_approved.php">Donor Accounts</a></li>
				<li><a href="donor_registration.php">Pending Donor Accounts <?php
						$noca=db_query("select count(*) as cnt from donor_register where is_approve='0'");
						$noc2=db_fetch_object($noca); echo "($noc2->cnt)"; ?></a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>

<ul class="current"><li><a href="donor_register_payment.php"><b>Reports</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
			<?php $mu=7; include_once("commonsubmenu.php");?>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		<div class="nav-divider">&nbsp;</div>
<!--[if IE 7]><!--></a><!--<![endif]-->
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
		<h1>Rejected Needs</h1>
	</div>
	<!-- end page-heading -->
<form name="myform" id="myform" method="get" action="">
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
			
				<!--  start message-yellow -->
				<!--<div id="message-yellow">
				<table border="0" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td class="yellow-left">You have a new message. <a href="">Go to Inbox.</a></td>
					<td class="yellow-right"><a class="close-yellow"><img src="images/table/icon_close_yellow.gif"   alt="" /></a></td>
				</tr>
				</table>
				</div>-->
				<!--  end message-yellow -->
				
				<!--  start message-red --> 
                <?php 
if(empty($_GET['delete']) && !empty($count)){
$_GET['error'] ="Record not selected ";		}			
				 if(!empty($_GET['error'])) {?>
				<div id="message-red">
				<table border="0" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td class="red-left">Warning. <a href=""><?php echo $_GET['error']."  ";?>Please try again.</a></td>
					<td class="red-right"><a class="close-red"><img src="images/table/icon_close_red.gif"   alt="" /></a></td>
				</tr>
				</table>
				</div><?php } ?>
				<!--  end message-red -->
				
				<!--  start message-blue -->
				<!--<div id="message-blue">
				<table border="0" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td class="blue-left">Welcome back. <a href="">View my account.</a> </td>
					<td class="blue-right"><a class="close-blue"><img src="images/table/icon_close_blue.gif"   alt="" /></a></td>
				</tr>
				</table>
				</div>-->
				<!--  end message-blue -->
			
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
				
				<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
				<tr>
					<th width="39" class="table-header-check" style="color:#FFF">#<!--<input type='checkbox' class='checkall' onclick='toggle(this)' />--> </th>
					<th width="178" class="table-header-repeat line-left minwidth-1"><a href=""><span class="columnlink">Title</span></a>	</th>
					<th width="121" class="table-header-repeat line-left minwidth-1"><a href="">Amount</a></th>
					<th width="200" class="table-header-repeat line-left"><a href="">Member UserName</a></th>
					<th width="141" class="table-header-repeat line-left"><a href="">Member Email</a></th>
					<th width="124" class="table-header-repeat line-left"><a href="">Phone</a></th>
					<th width="253" class="table-header-repeat line-left"><a href="">Address</a></th>
					<th width="114" class="table-header-repeat line-left"><a href="">Actions</a></th>
				</tr>
<?php 
$i=1;
while($r=db_fetch_object($q)){
$index=($page-1)*$len+$i;	
$cnt=1-$cnt;
?>               
				<tr class="<?php if($cnt==0) echo "classB"; else { ?>classA<?php } ?>">
					<td><!--<input  type="checkbox" class='checkall'  name='user[<? echo $i; ?>][mid]' value='<? echo $r->member_register_id; ?>'  />-->
                    <?php echo $i; ?></td>
					<td align="left"><?php echo $r->title?></td>
					<td align="left"><?php echo $r->amount?></td>
					<td align="left"><?php echo $r->member_username?></td>
					<td align="left"><?php echo $r->member_email?></td>
					<td align="left"><?php echo $r->member_phone?></td>
					<td align="left"><?php echo $r->member_address; ?></td>
					<td>
<a href="member_request_reject_view.php?id=<?php echo $r->member_donation_request_id; ?>" title="View" class="icon-3 info-tooltip"></a>
<!--<a href="member_request_approved_edit.php?id=<?php echo $r->member_register_id; ?>" title="Edit" class="icon-1 info-tooltip"></a>-->
<a href="member_request_reject.php?id=<?php echo $r->member_donation_request_id; ?>&delete=Record deleted sucessfully" title="Delete" class="icon-2 info-tooltip" onclick="return confirm('Are you sure you want to delete this record ?')"></a></td>
				</tr>
<?php $i++; } ?><input name="count" type="hidden" value="<?php echo $noofrows;  ?>" />   
               
				</table>
				<!--  end product-table................................... --> 
				
               
			</div>
			<!--  end content-table  -->
		
			<!--  start actions-box ............................................... -->
			<!--<div id="actions-box">
				<a href="" class="action-slider"></a>
				<div id="actions-box-slider">
					<a href="javascript:void(0)" class="action-delete" onclick="document.myform.submit()">Delete</a>
				</div>
				<div class="clear"></div>
			</div>-->
			<!-- end actions-box........... -->
			
			<!--  start paging..................................................... -->
			<table border="0" cellpadding="0" cellspacing="0" id="paging-table">
			<tr>
			<td>
<? if($total>0){?>
<!-- navigation -->
<style>
a { color:#333 }
</style>
<div class="result result1_top"><div class="result1_bottom">
       
        <div style="width:300px" align=right>
        	<div class="smallText"><span>Displaying <strong><?=$begin?></strong> to <strong><?=$end?></strong></span> (of <strong><?=$total?></strong> records)</div>

             <?
			$link=$_SERVER[PHP_SELF]."?".$_SERVER[QUERY_STRING];
			 drawNavigationPlainAdmin($page,$total,$link);
			 ?>

        </div>

</div></div>
<!-- navigation -->
<? }?>
			</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>
           	<!--  start actions-box ............................................... -->
			<div>
            <div id="actions-boxB">
				<a href="" class="action-sliderB"></a>
				<div id="actions-box-sliderB">
					<a href="member_request_reject.php?numrows=5" class="action-deleteB" >5</a>
					<a href="member_request_reject.php?numrows=10" class="action-deleteB" >10</a>
					<a href="member_request_reject.php?numrows=25" class="action-deleteB" >25</a>
					<a href="member_request_reject.php?numrows=50" class="action-deleteB" >50</a>
					<a href="member_request_reject.php?numrows=75" class="action-deleteB" >75</a>
					<a href="member_request_reject.php?numrows=100" class="action-deleteB" >100</a>
				</div>
				<div class="clear"></div>
			</div>
            				<div class="clear"></div>

            </div>
			<!-- end actions-box........... -->              </td>
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
	</table></form>
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