<section  style=" margin: 0 6px;

    position: relative;

    width: 158px;padding-top:20px; float:left;">







 <?php  if($_SESSION['did']!=""){ ?>



  <p><a href="dmyaccount.php"> Edit Profile </a> </p>  
  
  <a href="dmyaccountlist.php">Supported Needs</a>
  


 <?php } ?>



 <?php  if($_SESSION['mid']!=""){ ?>



  <p><a href="myaccount.php"> View Profile  </a> </p>



    <p><a href="edit_profile.php"> Edit Profile  </a> </p> 



  



<?php 



   $query = mysql_query("select is_approve from member_register where member_register_id = '".$_SESSION['mid']."'");



   $data = mysql_fetch_array($query);   



   if($data['is_approve']==1)



   {



 ?> 



 <p><a href="donation_request.php"> Enter Need Profile  </a> </p> 



 <?php } ?>



 



  <p><a href="donation_request_list.php"> Need Profile List  </a> </p> 



                            



   <?php } ?>                         



</section>