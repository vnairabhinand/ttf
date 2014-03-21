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





<link rel="stylesheet" type="text/css" href="css/anylinkmenu.css" />



<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">



<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css">



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
<th>
<?php
$q=mysql_query("select * from member_donation_request where  member_register_id=".$_SESSION[mid]);
if(mysql_num_rows($q)>0)
{
while($data=mysql_fetch_array($q)){	
?>     
<div align="left" style="border-bottom:#C60 1px solid; margin-top:50px; margin-bottom:20px;">
<table width="564" border="1" cellspacing="0" cellpadding="2">
  <tr  style="font-size:17px; color:#E78416">
    <td width="298" height="12">Need Title</td>
    <td width="79">Amount</td>
    <td width="110">Status</td>
    <td width="51" align="right">Edit</td>
  </tr>
  <tr  style="font-size:17px; color:#E78416">
    <td height="13" colspan="3">&nbsp;</td>
    <td width="51" align="right">&nbsp;</td>
  </tr>
  <tr>
    <td height="29" align="left" valign="top"><?php echo $data[title]; ?></td>
    <td align="left" valign="top">$<?php echo $data[amount ]; ?></td>
    <td align="left" valign="top"><?php if($data[status ]==1){ echo "Approved";}else if($data[status ]==2){ echo "Rejected";  }else{ echo "Approval Pending"; }?></td>
    <td align="center" valign="middle"><div style="margin-top:5px;">
<?php if($data[status]==0) {?><a href="donation_request.php?did=<?php echo $data[member_donation_request_id]; ?>">
<img src="images/action_edit.png" border="0" alt="Edit" title="Edit" ></a><?php } ?></div></td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4">
<div><?php echo "<div style=\"float:left\"><img style=\"margin-top:0px; padding:10px\" src=\"upload/$data[img]\" width=\"200\" height=\"200\" /></div>".$data[description]; ?></div></td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" ></td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
</table>
</div>
<?php }	}else{
?>
<div align="center">Donations Not Available</div>                    
<?php } ?>       


          </th>



                    
                    </tr>



                    



                    <?php



						$q=mysql_query("select * from member_donation_request where  member_register_id=".$_SESSION[mid]);



						if(mysql_num_rows($q)>0)



						{



						while($data=mysql_fetch_array($q)){	



						?>



								



					<?php }	}else{



					 ?>



                     <tr>



                     <td align="center">Donations Not Available</td>



                     



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