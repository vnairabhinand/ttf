<?php session_start();



if($_SESSION[mid]=='')



{



	header("Location:index.php");



	exit();



}



include("include/config.php"); 



?>







<!DOCTYPE html>



<html lang="en">







<head>



<title>Need Profile List</title>



<meta charset="utf-8">



<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">



<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">



<link rel="stylesheet" href="css/style.css" type="text/css" media="all">



<script type="text/javascript" src="js/jquery-1.6.js"></script>



<script type="text/javascript" src="js/cufon-yui.js"></script>



<script type="text/javascript" src="js/cufon-replace.js"></script> 



<script type="text/javascript" src="js/Vegur_700.font.js"></script>



<script type="text/javascript" src="js/Vegur_400.font.js"></script>



<script type="text/javascript" src="js/Vegur_300.font.js"></script>



<script type="text/javascript" src="js/atooltip.jquery.js"></script>



<script type="text/javascript" src="js/script.js"></script>



<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>



<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>







<!--[if lt IE 9]>



	<script type="text/javascript" src="js/html5.js"></script>



	<style type="text/css">



		.box1 figure {behavior:url(js/PIE.htc)}



	</style>



<![endif]-->



<!--[if lt IE 7]>



		<div style='clear:both;text-align:center;position:relative'>



			<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0" alt="" /></a>



		</div>



<![endif]-->



<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">



<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css">



</head>



<body id="page5">



<div class="body1">



	<div class="main">



<!-- header -->



		<header>			



           <?php $page=9; ?>		



          <?php include("menu.php"); ?>  



		</header>



<!-- / header -->



<!-- content -->



		<article id="content">



			<div class="wrapper">



				<div class="box1">



					<div class="line3 wrapper">



						<?php include("left_menu.php"); ?>



                        



						<section class="col2 pad_left1" style="float:left;">



					    



                        <h2 class="color2"><strong>N</strong>eed Profile <span>List</span></h2>



                        



                    <table width="121%" border="1" cellpadding="0" cellspacing="0"  >



                    <tr>







                    <th width="10%" style="border:1px solid black;">Title



                    </th>



                    



                    <th width="27%" style="border:1px solid black;">Description



                    </th>



                    



                    <th width="15%" style="border:1px solid black;">Amount



                    </th>



                    <th width="14%" style="border:1px solid black;" >Status



                    </th>



                    



                    <th width="15%" style="border:1px solid black;" >Notes



                    </th>



                    <th width="19%" style="border:1px solid black;" >Action



                    </th>



                    



                    



                    </tr>



                    



                    <?php



						$q=mysql_query("select * from member_donation_request where  member_register_id=".$_SESSION[mid]);



						if(mysql_num_rows($q)>0)



						{



						while($data=mysql_fetch_array($q)){	



						?>



                        <tr>



                        	<td align="center" style="border:1px solid black;" ><?php echo $data[title]; ?> </td>



                        	<td align="center" style="border:1px solid black;" ><?php $truncated = substr($data[description],0,strpos($data[description],' ',10)); echo $truncated."..." ?></td>



                            <td align="center" style="border:1px solid black;" ><?php echo $data[amount]; ?></td>



                            <td align="center" style="border:1px solid black;" ><?php if($data[status ]==1){ echo "Approve";}else if($data[status ]==2){ echo "Rejected";  }else{ echo "Disapprove"; }?></td>







                            <td align="center" style="border:1px solid black;" ><?php echo $data[reason]; ?></td>



<td align="center" style="border:1px solid black;" >
<a href="donation_request_list_view.php?did=<?php echo $data[member_donation_request_id]; ?>">View</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="donation_request_edit.php?did=<?php echo $data[member_donation_request_id]; ?>">Edit</a>
</td>



                        



                        </tr>



								



					<?php }	}else{



					 ?>



                     <tr>



                     <td colspan="6" align="center" style="border:1px solid black;" >Donations Not Available</td>



                     



                     </tr>



                    



                    <?php 



						}?>



                    </table>



						



                        		



                    



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



<!-- footer -->



	   <?php include("footer.php"); ?>	



<!-- / footer -->



	</div>



</div>



<script type="text/javascript">



Cufon.now();



</script>



</body>







</html>