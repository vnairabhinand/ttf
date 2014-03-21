<?php session_start();
if($_SESSION[mid]=='')
{
header("Location:index.php");
exit();
}
$msg = '';
include("include/config.php"); 
if(isset($_POST['submit']))
{
extract($_POST);

		    $insts=basename($_FILES['img']['name']); 
			if(!empty($insts)){
            $newname="upload/".$insts;  
            if( move_uploaded_file($_FILES['img']['tmp_name'], $newname)) 
			{ }
			}else{
				$insts = $imageupdate;
				}
mysql_query("update member_donation_request set title='".$title."',
															description='".$desc."',
															amount='".$amount."',
															country='".$countries."',
															province='".$province."', img = '".$insts."'  
															where  member_donation_request_id=".$memid);
$msg = "Donation Request  update succesfully";
$_GET['did'] = '';		
}
?>
<!DOCTYPE html>



<html lang="en">







<head>



<title>Donation Request</title>



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

<script>

function get_province(countryid)

{

	

	



data="country_id="+countryid;

$.ajax({

type: "post",

url: "get_province_member.php",

data: data,

success: function(res) {



$("#insert_province").empty();

$("#insert_province").html(res);

}



});





}





    function isNumberKey(evt)

      {

         var charCode = (evt.which) ? evt.which : event.keyCode

         if (charCode > 31 && (charCode < 48 || charCode > 57))

            return false;



         return true;

      }



</script>








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



                        



						<section class="col2 pad_left1">



					    



                        <h2 class="color2"><strong>E</strong>dit need profile <span>Form</span></h2>



                        



                      <h5 style="color:#009">  <?php if($msg!='') { echo $msg; } ?> </h5>



						

<div style=" padding:20px; -webkit-box-shadow: 0px 0px 7px rgba(45, 50, 50, 1);-moz-box-shadow:    0px 0px 7px rgba(45, 50, 50, 1);box-shadow:   0px 0px 7px rgba(45, 50, 50, 1); -moz-border-radius: 10px;
-webkit-border-radius: 5px;border-radius: 5px;  -khtml-border-radius: 5px; height:auto; margin-bottom:30px; padding-bottom:20px;">

                        		<form id="MemberForm" method="post" enctype="multipart/form-data">



						<div>

<?php
if(!empty($_GET['did'])){
$q=mysql_query("select * from member_donation_request where  member_donation_request_id=".$_GET['did']);
$data=mysql_fetch_array($q);	
}
?>
<div class="wrapper"><span>Title:</span><span id="sprytextfield1"> <font style="color:#FF0000">*</font>
<span style="padding-left:50px;"><input name="title" type="text" class="input" id="title" value="<?php echo $data[title]; ?>" size="47" style="height:30px; margin-bottom:10px;"></span>
</span></div>



                           



                            <div class="wrapper"><span>Amount:</span><span id="sprytextfield2"> <font style="color:#FF0000">*</font>
<span style="padding-left:30px;"><select name="amount"  onChange="return isNumberKey(event)"  style="height:30px; margin-bottom:10px;"  >
  <option value="<?php echo $data[amount]; ?>" selected><?php echo $data[amount ]; ?></option>
  <option value="600">600</option>
  <option value="900">900</option>
  <option value="1200">1200</option>
</select></span>
                            </span></div>

                            

<div class="wrapper"><span>Image:</span><span id="sprytextfield2">
<span style="padding-left:50px;">
<input name="img" type="file" style="height:30px; margin-bottom:10px;"><img src="upload/<?php echo $data[img]; ?>" width="50" height="50" >
<input name="imageupdate" type="hidden" value="<?php echo $data[img]; ?>">
<input name="memid" type="hidden" value="<?php echo $_GET['did']; ?>">
</span>
                           </span></div>                            

                                              <div class="wrapper"><span>Country:</span><span id="sprytextfield2">



                               <font style="color:#FF0000">*</font>
                                <span style="padding-left:29px;">
<select  name="countries" style="width:312px;   margin-bottom:10px; height:30px;" onChange="get_province(this.value)" >
<?php

							  $selecta = "SELECT * FROM countries where cid = '".$data['country']."' ";

							  $rsa = mysql_query($selecta);

$rowsa = mysql_fetch_array($rsa);

?>
                              <option value="<?php echo $rowsa['cid'] ?>" selected ><?php echo $rowsa['cname'] ?></option>

                              <?php

							  $select = "SELECT * FROM countries order by cname";

							  $rs = mysql_query($select);

							  $numrows = mysql_num_rows($rs);

							  if($numrows > 0)

							  {

								  while($rows = mysql_fetch_array($rs))

								  {

							  ?>

                              	<option value="<?php echo $rows['cid']; ?>"   ><?php echo $rows['cname']; ?></option>

                              <?php

								  }

							  }

							  ?>

								</select></span>

         </span></div>

                            

                            

                                   <div class="wrapper"><span>Province:</span><span id="sprytextfield2"> <font style="color:#FF0000">*</font></span>
                                               <span style="padding-left:24px;"><span id="insert_province"> 
                                               <select  name="province"  style="width:312px;   margin-bottom:10px; height:30px;" >
                                                <?php

							  $selecta = "SELECT * FROM province where pid = '".$data['province']."' ";

							  $rsa = mysql_query($selecta);

$rowsa = mysql_fetch_array($rsa);

?>
                              <option value="<?php echo $rowsa['pid'] ?>" selected ><?php echo $rowsa['pname'] ?></option>

                                                
                                                </select></span></span>

                                              </div>



                           



<div class="textarea_box"><span>Description: <font style="color:#FF0000">*</font></span><span id="sprytextarea1">



  <span style="padding-left:4px;"><textarea cols="36" rows="5" style="margin-bottom:10px;" name="desc" id="desc" ><?php echo $data[description]; ?></textarea>
  </span></span></div>



                     



                     <div style="clear:both"> </div>



                          <input type="submit" class="button2 color3" name="submit" id="submit" value="Submit">                          



							<!--<a href="#" class="button2 color3" onClick="document.getElementById('MemberForm').submit()">Send</a>-->



							<a href="#" class="button2 color3" onClick="document.getElementById('MemberForm').reset()">Clear</a>



						</div>



					</form></div>



                    



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



var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");



var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");



var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");



</script>



</body>







</html>