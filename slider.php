<!--<div class="slider">

				<ul class="items">

					<li>

						<img src="images/img1.jpg" alt="">

						<div class="banner">

							<div class="wrapper"><span><em>"Therefore, as we have opportunity, let us do good to all people,<br><b>especially to those who belong to the family of believers</b>."</em></span></div>

						

						</div>

					</li>

					<li>

						<img src="images/img2.jpg" alt="">

						<div class="banner">

							<div class="wrapper"><span>The MISSION of Especially The Family is to work with local church leaders<br> in developing countries to identify and meet some of the specific needs<br> of the faithful disciples in their congregations.</span></div>

						</div>

					</li>

					<li>

						<img src="images/img3.jpg" alt="">

						<div class="banner">

							<div class="wrapper"><span>The PROMISE of Especially The Family is that every dollar of support  given<br> by members of the program will be received in full  by the individuals or<br> families that are chosen to receive it. </span></div>

							

						</div>

					</li>

				</ul>

				<ul class="pagination">

					<li id="banner1"><a href="#">Galatians<span>6:10</span></a></li>

					<li id="banner2"><a href="#">Our<span>mission</span></a></li>

					<li id="banner3"><a href="#">Our<span>promise</span></a></li>

				</ul>

			</div>-->
            
            <div class="slider">
				<ul class="items">
					<li>
						<img src="images/img1.jpg" alt="">
						<div class="banner">
							<div class="wrapper"><span>"Therefore, as we have opportunity, let us do good to all people,<b>especially to those who belong to the family of believers</b>."</span></div>
						
						</div>
					</li>
					<li>
						<img src="images/img2.jpg" alt="">
						<div class="banner">
							<div class="wrapper"><span>The MISSION of Especially The Family is to work with local church leaders in developing countries to identify and meet some of the specific needs of the faithful disciples in their congregations.</span></div>
						</div>
					</li>
					<li>
						<img src="images/img3.jpg" alt="">
						<div class="banner">
							<div class="wrapper"><span>The PROMISE of Especially The Family is that every dollar of support  given by members of the program will be received in full  by the individuals or families that are chosen to receive it. </span></div>
							
						</div>
					</li>
                    <li>
                    <?php
					$select = "SELECT count(member_donation_request_id) as needsmet FROM member_donation_request WHERE collected_amount >= amount";
					$rs = mysql_query($select);
					$rows = mysql_fetch_array($rs);
					$needsmet = $rows['needsmet'];
					
					//amount met
					$selectamun1 = "SELECT SUM(`amount`) as metamount FROM `member_donation_request` WHERE collected_amount >= amount";
					$rsamun1 = mysql_query($selectamun1);
					$rowsamun1 = mysql_fetch_array($rsamun1);
					$needsmetamount = $rowsamun1['metamount'];
									
					
					$select1 = "SELECT count(member_donation_request_id) as needsunmet FROM member_donation_request WHERE collected_amount < amount";
					$rs1 = mysql_query($select1);
					$rows1 = mysql_fetch_array($rs1);
					$needsunmet = $rows1['needsunmet'];
					
					//amount unmet
					
					$selectamun = "SELECT SUM(`amount`) as unmetamount FROM `member_donation_request` WHERE collected_amount < amount";
					$rsamun = mysql_query($selectamun);
					$rowsamun = mysql_fetch_array($rsamun);
					$needsunmetamun = $rowsamun['unmetamount'];
					
					$select2 = "SELECT SUM(collected_amount) as am FROM member_donation_request";
					$rs2 = mysql_query($select2);
					$rows2 = mysql_fetch_array($rs2);
					$collected_amount = $rows2['am'];
					
					
					
					?>
						<img src="images/img4.jpg" alt="">
						<div class="banner">
							<div class="wrapper"><span>TOTAL NEEDS MET: <font style="color:#666; font-weight:bold; font-style:italic; font-size:1.5em;"><?php echo $needsmet." ("."$ ".$needsmetamount.") "; ?></font>
                            						 TOTAL NEEDS UNMET: <font style="color: #999; font-weight:bold; font-size:1.5em;"><?php echo $needsunmet." ("."$ ".$needsunmetamun.") "; ?></font>
                                                   TOTAL DONATED: <font style="color: #F00; font-weight:bold; font-size:1.5em;">$ <?php echo $collected_amount; ?></font>
                                                 </span></div>
							
						</div>
					</li>
				</ul>
				<ul class="pagination">
					<li id="banner1"><a href="#"><span>Galatians</span>6:10</a></li>
					<li id="banner2"><a href="#"><span>Our</span>mission</a></li>
					<li id="banner3"><a href="#"><span>Our</span>promise</a></li>
                    <li id="banner4"><a href="#"><span>Our</span>progress</a></li>
				</ul>
			</div>
			<!--testing the change in git -->