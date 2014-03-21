<?
if(!empty($_SESSION['did'])){
$payer= 'donor'; 
}
else{
$payer='guest';	
	}
?>
<script>

$(document).ready(function(){

  $("#pay_guest").click(function(){

   //alert("The paragraph was clicked.");

  	var amount =$('input[name=new_amount]').val();
	  	var mesage =$('input[name=mesage]').val();
	
	

 	if(amount <= 1)

 	{

		

		$('input[name=amount]').val('1.00');
		$('input[name=mesage]').val(mesage);

		$(".paypal-button").submit();

	}

	else

	{

		

		//alert(amount);

		

		$('input[name=amount]').val(amount);
	    $('input[name=mesage]').val(mesage);		

		$(".paypal-button").submit();

	}

 	

  });

  

  

  

  

});





function intOnly(i)

{

if(i.value.length>0)

{

i.value = i.value.replace(/[^\d]+/g, '');

}

}


</script>
<footer>
<?php   
if($d == ''){ 
if(empty($vemil))  { ?>
<?php if($_GET['f'] == '') {     ?>
<?php if(empty($_SESSION['did'])) {  ?> 
<div class="wrapper" style="margin-top:50px; height:55px;">
&nbsp; 
<strong><a style="color:#000"  href="#tips">General Donation</a> : </strong>  &nbsp;If you would prefer to make a general donation, instead of registering as a donor, you may do so here. <br />  
<div style="margin-top:5px;">
<form id="form1" name="form1" method="get" action="">
<div align="center">  
<input name="mesage" type="text" id="mesage" placeholder="Message" style="border:1px solid; width:200px; "   />                              
$

<input type="text" style="border:1px solid; width:70px;  text-align:center;" name="new_amount" onKeyUp="intOnly(this)" onKeyPress="intOnly(this)" >
                              
<img src="images/paypal_donate_button.jpg" id="pay_guest" style="width:132px;height:60px; cursor:pointer; z-index:1; margin-top:-5px;"></div>

 

<span style="text-align:right; float:right; visibility:hidden;" >

<script 

    data-env="sandbox" 

    data-callback="<?php echo BASEURL; ?>payment_callback_gust.php"

    data-tax="0" 

    data-shipping="0" 

    data-amount="0" 

    data-quantity="0" 

    data-name="Donate"

    data-image_url="<?php echo BASEURL; ?>images/bg.jpg"

    data-return="<?php  echo BASEURL; ?>payment_callback_gust.php?donor=<?php echo $payer; ?>&cid=<?php echo $_GET['countries']?>&nid=<?php echo $_GET['needtype'];?>&msg=<?php echo $_GET['mesage'];?>"

    data-rm="2" 

    data-button="donate" src="js/paypalbutton.js?merchant=buisiness_etf@paypal.com"></script>

</span>

</form></div>

				



</div>	<?php }   } }  }?>



			<div class="wrapper">



				<nav>



					<ul id="footer_menu">



						<li <?php if($page==1) { ?> class="active"  <?php } ?>><a href="index.php">Home</a></li>



						<li <?php if($page==2) { ?> class="active"  <?php } ?>><a href="viewneeds.php">View Needs</a></li>



						<li <?php if($page==3) { ?> class="active"  <?php } ?>><a href="howitworks.php">How To Give</a></li>



						<li <?php if($page==4) { ?> class="active"  <?php } ?>><a href="aboutus.php">About Us</a></li>



                        <li <?php if($page==5) { ?> class="active"  <?php } ?>><a href="contact.php">Contact</a></li>



                        <li <?php if($page==7) { ?> class="active"  <?php } ?>><a href="faqs.php">FAQ</a></li>



						<li class="end<?php if($page==8) { ?>  active  <?php } ?>"><a href="submit.php">Submit A Need</a></li>



					</ul>



                    



				</nav>



                <ul id="icons">



					<li><a href="#" class="normaltip" title="Facebook"><img src="images/icon1.gif" alt=""></a></li>



					<li><a href="#" class="normaltip" title="Twitter"><img src="images/icon2.gif" alt=""></a></li>



					<li><a href="#" class="normaltip" title="Linkedin"><img src="images/icon3.gif" alt=""></a></li>



				</ul>



				<!--<div class="tel"><span>+1 800</span>123 45 67</div>-->



			</div>



			<div id="footer_text">



				<a href="#" target="_blank">&copy; 2013 ETF - All rights reserved.</a><br>



		  </div>



		</footer>