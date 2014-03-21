<?php

include('logInit.php');

$donor_id = $_GET['donor'];

$need_reuest_id = $_GET['need_reuest_id'];

$tx = $_GET['tx'];

$status = $_GET['st'];

$amount = $_GET['amt'];

$currency = $_GET['cc'];

$cm = $_GET['cm'];

$item_number = $_GET['item_number'];
$signature = $_GET['sig'];
$insert = "INSERT INTO transaction_details (id, donor_id, need_reuest_id, tx, status, amount, currency, cm, item_number, signature, paydate) VALUE('', '$donor_id', '$need_reuest_id', '$tx', '$status', '$amount', '$currency', '$cm', '$item_number', '$signature', sysdate())";
$rs = mysql_query($insert);
$select = "SELECT collected_amount FROM member_donation_request WHERE member_donation_request_id = '$need_reuest_id'";
$rs1 = mysql_query($select);
$data = mysql_fetch_array($rs1);
$collected_amount =$data['collected_amount'];
$new_amount = $collected_amount + $amount;
$update = "UPDATE member_donation_request SET collected_amount = '$new_amount' WHERE member_donation_request_id = '$need_reuest_id'"; 
$u = mysql_query($update);
$_SESSION['newamt']=$amount;
$_SESSION['nedid']=$need_reuest_id;
$log->logg('login','Logged In','low','blue',"$_SESSION[did]","$_SESSION[d]","$_SESSION[newamt]","$_SESSION[nedid]"); //pretend that the page is login.php, the last parameter "mail" is set to default (no)



if($update){

echo "<script>window.location='donation_detail.php?mdr=$need_reuest_id&status=true'</script>";	

	

	}



?>