<?php
  include("include/config.php");
$country_id = $_POST['country_id'];

$select = "SELECT * FROM province WHERE cid ='$country_id'";
$rs = mysql_query($select);
$numrows = mysql_num_rows($rs);
if($numrows > 0)
{
?>
<select name="province" style="background-color:#CCCCCC; width:220px; " >
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