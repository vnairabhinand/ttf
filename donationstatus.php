<?php session_start();



  include("include/config.php");

  

  if(isset($_GET['c']))

  {

	$country_qry = " AND country = '".$_GET['c']."'";  

  }

  else

  {

	$country_qry = "";  

  }

  

  

	// How many adjacent pages should be shown on each side?

	$adjacents = 5;

/* 

	   First get total number of rows in data table. 

	   If you have a WHERE clause in your query, make sure you mirror it here.

	*/

	$query = "SELECT COUNT(*) as num FROM transaction_details where donor_id = '".$_SESSION['did']."'  ";

	$total_pages = mysql_fetch_array(mysql_query($query));

	$total_pages = $total_pages[num];

	

	/* Setup vars for query. */

	$targetpage = "donationstatus.php"; 	//your file name  (the name of this file)

	$limit = 6; 								//how many items to show per page

	$page = $_GET['page'];

	if($page)

	{ 

		$start = ($page - 1) * $limit; 			//first item to display on this page

	}

	else {

		$start = 0;								//if no page var is given, set start to 0

	}

	

	

	/* Setup page vars for display. */

	if ($page == 0) $page = 1;					//if no page var is given, default to 1.

	$prev = $page - 1;							//previous page is page - 1

	$next = $page + 1;							//next page is page + 1

	$lastpage = ceil($total_pages/$limit);		//lastpage is = total pages / items per page, rounded up.

	$lpm1 = $lastpage - 1;						//last page minus 1

	

	/* 

		Now we apply our rules and draw the pagination_new object. 

		We're actually saving the code to a variable in case we want to draw it more than once.

	*/

	$pagination_new = "";

	if($lastpage > 1)

	{	

		$pagination_new .= "<div class=\"pagination_new\">";

		//previous button

		if ($page > 1) 

		{

			if(isset($_GET['c']))

			{

				$c = $_GET['c'];

				$pagination_new.= "<a href=\"$targetpage?page=$prev&c=$c&doid=$_SESSION[did]\"><< previous</a>";

			}

			else

			{

				$pagination_new.= "<a href=\"$targetpage?page=$prev&doid=$_SESSION[did]\"><< previous</a>";

			}

			

		}

		else

		{

			$pagination_new.= "<span class=\"disabled\"><< previous</span>";	

		}

		//pages	

		if ($lastpage < 7 + ($adjacents * 2))	//not enough pages to bother breaking it up

		{	

			for ($counter = 1; $counter <= $lastpage; $counter++)

			{

				if ($counter == $page)

				{

					$pagination_new.= "<span class=\"current\">$counter</span>";

				}

				else

				{

					if(isset($_GET['c']))

					{

						$c = $_GET['c'];

						$pagination_new.= "<a href=\"$targetpage?page=$counter&c=$c&doid=$_SESSION[did]\">$counter</a>";

					}

					else

					{

						$pagination_new.= "<a href=\"$targetpage?page=$counter&doid=$_SESSION[did]\">$counter</a>";

					}

					

				}

			}

		}

		elseif($lastpage > 5 + ($adjacents * 2))	//enough pages to hide some

		{

			//close to beginning; only hide later pages

			if($page < 1 + ($adjacents * 2))		

			{

				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)

				{

					if ($counter == $page)

						$pagination_new.= "<span class=\"current\">$counter</span>";

					else

						$pagination_new.= "<a href=\"$targetpage?page=$counter&doid=$_SESSION[did]\">$counter</a>";					

				}

				$pagination_new.= "...";

				$pagination_new.= "<a href=\"$targetpage?page=$lpm1&doid=$_SESSION[did]\">$lpm1</a>";

				$pagination_new.= "<a href=\"$targetpage?page=$lastpage&doid=$_SESSION[did]\">$lastpage</a>";		

			}

			//in middle; hide some front and some back

			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))

			{

				$pagination_new.= "<a href=\"$targetpage?page=1&doid=$_SESSION[did]\">1</a>";

				$pagination_new.= "<a href=\"$targetpage?page=2&doid=$_SESSION[did]\">2</a>";

				$pagination_new.= "...";

				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)

				{

					if ($counter == $page)

						$pagination_new.= "<span class=\"current\">$counter</span>";

					else

						$pagination_new.= "<a href=\"$targetpage?page=$counter&doid=$_SESSION[did]\">$counter</a>";					

				}

				$pagination_new.= "...";

				$pagination_new.= "<a href=\"$targetpage?page=$lpm1&doid=$_SESSION[did]\">$lpm1</a>";

				$pagination_new.= "<a href=\"$targetpage?page=$lastpage&doid=$_SESSION[did]\">$lastpage</a>";		

			}

			//close to end; only hide early pages

			else

			{

				$pagination_new.= "<a href=\"$targetpage?page=1&doid=$_SESSION[did]\">1</a>";

				$pagination_new.= "<a href=\"$targetpage?page=2&doid=$_SESSION[did]\">2</a>";

				$pagination_new.= "...";

				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)

				{

					if ($counter == $page)

						$pagination_new.= "<span class=\"current\">$counter</span>";

					else

						$pagination_new.= "<a href=\"$targetpage?page=$counter&doid=$_SESSION[did]\">$counter</a>";					

				}

			}

		}

		

		//next button

		if ($page < $counter - 1)

		{ 

		     if(isset($_GET['c']))

			 {

				 $c = $_GET['c'];

 			$pagination_new.= "<a href=\"$targetpage?page=$next&c=$c&doid=$_SESSION[did]\">next >></a>";



			 }

			 else

			 {

			$pagination_new.= "<a href=\"$targetpage?page=$next&doid=$_SESSION[did]\">next >></a>";

			 }

		}

		else

		{

			$pagination_new.= "<span class=\"disabled\">next >></span>";

			$pagination_new.= "</div>\n";

		}

	}	

	





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



<title>View Needs</title>



<meta charset="utf-8">



<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">



<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">



<link rel="stylesheet" href="css/style.css" type="text/css" media="all">

<script>

var config = {

base: "<?php echo BASEURL; ?>"

};

</script>

<!--<script type="text/javascript" src="js/jquery-1.6.js"></script>-->

<script src="js/jquery-1.7.2.min.js"></script>

<script src="js/lightbox.js"></script>

<link rel="stylesheet" href="lightbox.css" type="text/css" media="screen" />



<script type="text/javascript" src="js/cufon-yui.js"></script>



<script type="text/javascript" src="js/cufon-replace.js"></script> 



<script type="text/javascript" src="js/Vegur_700.font.js"></script>



<script type="text/javascript" src="js/Vegur_400.font.js"></script>



<script type="text/javascript" src="js/Vegur_300.font.js"></script>



<script type="text/javascript" src="js/atooltip.jquery.js"></script>



<script type="text/javascript" src="js/script.js"></script>



<script type="text/javascript" src="js/tabs.js"></script>

<script type="text/javascript" src="js/menucontents.js"></script>



<script type="text/javascript" src="js/anylinkmenu.js"></script>

<script type="text/javascript">



//anylinkmenu.init("menu_anchors_class") //Pass in the CSS class of anchor links (that contain a sub menu)

anylinkmenu.init("menuanchorclass")





function sortthelist(countryid)

{

	 if(countryid == "all")

     {

		 window.location = 'donationstatus.php?doid=<?php echo $_SESSION['did'] ?>';

     }

	 else

	 {

		 window.location = 'donationstatus.php?c='+countryid+'&doid='+ <?php echo $_SESSION['did'] ?>;

	 }

}



function show_hide(val)

{

	if(val == "hide")

	{

	$('#map').fadeOut(2000);

	$('#hidspan').fadeOut(2000);

	$('#showpan').fadeIn(2000);

	$('#zoombtn').hide();

	}

	else

	{

	$('#map').fadeIn(2000);

	$('#showpan').fadeOut(2000);

	$('#hidspan').fadeIn(2000);	

	$('#zoombtn').show();	

	}

}



function show_zoom()

{

	$("#map").click();

}

</script>





<link rel="stylesheet" type="text/css" href="css/anylinkmenu.css" />

<link rel="stylesheet" type="text/css" href="css/pagination.css" />





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



</head>



<body id="page3">



	<div class="body1">



		<div class="main">



<!-- header -->



			<header>



            

			<?php $flag=2; ?>

			<?php include("menu.php"); ?>	



            



			</header><div class="ic"><div class="inner_copy">All <a href="http://www.magentothemesworld.com/" title="Best Magento Templates">premium Magento themes</a> at magentothemesworld.com!</div></div>



<!-- / header -->





<!-- content -->



			<article id="content" class="tabs">



				<div class="wrapper">



					<div class="box1" style="position:relative; height:auto !important;">

						<b style="margin-left:46px;" >ETF currently operates in Latin America and Asia, with the hope of expanding to other parts of the globe in the future.</b><br/>

						

                        <!--<a href="images/World_Map_WSF.png" rel="lightbox[plants]" title="Currently ETF operates in Latin America and Asia, with the hope of expanding to further parts of the globe in the future">-->
                        <img  style="margin-left: 250px; margin-top: 0px;" id="map" src="images/rsz_world_map_wsf.png" width="305" height="173"><!--</a>-->



					<!--<img src="images/zoom.png" style="position:absolute; top:140px; left:390px; cursor:pointer;" onClick="show_zoom()" id="zoombtn" />-->



                    </div>



                    

                    

                    <div style="position:relative;">

<span id="hidspan" onclick="show_hide('hide')" style="cursor:pointer;" >[-]&nbsp;Hide Map</span>                    

<span id="showpan" onclick="show_hide('show')" style="display:none; cursor:pointer;	" >[-]&nbsp;Show Map</span>                    

<span style="font-size: 12px; left: 546px; position: absolute; top: -24px;" >Click hear to see any current unmet needs for each individual country</span>                    
 
<select style="float:right;margin-top:5px; border:1px solid #DDD9D0; text-align:left; width:200px;" onChange="sortthelist(this.value)" >

<option value="all">All</option>

<?php
 
$selectaa ="select * from transaction_details where donor_id = '".$_SESSION['did']."'  "; 
$qaa=mysql_query($selectaa); 
while($dataaa=mysql_fetch_array($qaa))
{
$select = "SELECT * FROM countries as c , member_donation_request as mr WHERE c.cid = mr.country   and   mr.member_donation_request_id = '".$dataaa['need_reuest_id']."' ";
$rs = mysql_query($select);
$numrows = mysql_num_rows($rs);
$rows = mysql_fetch_array($rs);
?>
<option <?php  if(isset($_GET['c'])) {  if($_GET['c'] == $rows['cid']) : echo "selected";  endif;} ?>   value="<?php echo $rows['cid']; ?>" ><?php echo $rows['cname']; ?></option>
<?php
}
?>





</select>

</div>

<section class="col1">

<?php 
$select ="select * from transaction_details where donor_id = '".$_SESSION['did']."'  LIMIT $start, $limit   ";
$q=mysql_query($select); 
$num_rows =  mysql_num_rows($q);
while($data=mysql_fetch_array($q))
{
$se ="select * from member_donation_request where member_donation_request_id != '68' and  member_donation_request_id != '69' and member_donation_request_id != '70'   and  member_donation_request_id  = '".$data['need_reuest_id']."'  $country_qry ";
$qq=mysql_query($se); 
$da=mysql_fetch_array($qq);	
?>
<a href="donation_detail.php?mdr=<?php echo $data['need_reuest_id'] ?>" target="_blank">
<div style="float:left; width:400px; height:200px; padding-right:30px; margin-bottom:50px;  border-bottom:1px #069 solid; padding-bottom:20px; padding-top:20px; ">
<div style="text-align:center; font-size:16px; font-family:Tahoma, Geneva, sans-serif"><strong><?php echo $data['title']; ?></strong></div>
<div align="center"><?php echo $da['title']; ?></div><br/> 
<div style="width:100px; height:100px;"><?php if(!empty($da['img'])) { ?><img src="upload/<?php echo $da['img']; ?>" width="100" height="100" ><br> <?php } ?></div>
<?php if(!empty($da['country'])) { ?>
Country : <?php  echo get_country($da['country']); ?><br>
Amount Donated : $<?php echo $data['amount']; ?> <br>
Payment Date : <?php echo $data['paydate'];  }?> 
</div>
<?php  } ?>	</a>
</section>

                            </div>

						</article>





<div style="height:30px; width:100%; text-align:left;" ><?php if($num_rows > 0) { echo $pagination_new; } ?></div>

<!-- / content -->



<!-- footer -->



		<?php include("footer.php"); ?>	



<!-- / footer -->



		</div>



	</div>



<script type="text/javascript">Cufon.now(); tabs.init();</script>



</body>







</html>