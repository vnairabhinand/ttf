<?php
include('logInit.php');

$amount = $_GET['amt'];
$cid= $_GET['amt'];
$nid= $_GET['nid'];
$payer= $_GET['donor'];
$msg= $_GET['msg'];
$insert = "INSERT INTO paymentguest (amount,cid,nid,date,payer,msg) VALUE('$amount',$cid,$nid,sysdate(),'$payer','$msg')";
$rs = mysql_query($insert);
echo "<script>window.location='gustpaymentsuccess.php?status=true'</script>";	
?>