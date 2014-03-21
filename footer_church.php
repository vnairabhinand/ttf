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
	

	

 	if(amount <= 1)

 	{

		

		$('input[name=amount]').val('1.00');

		$(".paypal-button").submit();

	}

	else

	{

		

		//alert(amount);

		

		$('input[name=amount]').val(amount);

		

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


<?php if(empty($_SESSION['mid'])) { ?>
			<div class="wrapper" style="margin-top:50px; height:55px; ">


				



</div>	<?php } ?>



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