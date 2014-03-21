<?php session_start();

if($_SESSION["AdminId"]=="")

{

	header("Location:login.php");

	exit();

}
$table_name = "member_donation_request";

$title="Member Request View";

$page = $_SERVER['PHP_SELF'];


?><script type="text/javascript" language="javascript">
function CDelete_Click(PK)

	{


			if(confirm('Are you sure you want to delete this information?'))

			{
				
				document.location="member_request_view.php?Action=Delete&pk="+PK;
				

			}



			


	}

function CApprove_Click(PK)

	{

				
				document.location="member_request_view.php?Action=Approve&pk="+PK;
				

	}
function CReject_Click(PK)

	{

				
				document.location="member_request_view.php?Action=Reject&pk="+PK;
				

	}


</script>
<link rel="stylesheet" href="css/style.css" />

<?php
 include_once("include/config.php");

if($_REQUEST['Action'] =='Delete')

	{

		$id = $_REQUEST['pk'];

		$sql = mysql_query("DELETE FROM " . $table_name  . " WHERE " . $table_name . "_id = ".$id) or die(mysql_error);

	?>
		<script>
			window.opener.location.reload();
			window.close();
		</script>


	<?php }

if($_REQUEST['Action'] =='Reject')

	{

		$id = $_REQUEST['pk'];

		$sql =mysql_query("Update member_donation_request set status='2' where member_donation_request_id='".$_REQUEST['pk']."' ") or die(mysql_error);

	?>

<script>
			window.opener.location.reload();
			

		</script>

	<?php }


if($_REQUEST['Action'] =='Approve')

	{

		$id = $_REQUEST['pk'];

		$sql =mysql_query("Update member_donation_request set status='1' where member_donation_request_id='".$_REQUEST['pk']."' ") or die(mysql_error);

	?>


<script>
			window.opener.location.reload();
			

		</script>
	<?php }

	// change-- query here


		$query 	= mysql_query("select * from ".$table_name." as mdr  join member_register as mr on mr.member_register_id = mdr.member_register_id  where ".$table_name."_id =".$_GET['pk']) or die(mysql_error());

		$rs	= mysql_fetch_array($query);

?>

			<form name="forAction" method="POST">
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

											<td colspan="2" align="center">
											<?php if($rs['status']!='1')  echo '<input type="button" name="button" value="Approve" class="button" onClick="JavaScript: CApprove_Click('.$rs["member_donation_request_id"].');" />' ;

											if($rs['status']!='2') {?>
										    <input type="button" name="button" value="Reject" class="button" onClick="JavaScript: CReject_Click('<?php echo $rs["member_donation_request_id"]; ?>');" />

												<?php } ?>
	<input type="button" name="button" value="Delete" class="button" onClick="JavaScript: CDelete_Click('<?php echo $rs["member_donation_request_id"]; ?>');" />
											<input type="button" name="button" value="Close" class="button" onClick="window.close();" />							</td>

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

</form>


