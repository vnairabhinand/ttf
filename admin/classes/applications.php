<?
function getProductCountInOrder($SessID,$OrderID)
{
	global $c1;
	$q=db_query("select count(*)  from scs_cart  where SessID='$SessID' and OrderID='$OrderID'");
	$r=db_fetch_array($q); 
	return $r[0];
}

function getInvoice($order_id,$odate1)
{
if($order_id<10) $inv="000".$order_id;
else if($order_id<100) $inv="00".$order_id;
else if($order_id<1000) $inv="0".$order_id;
else $inv=$order_id;
$invoice=$inv."/".$odate1;
return $invoice;
}


?>