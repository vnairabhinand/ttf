<?php session_start();

if($_SESSION["AdminId"]=="")

{

	header("Location:login.php");

	exit();

}

 include_once("include/config.php");



 if(!isset($_SESSION['psize']))



 	$_SESSION['psize'] =$defaultPageSize;



	



// change-- table name,title and imgdir



$table_name = "member_donation_request";



$title="Home Page Story";



$page = $_SERVER['PHP_SELF'];











// $dependency_table = array('brand'	=>	'manufacture_id');



////////////////////////////////



?>



<?php





if($_REQUEST['Action'] =='Decline')

	{

		

		mysql_query("Update member_donation_request set status='2' where member_donation_request_id='".$_REQUEST['pk']."' "); 

		

		

		

		

		header("location: $page?decline=true");

		exit();

	}

	



	if($_REQUEST['Action'] =='Delete')



	{



		$id = $_POST['pk'];



		$sql = mysql_query("DELETE FROM " . $table_name  . " WHERE " . $table_name . "_id = ".$id) or die(mysql_error);



		header("location: $page?delete=true");



		exit();



	}



	



	elseif($_REQUEST['Action'] =='DeleteSelected')



	{



		$id = $_POST['pk_list'];



		$path = $rootpath . $imgdir;



		$idList = implode("','", $id);



	



		$sql = mysql_query("DELETE FROM " . $table_name . " WHERE " . $table_name .  "_id IN ('". $idList. "')") or die(mysql_error);







		header("location: $page?delete=true");



		exit();



	}



	



	elseif($_REQUEST['Action'] =='VisibleHideSelected')



	{



		$id 		= $_POST['pk_list'];



		$visibility = $_POST['visible'];



		



		if(is_array($id))



			$idList = implode("','", $id);



		else



			$idList	= $id;



		



		$sql = mysql_query("UPDATE " . $table_name .  " SET status = ". $visibility ." WHERE " . $table_name . "_id IN ('". $idList. "')") or die(mysql_error);

		if($visibility ==1)



			$res = 'true';



		else



			$res = 'false';	



		echo "<script>location.href='.$page?visible=$res.';</script>";



		exit();



	}



	elseif($_REQUEST['Action']=='VisibleHide')



	{



		$visible = $_REQUEST['visible'];



		$id		 = $_REQUEST['pk'];

		mysql_query("update " . $table_name . " set status=$visible,approve_date = now() where " . $table_name . "_id=$id") or die(mysql_error());



	



		if($visible ==1)



			$res = 'true';



		else	



			$res = 'false';	



	



		echo "<script>location.href='member_request.php?visible=$res';</script>";



		exit();







	}



if($_POST['Save'])

	{		

      	mysql_query("Update member_donation_request set status='2',reason='".$_REQUEST['reason']."' where member_donation_request_id ='".$_REQUEST['pk']."' "); 

		

		?>

	  <script>	  

   	  window.close();	  

	  </script>

	  <?php 

	}





$msg="";



if($_GET["delete"]=="true")



	$msg = "$title information deleted successfully";



if($_GET["visible"]=="true")



	$msg = "User Active";



if($_GET["visible"]=="false")



	$msg = "User Deactive";



if($_GET["add"]=="true")



	$msg = "$title information added successfully";



if($_GET["save"]=="true")



	$msg = "$title information saved successfully";



if($_GET["menu"]=="true")



	$msg = "$title has been set to menu successfully";



if($_GET["menu"]=="false")



	$msg = "$title has been removed from menu successfully";



?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<html xmlns="http://www.w3.org/1999/xhtml">



<head>



<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />



<title>Admin Panel - <?php echo $title; ?></title>



<link rel="stylesheet" href="css/style.css" />



<script type="text/javascript" src="js/jquery-1.js"></script>



<script type="text/javascript" src="js/ddaccordion.js"></script>



<script type="text/javascript" src="js/menu.js"></script>



<script type="text/javascript" src="js/functions.js"></script>



<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>



<script type="text/javascript" language="javascript">



	function CView_Click(frm, PK)







	{



		popupWindowURL(frm.action + '?Action=View&pk='+PK, 'list', 600, 500, false, false, true);



	}



	

	  function CReason_View(frm, PK)

	{

		popupWindowURL(frm.action + '?Action=Request&pk='+PK, 'list', 450, 400, false, false, true);

	}



	



	function CDelete_Click(frm, PK)



	{



		with(frm)



		{



			if(confirm('Are you sure you want to delete this information?'))



			{



				pk.value		= PK;



				Action.value	= 'Delete';



				frm.submit();



			}



		}



	}



	



	function CDeleteChecked_Click(frm, PK)



	{



		with(frm)



		{



			var flg = false;



			



			for(i=0; i<PK.length; i++)



			{



				if(PK[i].checked)



					flg = true;



			}



			



			if(!flg)



			{



				alert('Please select the information you want to delete.');



				return false;



			}



			



			if(confirm('Are you sure you want to delete selected information?'))



			{



				Action.value = 'DeleteSelected';



				submit();



			}



		}



	}



	



	function CVisibleHide_Click(frm, PK, Visibility)



	{



		with(frm)



		{



			visible.value	= Visibility;



			pk.value 		= PK;



			Action.value	= 'VisibleHide';



			frm.submit();



		}



	}



	



	function CVisibleHideChecked_Click(frm, PK, Visibility)



	{



		with(frm)



		{



			var flg = false;



			



			for(i=0; i<PK.length; i++)



			{



				if(PK[i].checked)



					flg = true;



			}



			



			if(!flg)



			{



				alert('Please select the information you want to visible/hide.');



				return false;



			}



			



			visible.value	= Visibility;



			Action.value 	= 'VisibleHideSelected';



			submit();



		}



	}



	



	function Toggle_Click(frm, PK, Status, Field)



	{



		with(frm)



		{



			pk.value		= PK;



			visible.value	= Status;



			toggle.value	= Field;



			Action.value	= 'Toggle';



			frm.submit();



		}



	}



</script>



<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />



</head>



<body>



<?php

 

	if($_REQUEST['Action'] =='Request')

	{

		// change-- query here

		$query 	= mysql_query("select * from " . $table_name . " where " . $table_name .  "_id =".$_GET['pk']) or die(mysql_error());

		$rs = mysql_fetch_array($query);

?>

		<table width="100%" border="0" cellspacing="0" cellpadding="0">

			<tr>

				<td></td>

			</tr>

			<tr>

				<td height="370" align="center" valign="top"><br />

					<table width="95%" border="0" cellspacing="0" cellpadding="0">

						<tr>

							<td width="5"><img src="images/home_box_lt.jpg" width="5" height="28" /></td>

							<td><table width="100%" border="0" cellspacing="0" cellpadding="0">

                          <tr>

                            <td width="11"><img src="images/home_box_hed_lft.jpg" width="11" height="28" /></td>

                            <td background="images/home_box_hed_bg.jpg"><table width="100%" border="0" cellspacing="0" cellpadding="0">

                                <tr>

                                  <td width="25"><img src="images/icon_community.gif" width="18" height="22" /></td>

                                  <td width="774" align="left"><h3><strong><?php echo $title; ?></strong></h3></td>

                                  <td width="43" align="center" class="bluelink"></td>

                                </tr>

                            </table></td>

                            <td width="7"><img src="images/home_box_hed_rght.jpg" width="7" height="28" /></td>

                            <td width="11" background="images/home_box_tbg.jpg">&nbsp;</td>

                          </tr>

                      </table></td>

                      <td width="6"><img src="images/home_box_rt.jpg" width="6" height="28" /></td>

                    </tr>

                    <tr>

                      <td background="images/home_box_lbg.jpg">&nbsp;</td>

					  <td height="120" align="center" valign="top">

					  	<table width="98%" border="0" cellspacing="0" cellpadding="0">

							<tr>

								<td>

                                <form id="popup" name="popup" method="post">

									<table border="0" cellpadding="3" cellspacing="1" width="95%" align="center">

										<tr>

											<td colspan="2" class="formtitle" align="center"></td>

										</tr>

										

                                        <tr>

											<td class="inputleft" width="25%" valign="top" align="left">Reason</td>

											<td class="inputright" align="left"><textarea name="reason" id="reason" rows="6" cols="40"></textarea> </td>

										</tr>

                                        

										<tr>

											<td class="divider" colspan="2"></td>

										</tr>

										<tr>

											<td colspan="2" align="center"><input type="submit" name="Save" value="Save" class="button"/>											</td>

										</tr>

									</table>

                                    </form>

								</td>

							</tr>

							<tr><td height="10"></td></tr>

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

<?php

	}





  else if($_REQUEST['Action'] =='View')



	{



		// change-- query here





		$query 	= mysql_query("select * from " . $table_name . " as mdr  join member_register as mr on mr.member_register_id = mdr.member_register_id  where ". $table_name .  "_id =".$_GET['pk']) or die(mysql_error());



		$rs	= mysql_fetch_array($query);



?>



		<table width="100%" border="0" cellspacing="0" cellpadding="0">



			<tr>



				<td></td>



			</tr>



			<tr>



				<td height="370" align="center" valign="top"><br />



					<table width="95%" border="0" cellspacing="0" cellpadding="0">



						<tr>



							<td width="5"><img src="images/home_box_lt.jpg" width="5" height="28" /></td>



							<td><table width="100%" border="0" cellspacing="0" cellpadding="0">



                          <tr>



                            <td width="11"><img src="images/home_box_hed_lft.jpg" width="11" height="28" /></td>



                            <td background="images/home_box_hed_bg.jpg"><table width="100%" border="0" cellspacing="0" cellpadding="0">



                                <tr>



                                  <td width="25"><img src="images/icon_community.gif" width="18" height="22" /></td>



                                  <td width="774" align="left"><h3><strong><?php echo $title; ?></strong></h3></td>



                                  <td width="43" align="center" class="bluelink"></td>



                                </tr>



                            </table></td>



                            <td width="7"><img src="images/home_box_hed_rght.jpg" width="7" height="28" /></td>



                            <td width="11" background="images/home_box_tbg.jpg">&nbsp;</td>



                          </tr>



                      </table></td>



                      <td width="6"><img src="images/home_box_rt.jpg" width="6" height="28" /></td>



                    </tr>



                    <tr>



                      <td background="images/home_box_lbg.jpg">&nbsp;</td>



					  <td height="120" align="center" valign="top">



					  	<table width="98%" border="0" cellspacing="0" cellpadding="0">



							<tr>



								<td>



									<table border="0" cellpadding="3" cellspacing="1" width="95%" align="center">



										<tr>



											<td colspan="2" class="formtitle" align="center"><?php echo $title; ?> Information</td>



										</tr>

                                        

                                        

                                        

										<tr>



											<td class="inputleft" width="25%" valign="top" align="left">Title</td>



											<td class="inputright" align="left"><?php echo $rs['title'];?> </td>



										</tr>

                                        



										<tr>



											<td class="inputleft" width="25%" valign="top" align="left">Description</td>



											<td class="inputright" align="left"><?php echo $rs['description'];?> </td>



										</tr>



                                        <tr>



                                          <td class="inputleft" valign="top" align="left">Amount</td>



                                          <td class="inputright" align="left"><?php echo $rs['amount'];?></td>



                                        </tr>

                                        

                                         <tr>



                                          <td class="inputleft" valign="top" align="left">Created Date</td>



                                          <td class="inputright" align="left"><?php echo date("m-d-Y",strtotime($rs['cdate']));?></td>



                                        </tr>

                                        

                                        

                                                                                 <tr>



                                          <td class="inputleft" valign="top" align="left">Status</td>



                                          <td class="inputright" align="left">

										  <?php 

										  if($rs['status']==1)

										  {

										   echo "Approved";	  

										  }

										  

										  if($rs['status']==0)

										  {

											echo "DisApproved";	    

										  }

										  

										  if($rs['status']==2)

										  {

											echo "Rejected";	    

										  }



										  

										  ?></td>



                                        </tr>



                                        

                                        

                                         <tr>



                                          <td class="inputleft" valign="top" align="left">Approved Date</td>



                                          <td class="inputright" align="left"><?php if($rs['approve_date']!='') { echo date("m-d-Y",strtotime($rs['approve_date'])); } ?></td>



                                        </tr>



										



										

										



                                        



										



										<tr>



											<td colspan="2" class="formtitle" align="center">Other Information</td>



										</tr>

                                        

                                        										<tr>



											<td class="inputleft" width="25%" valign="top" align="left">Is Approve?</td>



											<td class="inputright" align="left"><?php if($rs['status']=='1') echo 'Yes'; else echo 'No';?> </td>



										</tr>





										<tr>



											<td class="divider" colspan="2"></td>



										</tr>



										<tr>



											<td colspan="2" align="center"><input type="button" name="button" value="Close" class="button" onClick="window.close();" />											</td>



										</tr>



									</table>



								</td>



							</tr>



							<tr><td height="10"></td></tr>



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



<?php



	}else{



?>



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



				  <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">



                    <tr>



                      <td width="5"><img src="images/home_box_lt.jpg" width="5" height="28" /></td>



                      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">



                          <tr>



                            <td width="11"><img src="images/home_box_hed_lft.jpg" width="11" height="28" /></td>



                            <td background="images/home_box_hed_bg.jpg"><table width="100%" border="0" cellspacing="0" cellpadding="0">



                                <tr>



                                  <td width="25"><img src="images/icon_community.gif" width="18" height="22" /></td>



                                  <td width="774" align="left"><h3><strong><?php echo $title; ?></strong></h3></td>



                                



                                </tr>



                            </table></td>



                            <td width="7"><img src="images/home_box_hed_rght.jpg" width="7" height="28" /></td>



                            <td width="11" background="images/home_box_tbg.jpg">&nbsp;</td>



                          </tr>



                      </table></td>



                      <td width="6"><img src="images/home_box_rt.jpg" width="6" height="28" /></td>



                    </tr>



                    <tr>



                      <td background="images/home_box_lbg.jpg">&nbsp;</td>



                      <td height="120" align="center" valign="top">



					  <?php







					  $str = "";



					 if($_REQUEST["c"]!="")



					  	$str .= " and title like '" . $_REQUEST["c"] . "%'";



					if($_REQUEST["search"]!="")



					{



						$str .= " and title like '" . $_REQUEST["search"] . "%'";



					



					}



					  



					  // change-- query here



					  $query = "select * from " . $table_name . " as mdr  join member_register as mr on mr.member_register_id = mdr.member_register_id  where  1=1 $str order by member_donation_request_id desc";

			



					  $info = mysql_query($query) or die(mysql_error());



					  



					  $recordcount = mysql_num_rows($info);



					  



					  



					  extract($_REQUEST);



					  if($_POST['psize']!='')



					  	$_SESSION['psize'] = $psize;



						$psize = $_SESSION['psize'];



					  if($_POST['pos'])



					  	$_SESSION["pos"]=$_POST['pos'];



					  $pagecount = ceil($recordcount/$psize);	



							if($_REQUEST['pos'])



								$pos=$_REQUEST['pos'];



							else



								$pos=0;



							if($_REQUEST['gpos'])



								$pos=$_REQUEST['gpos']-1;



								



				?>



					



					  



					  



					  <table width="98%" border="0" cellspacing="0" cellpadding="0">



                          <tr>



                            <td>&nbsp;</td>



                          </tr>



                          <tr>



                            <td align="left">Manage <?php echo $title; ?> information of the website.</td>



                          </tr>



                          <tr>



                          	<td>&nbsp;</td>



                          	</tr>



                          <tr>



                            <td valign="middle"> 



                            	<form id="searchform" name="searchform" method="post">



                            		Search:



                            			<input type="text" name="search" id="search" value="<?php echo $search; ?>"/>



                            		



                            		<input name="submit" type="submit" class="button" id="submit" value="Submit" />



                            	</form>



							</td>



                          </tr>



                          <tr>



                            <td><table border="0" cellpadding="0" cellspacing="0" width="100%">



                                <tr>



                                	<td height="5" colspan="2" align="center" class="successmsg"></td>



                                	</tr>



                                <?php



									if($error_msg!='')



									{



								?>



										<tr>



											<td colspan="2" class="errormsg" align="center"><?php echo $error_msg; ?></td>



										</tr>	



								<?php



                                	}



									else



									{



								?>	



                                <tr>



									<td colspan="2" class="successmsg" align="center"><?php echo $msg; ?></td>



								</tr>



								<?php



									}



								?>



                                <tr>



                                  <td colspan="2" height="20" align="right"></td>



                                </tr>



                                <tr>



                                  <td align="left" nowrap="nowrap">



								  	<a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="<?php if($_REQUEST['c']=="") echo "red"; else echo 'abclink'; ?>">All </a>



									<a href="<?php echo $_SERVER['PHP_SELF']; ?>?c=a&project_id=<?php echo $project_id; ?>" class="<?php if($_REQUEST['c']=="a") echo "red"; else echo 'abclink'; ?>">A</a>



									<a href="<?php echo $_SERVER['PHP_SELF']; ?>?c=b" class="<?php if($_REQUEST['c']=="b") echo "red"; else echo 'abclink'; ?>"> B</a> 



									<a href="<?php echo $_SERVER['PHP_SELF']; ?>?c=c" class="<?php if($_REQUEST['c']=="c") echo "red"; else echo 'abclink'; ?>">C</a> 



									<a href="<?php echo $_SERVER['PHP_SELF']; ?>?c=d" class="<?php if($_REQUEST['c']=="d") echo "red"; else echo 'abclink'; ?>">D</a> 



									<a href="<?php echo $_SERVER['PHP_SELF']; ?>?c=e" class="<?php if($_REQUEST['c']=="e") echo "red"; else echo 'abclink'; ?>">E</a> 



									<a href="<?php echo $_SERVER['PHP_SELF']; ?>?c=f" class="<?php if($_REQUEST['c']=="f") echo "red"; else echo 'abclink'; ?>">F</a> 



									<a href="<?php echo $_SERVER['PHP_SELF']; ?>?c=g" class="<?php if($_REQUEST['c']=="g") echo "red"; else echo 'abclink'; ?>">G</a> 



									<a href="<?php echo $_SERVER['PHP_SELF']; ?>?c=h" class="<?php if($_REQUEST['c']=="h") echo "red"; else echo 'abclink'; ?>">H</a> 



									<a href="<?php echo $_SERVER['PHP_SELF']; ?>?c=i" class="<?php if($_REQUEST['c']=="i") echo "red"; else echo 'abclink'; ?>">I</a> 



									<a href="<?php echo $_SERVER['PHP_SELF']; ?>?c=j" class="<?php if($_REQUEST['c']=="j") echo "red"; else echo 'abclink'; ?>">J</a> 



									<a href="<?php echo $_SERVER['PHP_SELF']; ?>?c=k" class="<?php if($_REQUEST['c']=="k") echo "red"; else echo 'abclink'; ?>">K</a> 



									<a href="<?php echo $_SERVER['PHP_SELF']; ?>?c=l" class="<?php if($_REQUEST['c']=="l") echo "red"; else echo 'abclink'; ?>">L</a> 



									<a href="<?php echo $_SERVER['PHP_SELF']; ?>?c=m" class="<?php if($_REQUEST['c']=="m") echo "red"; else echo 'abclink'; ?>">M</a> 



									<a href="<?php echo $_SERVER['PHP_SELF']; ?>?c=n" class="<?php if($_REQUEST['c']=="n") echo "red"; else echo 'abclink'; ?>">N</a> 



									<a href="<?php echo $_SERVER['PHP_SELF']; ?>?c=o" class="<?php if($_REQUEST['c']=="o") echo "red"; else echo 'abclink'; ?>">O</a> 



									<a href="<?php echo $_SERVER['PHP_SELF']; ?>?c=p" class="<?php if($_REQUEST['c']=="p") echo "red"; else echo 'abclink'; ?>">P</a> 



									<a href="<?php echo $_SERVER['PHP_SELF']; ?>?c=q" class="<?php if($_REQUEST['c']=="q") echo "red"; else echo 'abclink'; ?>">Q</a> 



									<a href="<?php echo $_SERVER['PHP_SELF']; ?>?c=r" class="<?php if($_REQUEST['c']=="r") echo "red"; else echo 'abclink'; ?>">R</a> 



									<a href="<?php echo $_SERVER['PHP_SELF']; ?>?c=s" class="<?php if($_REQUEST['c']=="s") echo "red"; else echo 'abclink'; ?>">S</a> 



									<a href="<?php echo $_SERVER['PHP_SELF']; ?>?c=t" class="<?php if($_REQUEST['c']=="t") echo "red"; else echo 'abclink'; ?>">T</a> 



									<a href="<?php echo $_SERVER['PHP_SELF']; ?>?c=u" class="<?php if($_REQUEST['c']=="u") echo "red"; else echo 'abclink'; ?>">U</a> 



									<a href="<?php echo $_SERVER['PHP_SELF']; ?>?c=v" class="<?php if($_REQUEST['c']=="v") echo "red"; else echo 'abclink'; ?>">V</a> 



									<a href="<?php echo $_SERVER['PHP_SELF']; ?>?c=w" class="<?php if($_REQUEST['c']=="w") echo "red"; else echo 'abclink'; ?>">W</a> 



									<a href="<?php echo $_SERVER['PHP_SELF']; ?>?c=x" class="<?php if($_REQUEST['c']=="x") echo "red"; else echo 'abclink'; ?>">X</a> 



									<a href="<?php echo $_SERVER['PHP_SELF']; ?>?c=y" class="<?php if($_REQUEST['c']=="y") echo "red"; else echo 'abclink'; ?>">Y</a> 



									<a href="<?php echo $_SERVER['PHP_SELF']; ?>?c=z" class="<?php if($_REQUEST['c']=="z") echo "red"; else echo 'abclink'; ?>">Z</a></a></td>



                                  <td align="right">



								  <form method="post" id="pagingform">



								    Page Size:



                                      <select name="psize" id="psize" style="margin:0px;" onChange="document.getElementById('pagingform').submit()">



                                        <option label="5" value="5" <?php if($psize=="5") { ?>selected="selected" <?php } ?>>5</option>



                                        <option label="10" value="10" <?php if($psize=="10") { ?>selected="selected" <?php } ?>>10</option>



                                        <option label="25" value="25" <?php if($psize=="25") { ?>selected="selected" <?php } ?>>25</option>



                                        <option label="50" value="50" <?php if($psize=="50") { ?>selected="selected" <?php } ?>>50</option>



                                        <option label="100" value="100" <?php if($psize=="100") { ?>selected="selected" <?php } ?>>100</option>



                                        <option label="200" value="200" <?php if($psize=="200") { ?>selected="selected" <?php } ?>>200</option>



                                        <option label="500" value="500" <?php if($psize=="500") { ?>selected="selected" <?php } ?>>500</option>



                                      </select>



                                      <input name="pos" type="hidden" id="pos" value="<?php echo $pos; ?>" />



								    </form>                                  </td>



                                </tr>



                            </table></td>



                          </tr>



                          <tr>



                            <td>&nbsp;</td>



                          </tr>



                          <form name="frmStdForm" method="post">



						  <tr>



                            <td>



							<table border="0" cellpadding="0" cellspacing="1" width="100%">



                                <tr>



                                  <td width='3%' height="25" align="center" class="columnlink">&nbsp;</td>



                                 



                                  <td width='10%' height="25" align="center" nowrap="nowrap" class='columnlink'>Title</td>



                                  <td width='15%' height="25" align="center" nowrap="nowrap" class='columnlink'>Needed Amount</td> 

                                  <td width='15%' height="25" align="center" nowrap="nowrap" class='columnlink'>Member UserName</td> 



                                  <td width='10%' height="25" align="center" nowrap="nowrap" class='columnlink'>Member Email</td>
                                  <td width='10%' align="center" nowrap="nowrap" class='columnlink'>Raised Amount</td>

                              

								 



                                  <td width="20%" height="25" align="center" nowrap="nowrap" class="columnlink">Action</td>



                                </tr>



								<?php



									if($recordcount>0)



									{



										$ppos = $pos * $psize;



										$info = mysql_query("$query $str limit $ppos,$psize") or die(mysql_error());



										$cnt =0;



										while($a=mysql_fetch_array($info))



										{



											$cnt=1-$cnt;



								?>



								



											<tr class="<?php if($cnt==0) echo "classB"; else { ?>classA<?php } ?>">



											  <td align="center"><input type="checkbox" name="pk_list[]" id="pk_list[]" class="stdCheckBox" value="<?php echo $a["member_donation_request_id"]; ?>"/>                                  </td>



                                  <td align="center" style="padding: 0px 3px;">



										<?php echo $a["title"]; ?>



                                  </td>			  



				                  <td align="center" style="padding: 0px 3px;"> 



								  <?php echo "$"."&nbsp;".$a["amount"]; ?> 



                                  </td>

                                   <td align="center" style="padding: 0px 3px;"> 



								  <?php echo $a["member_username"]; ?> 



                                  </td>





                                   <td align="center" style="padding: 0px 3px;">



										<?php echo $a["member_email"]; ?>



                                  </td>
                                   <td align="center" style="padding: 0px 3px;">
                                   
                                   <?php echo "$"."&nbsp;".$a["collected_amount"]; ?>
                                   </td>	

                                	  

			  <td align="center" nowrap="nowrap" style="padding: 0px 3px;"><table width="100" border="0" cellspacing="2" cellpadding="0">



												  <tr>

                                                  

                                                  

													<td><img src="images/icon_view.gif" alt="View" class="pointer" width="18" height="18" border="0" title="View Content" onClick="JavaScript: CView_Click(document.frmStdForm, '<?php echo $a["member_donation_request_id"]; ?>');" /></td>

                                                  



  <?php

														if($a['status']=='1')

														{

													?>

															<td style="width:52px">Approved</td>

													<?php

														}elseif($a['status']=='0'){

													?>

															<td style="width:52px"><img src="images/icon_hide.gif" alt="Visible"  class="pointer" title="Click To Approve" onClick="JavaScript: CVisibleHide_Click(document.frmStdForm, '<?php echo $a[$table_name . "_id"]; ?>', '1');" width="18" height="18" border="0" /></td>

													<?php

														}else{

															?>

                                                            <td style="width:52px">Rejected</td>

														<?php	}										

													?>



                                                    <?php

														if($a['status']!='2')

														{

													?>

                                                    

                                                  <td><img src="images/icon_delete.gif" alt="Delete" class="pointer" width="18" height="18" title="Delete" border="0" onClick="JavaScript: CReason_View(document.frmStdForm, '<?php echo $a[$table_name . "_id"]; ?>');" /></td>

												   <?php } ?>

                                                  





												

													



												  </tr>



											  </table></td>



											</tr>



								<?php



										}



									}



									else



									{



								?>



								<tr><td colspan="6" align="center">No <?php echo $title; ?> information available</td></tr>



								<?php	



									}



								?>



                            </table>							</td>



                          </tr>



                          	<?php



								if($recordcount>1)



								{



							?>



							<?php



								}



							?>



							<input type="hidden" name="pk" />



							<input type="hidden" name="visible" />



                            <input type="hidden" name="toggle" />



							<input type="hidden" name="Action" />



						  </form>



                          <tr>



                            <td>&nbsp;</td>



                          </tr>



                          <?php



								if($recordcount>$psize)



								{



							?>



								  <tr>



									<td><table border="0" cellpadding="1" cellspacing="1" width="100%">



										<tr>



										  <td width="33%" align="left" valign="middle">



										  



										  <?php



										  // change-- para



										  $para = "c=" . $_REQUEST['c'] . "&search=" . $_REQUEST['search'] . "&allfield=" . $_REQUEST["allfield"];



											if($pos!=0)



											{



										  ?>



										  <a href="<?php echo $_SERVER['PHP_SELF']; ?>?<?php echo $para; ?>&pos=0"> <img src="images/p_first.gif" width="10" height="12" border="0" /></a>&nbsp;



										  <?php



										  }



										  else



										  {



										  ?>



										 <img src="images/p_first_d.gif" width="10" height="12" border="0" />



										  <?php



										  }



										  ?>



										  



										  <?php



										  if($pos>0)



										  {



										  ?>



										  <a href="<?php echo $_SERVER['PHP_SELF']; ?>?<?php echo $para; ?>&pos=<?php echo $pos-1; ?>"> <img src="images/p_prev.gif" width="10" height="12" border="0" /></a>&nbsp;



										  <?php



										  }



										  else



										  {



										  ?>



										  <img src="images/p_prev_d.gif" width="10" height="12" border="0" />



										  <?php



										  }



										  ?>



										  <?php



										  $resu=p_GetPageLimits($pos,$pagecount,10);



		



		



											for($i=$resu['startpage'];$i<=$resu['endpage'];++$i)



											{



											



												$ppage = $psize*($i - 1);



												if ($i == ($pos+1)){



													 echo "<b class='red'>$i</b>";



												 } // If current page don't give link, just text.



												 else{



											?>



											



											 <a href="<?php echo $_SERVER['PHP_SELF']; ?>?<?php echo $para; ?>&amp;pos=<?php echo ($i-1);?>" class="abclink"><?php echo $i; ?></a> &nbsp;



											<?php



											



												}



											}



						?>



										<?php



											if($pos<($pagecount-1))



											{



										?>				  



											<a href="<?php echo $_SERVER['PHP_SELF']; ?>?<?php echo $para; ?>&pos=<?php echo $pos+1; ?>"><img src="images/p_next.gif" width="7" height="12" border="0" /></a>&nbsp;



										<?php



											}



											else



											{



										?>



										<img src="images/p_next_d.gif" width="7" height="12" border="0" />&nbsp;



										<?php



										}



										?>



											



										<?php



										if($pos!=($pagecount-1)&&$pagecount!=0)



										{



										



										?>	



										<a href="<?php echo $_SERVER['PHP_SELF']; ?>?<?php echo $para; ?>&pos=<?php echo $pagecount-1; ?>"><img src="images/p_last.gif" width="10" height="12" border="0" /></a>



										<?php



										}



										else



										{



										?>



										<img src="images/p_last_d.gif" width="10" height="12" border="0" />



										<?php



										



										}



										?>										</td>



										 <td align="center"> Showing <b><?php echo $ppos+1;?></b> - <b><?php $lpos=($pos+1)*$psize; if($lpos<$recordcount) echo $lpos; else echo $recordcount; ?></b> of <b><?php echo $recordcount; ?></b></td>



										  <td align="right"  width="33%">



										  	<form id="form1" name="form1" method="post" action="">



										  



											Goto Page:



											



											<span id="sprytextfield1">



											<input name="gpos" type="text" id="gpos" size="5" maxlength="5" />



											<span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span>



											<input name="c" type="hidden" id="c" size="5" value="<?php echo $_REQUEST["c"]; ?>" />



											<input name="search" type="hidden" id="search" size="5" value="<?php echo $_REQUEST["search"]; ?>" />



											<input name="allfield" type="hidden" id="allfield" size="5" value="<?php echo $_REQUEST["allfield"]; ?>" />



											&nbsp;



											<input name="Submit" type="submit" class="button" value="GO" />



											</form>											</td>



										</tr>



                            </table></td>



                          </tr>



						  <?php



						  	}



						  ?>



                          <tr>



                            <td>&nbsp;</td>



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



<?php



	}



?>



<script type="text/javascript">



<!--



var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "integer", {useCharacterMasking:true});



//-->



</script>



</body>



</html>



