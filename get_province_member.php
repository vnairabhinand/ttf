<?php

  include("include/config.php");

$country_id = $_POST['country_id'];



$select = "SELECT * FROM province WHERE cid ='$country_id'";

$rs = mysql_query($select);

$numrows = mysql_num_rows($rs);

if($numrows > 0)

{

?>

<select name="province"  style="width:312px; margin-left:2px; margin-bottom:10px; height:30px;" >

<?php

while($rows = mysql_fetch_array($rs))

{

?>

<option value="<?php echo $rows['pid']; ?>"><?php echo $rows['pname']; ?></option>

<?php

}

?>

</select>

<?php	

}

?>