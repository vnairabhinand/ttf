<div class="wrapper">

				<h1><a href="index.php" id="logo">Hope Center</a></h1>

				<nav>

					<ul id="top_nav">						
					<li>
					<?php if($_SESSION[uname]!="") { ?><a >Welcome </a>  
					<?php echo $_SESSION[uname]; }else{ ?>
                    <a href="#" class="menuanchorclass" rel="anylinkmenu1" style="color:#666666;" >LOG IN</a> 
					<?php } ?>
                     </li>
					<?php if($_SESSION[did]!="") { ?>  
                    <li> <a href="dedit_profile.php"> My Account </a>  </li> 
					<?php } ?>
					<li class="end">
					<?php if($_SESSION[mid]!="") { ?>
                    <a href="donorlogout.php">Logout</a> 
					<?php }else{ ?><a href="#" class="menuanchorclass" rel="anylinkmenu2" style="color:#666666;">REGISTER</a><?php } ?>
                    </li>
					<li class="end"><?php if($_SESSION[did]!="") { ?>
                    <a href="donorlogout.php">Logout</a> 
					<?php } ?>
                    </li>
					</ul>

				</nav>

				<nav>

					<ul id="menu">

						<li <?php if($page==1) { ?> id="menu_active" <?php } ?>><a href="index.php">Home</a></li>						

                        <li <?php if($page==2) { ?> id="menu_active" <?php } ?>><a href="viewneeds.php">View Needs</a></li>

						<li <?php if($page==3) { ?> id="menu_active" <?php } ?>><a href="howitworks.php">HOW IT WORKS</a></li>

						<li <?php if($page==4) { ?> id="menu_active" <?php } ?>><a href="aboutus.php">About us</a></li>

						<li <?php if($page==5) { ?> id="menu_active" <?php } ?>><a href="contact.php">Contact</a></li>

					</ul>

				</nav>

			</div>