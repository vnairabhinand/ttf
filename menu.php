<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<div class="wrapper">

<div style="top:20px; position:absolute; z-index:1;">
<img src="images/etfloggo.jpg"  />
</div>

<!--				<h1><a href="index.php" id="logo">Especially The Family</a></h1>
                <h6><a href="index.php" id="tag">Especially<br>The Family</a></h6>-->



				<nav>



					<ul id="top_nav">						

					

					 <?php if($_SESSION[uname]!="") { ?><li><a >Welcome &nbsp;&nbsp;<span style="color:#666666;"><?php echo $_SESSION[uname]; ?></span></a></li><?php  }else{ ?>

                     <li><a href="#" class="menuanchorclass" rel="anylinkmenu1" style="color:#666666;" >LOG IN</a></li> 

					 <?php } ?>

                     



                     <?php if($_SESSION[mid]!="") { ?>  

                     <li> <a href="myaccount.php"> My Account </a>  </li> 

					 <?php } ?>

					 <?php if($_SESSION[did]!="") { ?>  

                     <li> <a href="dmyaccount.php"> My Account </a>  </li> 

					 <?php } ?>



                     <?php if($_SESSION[did]!=""){?>

					 <li class="end"><?php if($_SESSION[did]!="") { ?>

                     <a href="donorlogout.php">Logout</a> <?php } ?>

                     </li>

					 <?php

					 }else

					 {

					 ?>

					<li class="end">

					<?php if($_SESSION[mid]!="") { ?>

                    <a href="memberlogout.php">Logout</a> 

					<?php }else{ ?>

                    <a href="#"  class="menuanchorclass" rel="anylinkmenu2" style="color:#666666;" >REGISTER</a>

					<?php } ?>

                    </li>



                   	<?php } ?>

					</ul>



				</nav>



				<nav>



					<ul id="menu">

						<?php if($flag ==2 ){ $page =""; } ?>

						<li <?php if($page==1) { ?> id="menu_active" <?php } ?>><a href="index.php">Home</a></li>						



                        <li <?php if($flag==2)  {  ?> id="menu_active" <?php } ?>><a href="viewneeds.php">View Needs</a></li>



						<li <?php if($page==3) { ?> id="menu_active" <?php } ?>><a href="howitworks.php" class="menuanchorclass" rel="anylinkmenu3">HOW TO GIVE</a></li>



						<li <?php if($page==4) { ?> id="menu_active" <?php } ?>><a href="aboutus.php"     >About us</a></li>



						<li <?php if($page==5) { ?> id="menu_active" <?php } ?>><a href="contact.php" class="menuanchorclass" rel="anylinkmenu4">Contact us</a></li>



					</ul>



				</nav>



			</div>