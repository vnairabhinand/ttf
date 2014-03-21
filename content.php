<?php
$aa = "Miss Chorwon is a 13-year-old girl who was orphaned at age of seven when her parents moved to Thailand to seek work. To feed herself she lived and worked in a brick factory, but in 2012 lost her right arm while working with a new machine. Members of the Battambang Church of Christ took her in after she was discharged from a local hospital. In 2013 a group of generous nurses from Belmont University learned of her plight and decided to help out. The $600 they donated allowed her new caretakers to buy her a bicycle and attend school for an entire year.";

$bb = "Mr. Singee Chan and his wife Malise became Christians in 2012. Though they both work full-time, they can only afford to live in a small house with a leaky roof, which also lacks floors, doors and windows. In 2013 a group of generous people in the Greater Hartford Church of Christ donated $600, allowing some Christians who attend Church with Singee and his family to build them a new roof, a new outdoor bathroom, and some additional walls for privacy.";

$cc = "Mr. Buthla and his wife Phalla are faithful disciples who have overcome numerous tragedies in their family, most related to living more than 60 years in a country that has been torn by poverty, war and genocide during that time. In 2013 their only asset, their home, burnt to the ground because of an electrical appliance fire. A generous man in Indiana learned of their plight and donated $600 to help out. Together with the help of others, Buthla and Phalla now have a place to call their own again..";

?>


<article id="content">



			<div class="wrapper">



				<div class="box1">
					<div class="line1"><div class="line2 wrapper">
						<section class="col1">
							<h2 style="font-size:24px"><strong>M</strong>iss<span> Chorwon <br>(Cambodia)</span></h2>
							<div class="pad_bot1"><figure><img src="images/page1_img1.jpg" alt=""></figure></div>
<?php echo substr($aa,0,250)."..."; ?>        
							<a href="homeview.php?mdr=68" class="button1">Read More</a>
						</section>
						<section class="col1 pad_left1">
							<h2 class="color2" style="font-size:24px"><strong>M</strong>r.<span> Singee's Family (Cambodia)</span></h2>
							<div class="pad_bot1"><figure><img src="images/page1_img2.jpg" alt=""></figure></div>
							<?php echo substr($bb,0,250)."..."; ?>  <a href="homeview.php?mdr=69" class="button1 color2">Read More</a>
						</section>
						<section class="col1 pad_left1">
							<h2 class="color3" style="font-size:24px"><strong>M</strong>r.<span> Buthla's Family (Cambodia)</span></h2>
							<div class="pad_bot1"><figure><img src="images/page1_img3.jpg" alt=""></figure></div>
							<?php echo substr($cc,0,250)."..."; ?>  <a href="homeview.php?mdr=70" class="button1 color3">Read More</a>
						</section>
					</div></div>
				</div>	



			</div>



			<div class="wrapper">



				



					



				</div>



			<?php /*?><div class="wrapper">



				<div class="box2">



					<div class="line1"><div class="line2 wrapper">



<?php

$select ="SELECT *, MONTHNAME(cdate) as month, DAY(cdate) as day, YEAR(cdate) as year FROM member_donation_request WHERE status = '1' ORDER BY RAND() LIMIT 0,3";

//echo $select;



$rs =mysql_query($select);

//$data = array();

while($rows = mysql_fetch_assoc($rs))

{

$data[]=$rows;

}



?>

						<section class="col1">



							<h4><span><?php echo $data[0]['month'].'&nbsp;&nbsp;'.$data[0]['day'].'&nbsp;&nbsp;';  ?></span><?php echo $data[0]['year'] ?></h4>



							<p class="pad_bot2"><strong style="color:#fff;" ><?php echo myTruncate2($data[0]['title'],34); ?></strong></p>



							<p><?php echo myTruncate2($data[0]['description'],60); ?></p>



							<a href="donation_detail.php?mdr=<?php echo $data[0]['member_donation_request_id']; ?>" class="button2">Read More</a>



						</section>



						<section class="col1 pad_left1">



							<h4 class="color2"><span><?php echo $data[1]['month'].'&nbsp;&nbsp;'.$data[1]['day'].'&nbsp;&nbsp;';  ?></span><?php echo $data[1]['year'] ?></h4>



							<p class="pad_bot2"><strong style="color:#fff;"><?php echo myTruncate2($data[1]['title'],34); ?></strong></p>



							<p><?php echo myTruncate2($data[1]['description'],60); ?></p>



							<a href="donation_detail.php?mdr=<?php echo $data[1]['member_donation_request_id']; ?>" class="button2 color2">Read More</a>



						</section>



						<section class="col1 pad_left1">



							<h4 class="color3"><span><?php echo $data[2]['month'].'&nbsp;&nbsp;'.$data[2]['day'].'&nbsp;&nbsp;';  ?></span><?php echo $data[2]['year'] ?></h4>



							<p class="pad_bot2"><strong style="color:#fff;"><?php echo myTruncate2($data[2]['title'],34); ?></strong></p>



							<p><?php echo myTruncate2($data[2]['description'],60); ?></p>



							<a href="donation_detail.php?mdr=<?php echo $data[2]['member_donation_request_id']; ?>" class="button2 color3">Read More</a>



						</section>



					</div></div>



				</div>



			</div><?php */?>



		</article>

<?php

function myTruncate2($string, $limit, $break=" ", $pad="...") { 

// return with no change if string is shorter than $limit 

if(strlen($string) <= $limit) 

return $string; 

$string = substr($string, 0, $limit); 

if(false !== ($breakpoint = strrpos($string, $break))) 

{ 

$string = substr($string, 0, $breakpoint); 

} 

return $string . $pad; 

}

?>

