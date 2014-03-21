<?php session_start();



if($_SESSION[mid]=='')



{



	header("Location:index.php");



	exit();



}



include("include/config.php"); 

function get_country($country_id)

{



$select = "SELECT cname FROM countries WHERE cid ='$country_id' "; 

$rs = mysql_query($select);

$ros = mysql_fetch_array($rs);

$country_name = $ros['cname'];

return $country_name;

}



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



					    



                        <h2 class="color2"><strong>N</strong>eed Profile<span>List</span></h2>

                      

<?php
$q=mysql_query("select * from member_donation_request where member_donation_request_id  =  '".$_GET['did']."'" ) ;
if(mysql_num_rows($q)>0)
{
$data=mysql_fetch_array($q);	
?>
<div style="-webkit-box-shadow: 0px 0px 7px rgba(45, 50, 50, 1);-moz-box-shadow:    0px 0px 7px rgba(45, 50, 50, 1);box-shadow:   0px 0px 7px rgba(45, 50, 50, 1); -moz-border-radius: 10px;
-webkit-border-radius: 5px;border-radius: 5px;  -khtml-border-radius: 5px; height:auto; margin-bottom:30px; padding-bottom:20px;">

<div style="float:left; padding:10px; margin-left:10px;"><strong>Title</strong><br><br><?php echo $data[title]; ?></div>
<div style="float:right; padding:10px; margin-left:10px;"><strong>Country</strong><br>
  <br><?php  echo get_country($data['country']); ?></div>
<div style="clear:both"></div>
<div style="float:left; padding:10px; margin-left:10px;"><strong>Amount Need</strong><br>
  <br><?php echo $data[amount]; ?></div>
<div style="float:left; padding:10px; margin-left:10px;"><strong>Status</strong><br>
  <br><?php if($data[status ]==1){ echo "Approve";}else if($data[status ]==2){ echo "Rejected";  }else{ echo "Disapprove"; }?></div>  
<div style="float:left; padding:10px; margin-left:10px;"><strong>Reason</strong><br>
  <br>
  <?php echo $data[reason]; ?></div>  
  
<div style="float:left; padding:10px; margin-left:10px;"><strong>Description</strong>
<br><?php if(!empty($data[img])) { ?><img src="upload/<?php echo $data[img]; ?>"  width="200" height="200" align="left" style="padding-top:30px; padding-right:10px;" /><?php } ?><br><?php echo $data[description]; ?>
</div>    
   
<div style="clear:both"></div>
</div>				                        

<?php } ?>


                    



						



                        		



                    



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